<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AffectationController extends Controller
{
    public function affecterEnfantActiviteOptionAction(Request $request)
    {
        $array = $this->getDataAffecterEnfantActivite();
        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_option.html.twig', $array );
    }

    public function affecterEnfantActiviteObligatoireAction()
    {
        $array = $this->getDataAffecterEnfantActivite();
        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig',$array);
    }

    private function getDataAffecterEnfantActivite(){
        $entityManager = $this->getDoctrine()->getManager();
        // Liste des activités
        $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
        $activites = $activiteRepository->findAll();
        // Liste des groupes
        $groupeRepository = $entityManager->getRepository('RessourceBundle:Groupe');
        $groups = $groupeRepository->findAll();
        // Liste des groupes
        $enfantRepository = $entityManager->getRepository('RessourceBundle:Enfant');
        $enfants = $enfantRepository->findAll();
        return array(
            "activites" => $activites, "groups" => $groups, "enfants" => $enfants,
        );
    }

}
