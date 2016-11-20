<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\FenetreHoraireType;

class FenetreHoraireController extends Controller
{
    /**
     * Affichage de toutes les FenetreHoraire présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetresHoraire = $fenetreHoraireRepository->findAll();
        
        return $this->render('RessourceBundle:FenetreHoraire:index.html.twig', array(
        "fenetresHoraire"=>$fenetresHoraire
        ));
    }
    
    /**
     * Affichage d'une FenetreHoraire présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
        
        return $this->render('RessourceBundle:FenetreHoraire:show.html.twig', array(
        "fenetreHoraire"=>$fenetreHoraire
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une FenetreHoraire
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
        
        if($fenetreHoraire==null){
            $fenetreHoraire=new \RessourceBundle\Entity\FenetreHoraire();
        }
        
        $form = $this->createForm(FenetreHoraireType::class,$fenetreHoraire);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($fenetreHoraire);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'FenetreHoraire bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBunde_FenetreHoraire_index'));
        }
        
        return $this->render('RessourceBundle:FenetreHoraire:edit.html.twig', array(
        'fenetreHoraire'=>$fenetreHoraire,
        'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une FenetreHoraire
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */    
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
        if($fenetreHoraire!=null){
            $entityManager->remove ($fenetreHoraire);
        }
        $entityManager->flush();
       
        return $this->redirect($this->generateUrl('RessourceBundle_FenetreHoraire_index'));
    }

}
