<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ActiviteBundle\Form\ActiviteType;
use ActiviteBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Request;

class ActiviteController extends Controller
{
    public function editAction($id=null, Request $request)
    {
        #Création formulaire
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $em = $this->getDoctrine()->getManager();
        
        $form->handleRequest($request);
        if ($id==null){
            #Ajout
            if ($form->isValid()) {
                $activite = $form->getData();
                $em->persist($activite);
                $em->flush();
                return $this->redirectToRoute('ActiviteBundle_activite_show');
            }
        }else{
            #Modification
            $activite = $em->getRepository('ActiviteBundle:Activite')->find($id);
            $activite = $form->getData();
            $em->flush();
            return $this->redirectToRoute('ActiviteBundle_activite_show');


        }

        return $this->render('ActiviteBundle:Activite:edit.html.twig', array('form' => $form->createView() , ));
    }

    public function deleteAction($id=null)
    {
        if($id!=null)
        {
            $em = $this->getDoctrine()->getManager();
            $activite = $em->getRepository('ActiviteBundle:Activite')->find($id);
            $em->remove($activite);
            $em->flush();
        }

        return $this->render('ActiviteBundle:Activite:show.html.twig');
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listActivite = $em->getRepository("ActiviteBundle:Activite")->findAll();
        return $this->render('ActiviteBundle:Activite:show.html.twig',array("listActivite"=>$listActivite));
    }
}