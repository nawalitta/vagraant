<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteRealiseeType;

class ActiviteRealiseeController extends Controller
{
    /**
     * Affichage de toutes les ActiviteRealisee présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");
        $activitesRealisees = $activiteRealiseeRepository->findAll();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();
        $erreurMsg = "";
        
        //Récupere la liste des activités coché afin de les supprimer
        $listActiviteR=$request->get('idActivitesRealisee');
        if($listActiviteR !=null){
            foreach ($listActiviteR as $id){

                $activiteR = $activiteRealiseeRepository->findOneById($id);
                if ($activiteR != null) {
                    $entityManager->remove($activiteR);
                }
                try{
                    $entityManager->flush();                   
                } catch (Exception $ex) {
                    $erreurMsg = " un enfant possede encore cette activite";
                }

            }           
        }
        
        //Fin suppression des éléments
        
        return $this->render('ActiviteBundle:ActiviteRealisee:index.html.twig', array(
        "activitesRealisees"=>$activitesRealisees,"enfants"=>$enfants,"erreur"=>$erreurMsg
        ));
    }
    
    /**
     * Affichage d'une ActiviteRealisee présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");
        $activiteRealisee = $activiteRealiseeRepository->findOneById($id);
        
        return $this->render('ActiviteBundle:ActiviteRealisee:show.html.twig', array(
        "activiteRealisee"=>$activiteRealisee
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une ActiviteRealisee
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");
        $activiteRealisee = $activiteRealiseeRepository->findOneById($id);
        
        if($activiteRealisee==null){
            $activiteRealisee=new \ActiviteBundle\Entity\ActiviteRealisee();
        }
        
        $form = $this->createForm(ActiviteRealiseeType::class,$activiteRealisee);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($activiteRealisee);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'ActiviteRealisee bien enregistrée.');

            return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteRealisee_index'));
        }
        
        return $this->render('ActiviteBundle:ActiviteRealisee:edit.html.twig', array(
        'activiteRealisee'=>$activiteRealisee,
        'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une ActiviteRealisee
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */    
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
        $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");
        $activiteRealisee = $activiteRealiseeRepository->findOneById($id);
        if($activiteRealisee!=null){
            $entityManager->remove ($activiteRealisee);
        }
        $entityManager->flush();
       
        return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteRealisee_index'));
    }

}
