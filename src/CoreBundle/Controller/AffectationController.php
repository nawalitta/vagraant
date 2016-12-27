<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AffectationController extends Controller
{
    public function affecterEnfantActiviteOptionAction()
    {

        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_option.html.twig', array(
            // ...
        ));
    }

    public function affecterEnfantActiviteObligatoireAction()
    {
        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', array(
            // ...
        ));
    }

}
