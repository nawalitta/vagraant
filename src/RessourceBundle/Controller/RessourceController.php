<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RessourceController extends Controller
{
    /**
     * Affichage de toutes les ressources présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
       $entityManager = $this->getDoctrine()->getManager();
       $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
       $erreurMsg = "";
       //Récupere la liste des ressources coché afin de les supprimer
       $listRessources=$request->get('idRessources');
        if($listRessources !=null){
            foreach ($listRessources as $id){

                $ressource = $ressourceRepository->findOneById($id);
                try{
                    if ($ressource != null) {
                        $entityManager->remove($ressource);
                    }
                $entityManager->flush();                   
                } catch (\Exception $ex) {
                    //Pb suppression
                    $erreurMsg = " Les ressources sont encore affectées à une activité";
                }

            }           
        }
       
       $ressources = $ressourceRepository->findAll();
        
        return $this->render('RessourceBundle:Ressource:index.html.twig', array(
            "ressources"=>$ressources,"erreur"=>$erreurMsg
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une Enfant
     * @param Request $request
     * @return Response
     */
    public function editAction($id=null,$idActivite=null,Request $request)
    {
       $entityManager = $this->getDoctrine()->getManager();
  
       $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
        
       $ressource = $ressourceRepository->findOneById($id);
       if($ressource==null)
       { 
           $ressource=new \RessourceBundle\Entity\Ressource();
       }
       $form = $this->createForm(\RessourceBundle\Form\RessourceType::class,$ressource);
        
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($ressource);
            
            $entityManager->flush();
             $request->getSession()->getFlashBag()->add('notice', 'La Ressource est bien enregistrée.');
            return $this->redirect($this->generateUrl('RessourceBunde_Ressource_index'));
        }
        
        return $this->render('RessourceBundle:Ressource:edit.html.twig', array(
            'ressource'=>$ressource,
            'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une ressource
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
      $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
     $ressource = $ressourceRepository->findOneById($id);
     $erreurMsg ="";
       if($ressource!=null)
           $entityManager->remove ($ressource);
          
       try{
            $entityManager->flush();                   
        } catch (\Exception $ex) {
            //Pb suppression
            $erreurMsg = " Les ressources sont encore affectées à une activité";
            return $this->render('RessourceBundle:Ressource:show.html.twig', array(
                "ressource"=>$ressource,"erreur"=>$erreurMsg
            ));
        }
        return $this->redirect($this->generateUrl('RessourceBunde_Ressource_index'));
    }

    /**
     * Affichage d'une ressource présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
        $ressource = $ressourceRepository->findOneById($id);
        $erreurMsg ="";
        return $this->render('RessourceBundle:Ressource:show.html.twig', array(
            "ressource"=>$ressource,"erreur"=>$erreurMsg
        ));
    }

}
