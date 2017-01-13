<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteFixeeType;

class ActiviteFixeeController extends Controller
{
    /**
     * Affichage de toutes les ActiviteFixee présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activitesFixees = $activiteFixeeRepository->findAll();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();
        $erreurMsg = "";
        /**
        //Recupere le nom de l'enfant pour changer la liste
        $enfantSelectionner = $enfantRepository->findOneById( $request->get('enfantId'));
        if($enfantSelectionner !=null)
        {
            
            $activitesFixees = $activiteFixeeRepository->findByEnfant($enfantSelectionner);
        }
        */
        //Récupere la liste des activités coché afin de les supprimer
        $listActiviteF=$request->get('idActivitesFixee');
        if($listActiviteF !=null){
            foreach ($listActiviteF as $id){

                $activiteF = $activiteFixeeRepository->findOneById($id);
                if ($activiteF != null) {
                    $entityManager->remove($activiteF);
                }
                try{
                    $entityManager->flush();                   
                } catch (Exception $ex) {
                    $erreurMsg = "Un enfant possede encore cette activite";
                }

            }           
        }
        
        //Fin suppression des éléments
        
        return $this->render('ActiviteBundle:ActiviteFixee:index.html.twig', array(
        "activitesFixees"=>$activitesFixees, "enfants" => $enfants,"erreur"=>$erreurMsg
        ));
    }
    
    /**
     * Affichage d'une ActiviteFixee présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activiteFixee = $activiteFixeeRepository->findOneById($id);
        $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
        return $this->render('ActiviteBundle:ActiviteFixee:show.html.twig', array(
        "activiteFixee"=>$activiteFixee
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une ActiviteFixee
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($idFixee=null,$idActivite,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activiteFixee = $activiteFixeeRepository->findOneById($idFixee);
        
        if($activiteFixee==null){
            $activiteFixee=new \ActiviteBundle\Entity\ActiviteFixee();
        }
        
        $form = $this->createForm(ActiviteFixeeType::class,$activiteFixee);
        $form->handleRequest($request);
        
        if($form->isValid()){
            //On ajoute les informations qu'on a présent sur la page
            $activiteFixee.setHeureDebut($form->get('heureDebut')->getData());
            $activiteFixee.setHeureFin($form->get('heureDebut')->getData());
            $activiteFixee.setActivite($idActivite);
            $activiteFixee.setJour($form->get('jour')->getData());
            
            $entityManager->persist($activiteFixee);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'ActiviteFixee bien enregistrée.');

            return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteFixee_index'));
        }
        
        return $this->render('ActiviteBundle:ActiviteFixee:edit.html.twig', array(
        'activiteFixee'=>$activiteFixee,
        'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une ActiviteFixee
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */    
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activiteFixee = $activiteFixeeRepository->findOneById($id);
        if($activiteFixee!=null){
            $entityManager->remove ($activiteFixee);
        }
        $entityManager->flush();
       
        return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteFixee_index'));
    }

}
