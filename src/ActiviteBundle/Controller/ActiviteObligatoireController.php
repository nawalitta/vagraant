<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ActiviteBundle\Form\ActiviteObligatoireType;
use ActiviteBundle\Entity\ActiviteObligatoire;

class ActiviteObligatoireController extends Controller
{
    public function editAction()
    {
        $activiteObligatoire = new ActiviteObligatoire();
        $form = $this->createForm(ActiviteObligatoireType::class,$activiteObligatoire);
        return $this->render('ActiviteBundle:ActiviteObligatoire:edit.html.twig',array('form' => $form->createView(),
        ));
    }

}
