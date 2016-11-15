<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TypeActiviteController extends Controller
{
    public function indexAction()
       {
        return $this->render('ActiviteBundle:TypeActivite:index.html.twig', array(
            // ...
        ));
    }
    
    public function editAction($id=Null)
    {
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
