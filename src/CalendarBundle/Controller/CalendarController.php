<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

class CalendarController extends Controller {

    /**
     * Affichage du planning de tout les enfants
     * @return type
     */
    public function indexAction() {
        $constraints = $this->constraint();
        return $this->render('ADesignsCalendarBundle:Calendar:calendar.html.twig', array("constraints" => $constraints
        ));
    }

    /**
     * Affichage du planning de l'enfant dont l'id est passé en parametre
     * @param type $id Id de l'enfant
     * @return type
     */
    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");

        $enfant = $enfantRepository->findOneById($id);

        $activitesObligatoire = $enfant->getActivitesObligatoires();
        $activiteOptionnelle = $enfant->getActivitesOptionelles();
        $constraints = $this->constraint();


        return $this->render('ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig', array("activitesObligatoire" => $activitesObligatoire,
                    "activitesOptionnel" => $activiteOptionnelle,
                    "constraints" => $constraints
        ));
    }

    /**
     * Fonction d'ajout ou de modification d'un evenement appellé par le calendrier en Ajax
     * @param Request $request Contient les informations de l'evenements à ajouter/modifier
     * @return Response
     */
    public function editEventAction(Request $request) {

        $data = $request->request->all();

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");


        $startdate = new DateTime($data['startdate']);
        $enddate = new DateTime($data['enddate']);

        if (isset($data['id'])) {
            $id = $data['id'];
            $evenement = $eventRepository->findOneById($id);
            $evenement->setStartDatetime($startdate);
            $evenement->setEndDatetime($enddate);
        } else {
            $title = $data['title'];
            $evenement = new \CalendarBundle\Entity\EventEntity($title, $startdate, $enddate);
        }

        if (isset($data['resourceId'])) {
            $ressouceId = $data['resourceId'];

            $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");

            $ressourceIdData = explode("-", $ressouceId);
            $jour = $jourRepository->findOneById($ressourceIdData[1]);

            $evenement->setJour($jour);

            $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
            $enfant = $enfantRepository->findOneById($ressourceIdData[0]);

            $evenement->setEnfant($enfant);
        }

        if (isset($data['activiteId'])) {
            $activiteId = intval($data['activiteId']);
            $data['activiteId'] = intval($data['activiteId']);
            $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
            $activite = $activiteRepository->findOneById($activiteId);
            $evenement->setActivite($activite);
        }

        $entityManager->persist($evenement);
        $entityManager->flush();

        $return = array();
        $return['status'] = "success";
        $return['eventid'] = $evenement->getId();
        $return['constraints'] = $this->constraint();

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $response->setContent(json_encode($return));
        return $response;
    }

    /**
     * Supprime un evenement 
     * @param Request $request Contient les informations de l'evenements à supprimer
     * @return Response
     */
    public function deleteEventAction(Request $request) {
        $data = $request->request->all();

        $id = $data['eventID'];
        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $event = $eventRepository->findOneById($id);

        $entityManager->remove($event);
        $entityManager->flush();

        $return = array();
        $return['status'] = "success";
        $return['constraints'] = $this->constraint();

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');


        $response->setContent(json_encode($return));
        return $response;
    }

    /**
     * Sauvegarde les evenements de la tables evenement dans la table activiterealisee. Si un id est passé on sauvegarde seulements les evenements d'un enfant
     * @param type $id Id d'un enfant
     * @return type
     */
    public function saveActivityAction($id = null) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

        //Récupération des evenements et des activités
        if ($id == null) {
            $activities = $activiteRepository->findAll();
            $events = $eventRepository->findAll();
        } else {
            $activities = $activiteRepository->findByEnfant($id);
            $events = $eventRepository->findOneByEnfant($id);
        }

        //Suppression des activités réalisé
        foreach ($activities as $activity) {
            $entityManager->remove($activity);
            $entityManager->flush();
        }

        foreach ($events as $event) {
            //Ajout des evenements dans la table activité réalisé
            $activiteRealisee = new \ActiviteBundle\Entity\ActiviteRealisee();
            $activiteRealisee->setActivite($event->getActivite());
            $activiteRealisee->setEnfant($event->getEnfant());
            $activiteRealisee->setHeureDebut($event->getStartDatetime());
            $activiteRealisee->setHeureFin($event->getEndDatetime());
            $activiteRealisee->setJour($event->getJour());
            $entityManager->persist($activiteRealisee);
            $entityManager->flush();
        }

        return $this->redirect($this->generateUrl('Calendar'));
    }

    /**
     * Restaure la table activiterealisee dans la table evenements. Si un id est passé on restaure seulement les evenements d'un enfant
     * @param type $id
     * @return type
     */
    public function restoreActivityAction($id = null) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

        //Recupération des evenements
        //Recupération des acitivités
        if ($id == null) {
            $activities = $activiteRepository->findAll();
            $events = $eventRepository->findAll();
        } else {
            $activities = $activiteRepository->findOneByEnfant($id);
            $events = $eventRepository->findByEnfant($id);
        }

        //Suppression des evenements
        foreach ($events as $event) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        foreach ($activities as $activity) {
            //Ajout des activités dans la table event
            $event = new \CalendarBundle\Entity\EventEntity($activity->getActivite()->getDesignation(), $activity->getHeureDebut(), $activity->getHeureFin());
            //Creation de l'event
            $event->setActivite($activity->getActivite());
            $event->setEnfant($activity->getEnfant());
            $event->setJour($activity->getJour());
            $entityManager->persist($event);
            $entityManager->flush();
        }

        return $this->redirect($this->generateUrl('Calendar'));
    }

    /**
     * Récupère en JSON les evenements de la table evenement
     * @return Response
     */
    public function loadCalendarAction() {


        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");

        $databaseEvents = $eventRepository->findAll();

        $return_events = array();
        foreach ($databaseEvents as $event) {
            $return_events[] = $event->toArray();
        }

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $response->setContent(json_encode($return_events));

        return $response;
    }

    /**
     * Récupère en JSON les evenements d'un enfant de la table evenement
     * @param type $id
     * @return Response
     */
    public function loadCalendarByIdAction($id) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findById($id);
        $databaseEvents = $eventRepository->findByEnfant($enfant);

        $return_events = array();
        foreach ($databaseEvents as $event) {
            $return_events[] = $event->toArray();
        }

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $response->setContent(json_encode($return_events));

        return $response;
    }

    /**
     * Récupère en JSON les evenements d'un enfant de la table activiterealisee
     * @param type $id
     * @return Response
     */
    public function loadCalendarStaticByIdAction($id) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findById($id);
        $databaseEvents = $eventRepository->findByEnfant($enfant);

        $return_events = array();
        foreach ($databaseEvents as $event) {
            $return_events[] = $event->toArray();
        }

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $response->setContent(json_encode($return_events));

        return $response;
    }

    /**
     * Récupère en JSON les ressources nécessaire à Fullcalendar
     * @param Request $request
     * @return Response
     */
    public function loadAllRessourceAction(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();
        $parite = 0;
        $data = $request->request->all();
        if (isset($data['parite'])) {
            $parite = $data['parite'];
        }

        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $jours = $jourRepository->findByParite($parite);

        foreach ($enfants as $enfant) {
            foreach ($jours as $jour) {
                $child = array();
                $child['idEnfant'] = $enfant->getId();
                $child['id'] = $enfant->getId() . "-" . $jour->getId();
                $child['enfant'] = $jour->getDesignation();
                $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
                $return_ressources[] = $child;
            }
        }

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($return_ressources));
        return $response;
    }

    /**
     * Récupère en JSON les ressources pour un enfant nécessaire à Fullcalendar
     * @param Request $request
     * @param type $id l'id d'un enfant
     * @return Response
     */
    public function loadRessourceByIdAction(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        $parite = 0;
        $data = $request->request->all();
        if (isset($data['parite'])) {
            $parite = $data['parite'];
        }

        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $jours = $jourRepository->findByParite($parite);

        $return_ressources = array();
        foreach ($jours as $jour) {
            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . "-" . $jour->getId();
            $child['enfant'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $child['title'] = $jour->getDesignation();
            $return_ressources[] = $child;
        }

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($return_ressources));
        return $response;
    }

    /**
     * Verification des contraintes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function constraint() {

        // Get Repository 
        $entityManager = $this->getDoctrine()->getManager();

        // $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        //$jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");

        // Get enitités
        //$enfants = $enfantRepository->findAll();        
        $databaseEvents = $eventRepository->findAll();
        // $fenetresHoraires = $fenetreHoraireRepository->findAll();

        function () {
            
        };
        // remplir array
        $erreur = false;
        $return_constraint_text = array();

        foreach ($databaseEvents as $event) {

            $activite = $activiteRepository->findOneById($event->getActivite()->getId());
            $enfant = $enfantRepository->findOneById($event->getEnfant()->getId());

            /*  $ressource = $ressourceRepository->findOneByID($activite->getActiviteRealisee()->getId());

              $ressourceAffecte = $eventRepository->contrainteRessource($ressource);

              $ressourceArray = array();
              $ressourceArray['id'] = $ressourceAffecte->getId();

              for($i=0; $i< count($ressourceArray); $i++) {

              $ressourceDispo = $this->ressourceDisponible($ressourceArray[$i], $event);

              if($ressourceDispo = false )
              {
              $return_constraint_text[]= "- ".$ressourceArray[]->getId()." n'est pas disponible !\n";

              }
              } */

            //contrainte disponibilité enfant

            $enfantsDispo = $this->enfantDisponible($event);

            if ($enfantsDispo == false) {
                $return_constraint_text[] = "" . $enfant->getPrenom() . " " . $enfant->getNom() . " n'est pas disponible !\n";
                $erreur = true;
            }

            //Contrainte déroulement activité
            $activiteplanifie = $this->activitePlanifie($event);
            if ($activiteplanifie == false) {
                $return_constraint_text[] = "L'activité " . $activite->getDesignation() . " ne peut pas se dérouler durant ce créneau horaire !\n";
                $erreur = true;
            }

            // Nombre enfants
            $nombreEnfant_event = $eventRepository->contrainteNbrEnfants($event->getActivite());

            // Contrainte du nombre d'enfants maximum pour une activité
            $activite_max_enfant = $activite->getNbEnfantsMax();

            if ((int)$nombreEnfant_event > $activite_max_enfant) {
                $return_constraint_text[] = "L'activité " . $activite->getDesignation() . " ne respecte pas le nombre d'enfants maximum !\n";
                $erreur = true;
            }

            // Contrainte du nombre d'enfants minimum pour une activité
            $activite_min_enfant = $activite->getNbEnfantsMin();

            if ((int)$nombreEnfant_event < $activite_min_enfant) {
                $return_constraint_text[] = "L'activité " . $activite->getDesignation() . " ne respecte pas le nombre d'enfants minimum !\n";
                $erreur = true;
            }

            //Durée 
            $dureeActivite_event = $eventRepository->contrainteDuree($event->getActivite());
            //Contrainte de la durée maximale de l'activité
            $dureeMax = $activite->getDureeMax();

            if ($dureeActivite_event > $dureeMax) {
                $return_constraint_text[] = "La durée de l'activité " . $activite->getDesignation() . " est trop longue !\n";
                $erreur = true;
            }

            //Contrainte de la durée minimale de l'activité 
            $dureeMin = $activite->getDureeMin();

            if ($dureeActivite_event < $dureeMin) {
                $return_constraint_text[] = "La durée de l'activité " . $activite->getDesignation() . "est trop courte !\n";
                $erreur = true;
            }
        }

        //Aucune erreur de contraintes
        if ($erreur == false) {
            $return_constraint_text[] = "Aucune erreur detectee";
        }

        return $return_constraint_text;
    }

    /**
     * Vérifier si l'activité est bien planifiées dans la fenêtre de présence de l'enfant
     * @param type $event
     * @return boolean
     */
    function enfantDisponible($event) {

        //Repositories
        $entityManager = $this->getDoctrine()->getManager();

        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");

        //
        $enfant = $enfantRepository->findOneById($event->getEnfant()->getId());
        $fenetreHoraireEnfant = $fenetreHoraireRepository->findOneById($enfant->getFenetreHoraire()->getId());
        $jour = $jourRepository->findOneById($event->getJour()->getId());
        // Le nom du jour
        $jourDesignation = $jour->getDesignation();

        // debut de l'evenement
        $pDebutHeure = $event->getStartDatetime();
        // fin de l'évenement
        $pFinHeure = $event->getEndDatetime();

        $resultEnfantPlanifie = true;

        //Selon le jour
        switch ($jourDesignation) {
            case "Lundi":
                if ($pDebutHeure < $fenetreHoraireEnfant->getLundiDebut() || $pDebutHeure > $fenetreHoraireEnfant->getLundiFin()) {
                    $resultEnfantPlanifie;
                } elseif ($pFinHeure < $fenetreHoraireEnfant->getLundiDebut() || $pFinHeure > $fenetreHoraireEnfant->getLundiFin()) {
                    $resultEnfantPlanifie;
                }
                break;

            case "Mardi":
                if ($pDebutHeure < $fenetreHoraireEnfant->getMardiDebut() || $pDebutHeure > $fenetreHoraireEnfant->getMardiFin()) {
                    $resultEnfantPlanifie;
                } elseif ($pFinHeure < $fenetreHoraireEnfant->getMardiDebut() || $pFinHeure > $fenetreHoraireEnfant->getMardiFin()) {
                    $resultEnfantPlanifie;
                }
                break;

            case "Mercredi":
                if ($pDebutHeure < $fenetreHoraireEnfant->getMercrediDebut() || $pDebutHeure > $fenetreHoraireEnfant->getMercrediFin()) {
                    $resultEnfantPlanifie;
                } elseif ($pFinHeure < $fenetreHoraireEnfant->getMercrediDebut() || $pFinHeure > $fenetreHoraireEnfant->getMercrediFin()) {
                    $resultEnfantPlanifie;
                }
                break;

            case "Jeudi":
                if ($pDebutHeure < $fenetreHoraireEnfant->getJeudiDebut() || $pDebutHeure > $fenetreHoraireEnfant->getJeudiFin()) {
                    $resultEnfantPlanifie;
                } elseif ($pFinHeure < $fenetreHoraireEnfant->getJeudiDebut() || $pFinHeure > $fenetreHoraireEnfant->getJeudiFin()) {
                    $resultEnfantPlanifie;
                }
                break;

            case "Vendredi":
                if ($pDebutHeure < $fenetreHoraireEnfant->getVendrediDebut() || $pDebutHeure > $fenetreHoraireEnfant->getVendrediFin()) {
                    $resultEnfantPlanifie;
                } elseif ($pFinHeure < $fenetreHoraireEnfant->getVendrediDebut() || $pFinHeure > $fenetreHoraireEnfant->getVendrediFin()) {
                    $resultEnfantPlanifie;
                }
                break;
        }
        return $resultEnfantPlanifie;
    }

    /**
     * Vérifier si l'activité se déroule durant sa fenêtre horaire
     * @param type $event
     * @return boolean
     */
    function activitePlanifie($event) {

        //Repositories
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");

        //
        $activite = $activiteRepository->findOneById($event->getActivite()->getId());
        $fenetreHoraireActivite = $fenetreHoraireRepository->findOneById($activite->getFenetreHoraire()->getId());
        $jour = $jourRepository->findOneById($event->getJour()->getId());

        $jourDesignation = $jour->getDesignation();
        $pDebutHeure = $event->getStartDatetime();
        $pFinHeure = $event->getEndDatetime();
        $result = true;

        switch ($jourDesignation) {
            case "Lundi":
                if ($pDebutHeure < $fenetreHoraireActivite->getLundiDebut() || $pDebutHeure > $fenetreHoraireActivite->getLundiFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireActivite->getLundiDebut() || $pFinHeure > $fenetreHoraireActivite->getLundiFin()) {
                    $result = false;
                }
                break;

            case "Mardi":
                if ($pDebutHeure < $fenetreHoraireActivite->getMardiDebut() || $pDebutHeure > $fenetreHoraireActivite->getMardiFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireActivite->getMardiDebut() || $pFinHeure > $fenetreHoraireActivite->getMardiFin()) {
                    $result = false;
                }
                break;

            case "Mercredi":
                if ($pDebutHeure < $fenetreHoraireActivite->getMercrediDebut() || $pDebutHeure > $fenetreHoraireActivite->getMercrediFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireActivite->getMercrediDebut() || $pFinHeure > $fenetreHoraireActivite->getMercrediFin()) {
                    $result = false;
                }
                break;

            case "Jeudi":
                if ($pDebutHeure < $fenetreHoraireActivite->getJeudiDebut() || $pDebutHeure > $fenetreHoraireActivite->getJeudiFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireActivite->getJeudiDebut() || $pFinHeure > $fenetreHoraireActivite->getJeudiFin()) {
                    $result = false;
                }
                break;

            case "Vendredi":
                if ($pDebutHeure < $fenetreHoraireActivite->getVendrediDebut() || $pDebutHeure > $fenetreHoraireActivite->getVendrediFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireActivite->getVendrediDebut() || $pFinHeure > $fenetreHoraireActivite->getVendrediFin()) {
                    $result = false;
                }
                break;
        }

        return $result;
    }

    /**
     * Verifie disponibilité des ressources
     * @param type $IndiceRess
     * @param type $event
     * @return boolean
     */
    function ressourceDisponible($IndiceRess, $event) {

        //Repositories
        $entityManager = $this->getDoctrine()->getManager();

        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");


        //
        // $activite = $activiteRepository->findOneById($event->getActivite()->getId());
        $ressource = $ressourceRepository->findOneBy($IndiceRess);
        $fenetreHoraireRessource = $fenetreHoraireRepository->findOneById($ressource->getFenetreHoraire()->getId());
        $jour = $jourRepository->findOneById($event->getJour()->getId());

        $testRessource = $ressource->getDesignation();
        $jourDesignation = $jour->getDesignation();
        $pDebutHeure = $event->getStartDatetime();
        $pFinHeure = $event->getEndDatetime();
        $result = true;

        switch ($jourDesignation) {
            case "Lundi":
                if ($pDebutHeure < $fenetreHoraireRessource->getLundiDebut() || $pDebutHeure > $fenetreHoraireRessource->getLundiFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireRessource->getLundiDebut() || $pFinHeure > $fenetreHoraireRessource->getLundiFin()) {
                    $result = false;
                }
                break;

            case "Mardi":
                if ($pDebutHeure < $fenetreHoraireRessource->getMardiDebut() || $pDebutHeure > $fenetreHoraireRessource->getMardiFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireRessource->getMardiDebut() || $pFinHeure > $fenetreHoraireRessource->getMardiFin()) {
                    $result = false;
                }
                break;

            case "Mercredi":
                if ($pDebutHeure < $fenetreHoraireRessource->getMercrediDebut() || $pDebutHeure > $fenetreHoraireRessource->getMercrediFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireRessource->getMercrediDebut() || $pFinHeure > $fenetreHoraireRessource->getMercrediFin()) {
                    $result = false;
                }
                break;

            case "Jeudi":
                if ($pDebutHeure < $fenetreHoraireRessource->getJeudiDebut() || $pDebutHeure > $fenetreHoraireRessource->getJeudiFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireRessource->getJeudiDebut() || $pFinHeure > $fenetreHoraireRessource->getJeudiFin()) {
                    $result = false;
                }
                break;

            case "Vendredi":
                if ($pDebutHeure < $fenetreHoraireRessource->getVendrediDebut() || $pDebutHeure > $fenetreHoraireRessource->getVendrediFin()) {
                    $result = false;
                } elseif ($pFinHeure < $fenetreHoraireRessource->getVendrediDebut() || $pFinHeure > $fenetreHoraireRessource->getVendrediFin()) {
                    $result = false;
                }
                break;
        }
        return $result;
    }

}
