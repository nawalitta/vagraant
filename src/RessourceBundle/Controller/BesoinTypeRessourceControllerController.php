<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BesoinTypeRessourceControllerController extends Controller
{
    public function editAction()
    {
        return $this->render('RessourceBundle:BesoinTypeRessourceController:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('RessourceBundle:BesoinTypeRessourceController:delete.html.twig', array(
            // ...
        ));
    }

    public function indexAction()
    {
        return $this->render('RessourceBundle:BesoinTypeRessourceController:index.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('RessourceBundle:BesoinTypeRessourceController:show.html.twig', array(
            // ...
        ));
    }

}
