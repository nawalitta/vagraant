<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActiviteController extends Controller
{
    public function editAction()
    {
        return $this->render('ActiviteBundle:Activite:edit.html.twig', array(
            // ...
        ));
    }

}
