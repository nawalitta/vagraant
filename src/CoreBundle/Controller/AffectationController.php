<?php

namespace CoreBundle\Controller;

use RessourceBundle\Entity\Enfant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AffectationController extends Controller
{
    public function affecterEnfantActiviteOptionAction(Request $request)
    {
        (new Enfant());

        $entityManager = $this->getDoctrine()->getManager();
        $array = $this->getDataAffecterEnfantActivite($entityManager);
        $listActiviteId = $request->get('idActivites');
        $enfantId = $request->get('enfant');
        $groupeId = $request->get('groupe');
        if ($listActiviteId != null) {
            // Si un enfant particulier a été sélectionné
            if ($enfantId != "aucun") {
                // Alors on recherche cet enfant (object) à partir de son id
                $enfantRepository = $entityManager->getRepository('RessourceBundle:Enfant');
                $enfant = $enfantRepository->findOneById($enfantId);
                $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
                // On ajoute à cet enfant les activitées cochées
                foreach ($listActiviteId as $activiteId) {
                    $activite = $activiteRepository->findOneById($activiteId);
                    $enfant->addActivitesOptionelle($activite);
                }
            } else {
                // Si un groupe particulier a été sélectionné
                if ($groupeId != "aucun") {
                    // On reprend la liste des enfants à partir du tableau "$array"
                    // pour plus d'info voir fonction getDataAffecterEnfantActivite())
                    $enfants = $array['enfants'];
                    $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
                    foreach ($listActiviteId as $activiteId) {
                        $activite = $activiteRepository->findOneById($activiteId);
                        foreach ($enfants as $enfant) {
                            if ($enfant->getGroupe()->getId() == $groupeId) {
                                $enfant->addActivitesOptionelle($activite);
                            }
                        }
                    }
                }
            }
            $entityManager->flush();

        }
        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_option.html.twig', $array);
    }

    public function affecterEnfantActiviteObligatoireAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $array = $this->getDataAffecterEnfantActivite($entityManager);
        $listActiviteId = $request->get('idActivites');
        $enfantId = $request->get('enfant');
        $groupeId = $request->get('groupe');
        if ($listActiviteId != null) {
            // Si un enfant particulier a été sélectionné
            if ($enfantId != "aucun") {
                // Alors on recherche cet enfant (object) à partir de son id
                $enfantRepository = $entityManager->getRepository('RessourceBundle:Enfant');
                $enfant = $enfantRepository->findOneById($enfantId);
                $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
                // On ajoute à cet enfant les activitées cochées
                foreach ($listActiviteId as $activiteId) {
                    $activite = $activiteRepository->findOneById($activiteId);
                    $enfant->addActivitesObligatoire($activite);
                }
            } else {
                // Si un groupe particulier a été sélectionné
                if ($groupeId != "aucun") {
                    // On reprend la liste des enfants à partir du tableau "$array"
                    // pour plus d'info voir fonction getDataAffecterEnfantActivite())
                    $enfants = $array['enfants'];
                    $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
                    foreach ($listActiviteId as $activiteId) {
                        $activite = $activiteRepository->findOneById($activiteId);
                        foreach ($enfants as $enfant) {
                            if ($enfant->getGroupe()->getId() == $groupeId) {
                                $enfant->addActivitesObligatoire($activite);
                            }
                        }
                    }
                }
            }
            $entityManager->flush();

        }        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', $array);
    }

    private function getDataAffecterEnfantActivite($entityManager)
    {
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
