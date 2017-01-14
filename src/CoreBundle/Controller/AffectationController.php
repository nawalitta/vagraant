<?php

namespace CoreBundle\Controller;

use ActiviteBundle\Entity\Activite;
use ActiviteBundle\Entity\ActiviteObligatoire;
use RessourceBundle\Entity\Enfant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AffectationController extends Controller
{
    /**
     * Affectation d'une activité optionnelle à un enfant ou à un groupe d'enfant
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
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

    /**
     * Affectation d'une activité obligatoire à un enfant ou à un groupe d'enfant
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function affecterEnfantActiviteObligatoireAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $array = $this->getDataAffecterEnfantActivite($entityManager);
        $array['obligatoire'] = true;
        $listActiviteId = $request->get('idActivites');
        $enfantId = $request->get('enfant');
        $groupeId = $request->get('groupe');
        $quotas = $request->get('quotas');
        $ecart = $request->get('ecarts');
        if ($listActiviteId != null) {
            // Si un enfant particulier a été sélectionné
            if ($enfantId != "aucun") {
                // Alors on recherche cet enfant (object) à partir de son id
                $enfantRepository = $entityManager->getRepository('RessourceBundle:Enfant');
                $enfant = $enfantRepository->findOneById($enfantId);
                $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
                // On ajoute à cet enfant les activitées cochées
                foreach ($listActiviteId as $activiteId) {
                    // Rechercher l'activité courante à partir de son ID
                    $activite = $activiteRepository->findOneById($activiteId);

                    // Créer une nouvelle activité obligatoire
                    $activiteObligatoire = new ActiviteObligatoire($activite);

                    // Vérifier si le champ 'ecart' à été renseigné
                    $ecartForCurrentActivite = $ecart[$activiteId];
                    if ($ecartForCurrentActivite == "") {
                        // Sinon erreur  : 'ecart' non renseigné
                        $array['erreur'] = true;
                        $array['erreurMessage'] = "Ecart pour " . $activite->getDesignation() . " non renseigné";
                        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', $array);
                    }
                    // Vérifier si le champ 'quotas' à été renseigné
                    $activiteObligatoire->setEcart($ecartForCurrentActivite);
                    $quotasForCurrentActivite = $quotas[$activiteId];
                    if ($quotasForCurrentActivite == "") {
                        // Sinon erreur  : 'quotas' non renseigné
                        $array['erreur'] = true;
                        $array['erreurMessage'] = "Quotas pour " . $activite->getDesignation() . "non renseigné";
                        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', $array);
                    }
                    $activiteObligatoire->setQuotas($quotas[$activiteId]);

                    // Lier un enfant et cette activité obligatoire
                    $activiteObligatoire->setEnfant($enfant);

                    // Enregistrer cette nouvelle activté obligatoire dans la BDD
                    $entityManager->persist($activiteObligatoire);
                }
            } else {
                // Si un groupe particulier a été sélectionné
                if ($groupeId != "aucun") {
                    // On reprend la liste des enfants à partir du tableau "$array"
                    // pour plus d'info voir fonction getDataAffecterEnfantActivite())
                    $enfants = $array['enfants'];
                    $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
                    foreach ($listActiviteId as $activiteId) {
                        // Rechercher l'activité courante à partir de son ID
                        $activite = $activiteRepository->findOneById($activiteId);
                        foreach ($enfants as $enfant) {
                            // Vérifier si l'enfant courant est dans le groupe sélectionné
                            if ($enfant->getGroupe()->getId() == $groupeId) {
                                // Créer une nouvelle activité obligatoire dans la BDD
                                $activiteObligatoire = new ActiviteObligatoire($activite);
                                // Vérifier si le champ 'ecart' à été renseigné
                                $ecartForCurrentActivite = $ecart[$activiteId];
                                if ($ecartForCurrentActivite == "") {
                                    // Sinon erreur  : 'ecart' non renseigné
                                    $array['erreur'] = true;
                                    $array['erreurMessage'] = "Ecart pour " . $activite->getDesignation() . " non renseigné";
                                    return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', $array);
                                }
                                // Vérifier si le champ 'quotas' à été renseigné
                                $activiteObligatoire->setEcart($ecartForCurrentActivite);
                                $quotasForCurrentActivite = $quotas[$activiteId];
                                if ($quotasForCurrentActivite == "") {
                                    // Sinon erreur  : 'quotas' non renseigné
                                    $array['erreur'] = true;
                                    $array['erreurMessage'] = "Quotas pour " . $activite->getDesignation() . "non renseigné";
                                    return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', $array);
                                }
                                $activiteObligatoire->setQuotas($quotas[$activiteId]);
                                // Lier un enfant et cette activité obligatoire
                                $activiteObligatoire->setEnfant($enfant);
                                // Enregistrer cette nouvelle activté obligatoire dans la BDD
                                $entityManager->persist($activiteObligatoire);
                            }
                        }

                    }
                }
            }
            $entityManager->flush();

        }
        return $this->render('CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig', $array);
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
            "activites" => $activites, "groups" => $groups, "enfants" => $enfants, "erreur" => false, "obligatoire" => false,
        );
    }
}
