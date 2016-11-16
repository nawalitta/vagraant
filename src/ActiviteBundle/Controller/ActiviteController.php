<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ActiviteBundle\Form\ActiviteType;
use ActiviteBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Request;

class ActiviteController extends Controller
{
    public function editAction(Request $request)
    {
        #Création formulaire
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        
        
        $form->handleRequest($request);
        #Ajout
        if ($form->isValid()) {
            $activite = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            
        }
        
        return $this->render('ActiviteBundle:Activite:edit.html.twig', array('form' => $form->createView() , ));
    }

}
