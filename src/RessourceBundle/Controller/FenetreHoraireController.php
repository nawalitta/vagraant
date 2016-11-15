<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FenetreHoraireController extends Controller
{
    public function indexAction()
    {
        return $this->render('RessourceBundle:FenetreHoraire:index.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('RessourceBundle:FenetreHoraire:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
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
