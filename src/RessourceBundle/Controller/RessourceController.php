<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RessourceController extends Controller
{
    public function indexAction()
    {
       $entityManager = $this->getDoctrine()->getManager();
           $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
      $ressources = $ressourceRepository->findAll();
        
        return $this->render('RessourceBundle:Ressource:index.html.twig', array(
            "ressources"=>$ressources
        ));
    }

    public function editAction($id=null,Request $request)
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

    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
      $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
     $ressource = $ressourceRepository->findOneById($id);
       if($ressource!=null)
           $entityManager->remove ($ressource);
       $entityManager->flush();
       
        return $this->redirect($this->generateUrl('RessourceBunde_Ressource_index'));
    }

    public function showAction($id)
    {
         $entityManager = $this->getDoctrine()->getManager();
             $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
         $ressource = $ressourceRepository->findOneById($id);
        
        return $this->render('RessourceBundle:Ressource:show.html.twig', array(
            "ressource"=>$ressource
        ));
    }

}
