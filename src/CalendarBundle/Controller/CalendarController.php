<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

class CalendarController extends Controller {

    /**
     * Affichage de toutes les Activite pr�sentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        return $this->render('ADesignsCalendarBundle:Calendar:calendar.html.twig', array(
        ));
    }

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
            $jour = $jourRepository->findOneByDesignation($ressourceIdData[1]);

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

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $response->setContent(json_encode($return));
        return $response;
    }

    public function deleteEventAction(Request $request) {
        $request = $this->get('request');
        $data = $request->request->all();

        $id = $data['eventID'];
        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $event = $eventRepository->findOneById($id);

        $entityManager->remove($event);
        $entityManager->flush();

        $return = array();
        $return['status'] = "success";

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');


        $response->setContent(json_encode($return));
        return $response;
    }

    public function saveActivityAction($id = null) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

        //Récupération des evenements
        if ($id == null) {
            $events = $eventRepository->findAll();
        } else {
            $events = $eventRepository->findOneByEnfant($id);
        }

        //Recupération des activités
        $activities = $activiteRepository->findAll();

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

    public function restoreActivityAction($id = null) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

        //Recupération des evenements
        $events = $eventRepository->findAll();

        //Recupération des acitivités
        if ($id == null) {
            $activities = $activiteRepository->findAll();
        } else {
            $activities = $activiteRepository->findOneByEnfant($id);
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

    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");

        $enfant = $enfantRepository->findOneById($id);

        $activitesObligatoire = $enfant->getActivitesObligatoires();
        $activiteOptionnelle = $enfant->getActivitesOptionelles();


        return $this->render('ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig', array("activitesObligatoire" => $activitesObligatoire,
                    "activitesOptionnel" => $activiteOptionnelle
        ));
    }

    public function loadCalendarByIdAction(Request $request, $id) {

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

    public function loadCalendarStaticByIdAction(Request $request, $id) {

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

    public function loadRessourceByIdAction(Request $request, $id) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");

        $enfant = $enfantRepository->findOneById($id);

        $parite = 0;
        $data = $request->request->all();
        if (isset($data['parite']))
            $parite = $data['parite'];

        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $jours = $jourRepository->findByParite($parite);

        $return_ressources = array();



        foreach ($jours as $jour) {
            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . "-" . $jour->getDesignation();
            $child['enfant'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $child['title'] = $jour->getDesignation();
            $return_ressources[] = $child;
        }

        $response->setContent(json_encode($return_ressources));

        return $response;
    }

    public function loadAllRessourceInvertedAction(Request $request) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();
        $parite = 0;
        $data = $request->request->all();
        if (isset($data['parite']))
            $parite = $data['parite'];

        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $jours = $jourRepository->findByParite($parite);


        foreach ($enfants as $enfant) {

            foreach ($jours as $jour) {
                $child = array();
                $child['idEnfant'] = $enfant->getId();
                $child['id'] = $enfant->getId() . "-" . $jour->getDesignation();
                $child['enfant'] = $jour->getDesignation();
                $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
                $return_ressources[] = $child;
            }
        }


        $response->setContent(json_encode($return_ressources));

        return $response;
    }

    /**
     * Dispatch a CalendarEvent and return a JSON Response of any events returned.
     * 
     * @param Request $request
     * @return Response
     */
    public function loadCalendarAction(Request $request) {


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

    /* public function constraints() {

      $entityManager = $this->getDoctrine()->getManager();
      // table evenement
      $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");

      // table enfant
      // table activité
      // table fenetre horaire
      // tout les evenements
      $databaseEvents = $eventRepository->findAll();

      $return_constaints = array();

      // pour chaque evenement dans la table event
      foreach ($databaseEvents as $event) {
      // verifier que chaque evenement dans la base
      // respecte quelques contraintes
      // du type nombre enfant min et max pour l'activite
      // bonne fenntre horraire
      // sinon ajouter des phrases dans le tableau return_constraints

      $return_constaints[] = "Ayoub est le meilleure footablleur";
      }

      $response = new \Symfony\Component\HttpFoundation\Response();
      $response->headers->set('Content-Type', 'application/json');

      $response->setContent(json_encode($return_constaints));

      return $response;
      } */
}
