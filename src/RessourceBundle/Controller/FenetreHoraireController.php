<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FenetreHoraireController extends Controller
{
    public function indexAction()
    {
        return $this->render('RessourceBundle:FenetreHoraire:index.html.twig', array(
            // ...
        ));
    }

    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
       $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        
       $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
       
       $form = $this->get('form.factory')->create(new \RessourceBundle\Form\FenetreHoraireType(), $fenetreHoraire);
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($fenetreHoraire);
            
            $entityManager->flush();
            
            return $this->redirect($this->generateUrl('RessourceBunde_FenetreHoraire_index'));
        }
        
        return $this->render('AlexisTestBundle:Default:edit.html.twig', array(
            'fenetreHoraire'=>$fenetreHoraire,
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id=null)
    {
        return $this->render('RessourceBundle:FenetreHoraire:delete.html.twig', array(
            // ...
        ));
    }

    public function showAction($id)
    {
        return $this->render('RessourceBundle:FenetreHoraire:show.html.twig', array(
            // ...
        ));
    }

}
