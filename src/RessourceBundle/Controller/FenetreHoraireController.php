<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\FenetreHoraireType;

class FenetreHoraireController extends Controller
{
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
           $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
      $fenetresHoraire = $fenetreHoraireRepository->findAll();
        
        return $this->render('RessourceBundle:FenetreHoraire:index.html.twig', array(
            "fenetresHoraire"=>$fenetresHoraire
        ));
    }

    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
       $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        
       $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
       if($fenetreHoraire==null) $fenetreHoraire=new \RessourceBundle\Entity\FenetreHoraire();
       $form = $this->createForm(FenetreHoraireType::class,$fenetreHoraire);
        
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($fenetreHoraire);
            
            $entityManager->flush();
             $request->getSession()->getFlashBag()->add('notice', 'FenetreHoraire bien enregistrée.');
            return $this->redirect($this->generateUrl('RessourceBunde_FenetreHoraire_index'));
        }
        
        return $this->render('RessourceBundle:FenetreHoraire:edit.html.twig', array(
            'fenetreHoraire'=>$fenetreHoraire,
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
       $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
       $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
       if($fenetreHoraire!=null)
           $entityManager->remove ($fenetreHoraire);
       $entityManager->flush();
       
        return $this->redirect($this->generateUrl('RessourceBunde_FenetreHoraire_index'));
    }

    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
           $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
      $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
        
        return $this->render('RessourceBundle:FenetreHoraire:show.html.twig', array(
            "fenetreHoraire"=>$fenetreHoraire
        ));
    }

}
