<?php

namespace ActiviteBundle\Controller;

use ActiviteBundle\Entity\Activite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ActiviteBundle\Form\TypeActiviteType;
use ActiviteBundle\Entity\TypeActivite;
use Symfony\Component\HttpFoundation\Request;

class TypeActiviteController extends Controller
{
    public function indexAction()
    {
        return $this->render('ActiviteBundle:TypeActivite:index.html.twig', array(
            // ...
        ));
    }
    
    public function editAction($id=Null,Request $request)
    {
        
        #Création formulaire
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $em = $this->getDoctrine()->getManager();
        return $this->render('ActiviteBundle:TypeActivite:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction($id)
    {
        return $this->render('ActiviteBundle:TypeActivite:delete.html.twig', array(
            // ...
        ));
    }

    public function showAction($id)
    {
        return $this->render('ActiviteBundle:TypeActivite:show.html.twig', array(
            // ...
        ));
    }

}
