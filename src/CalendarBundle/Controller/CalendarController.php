<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        $request = $this->get('request');
        $data = $request->request->all();

        //Setup new EventEntity with data from request
        $title = $data['title'];
        $startdate = new DateTime($data['startdate']);
        $enddate = new DateTime($data['enddate']);
        $ressouceId = $data['resourceId'];
        $jour = "";
        $enfantId = "";
        $activiteId = $data['activiteId'];

        // Split RessourceId in 2 string
        $jours = array();
        $jours[] = "Lundi";
        $jours[] = "Mardi";
        $jours[] = "Mercredi";
        $jours[] = "Jeudi";
        $jours[] = "Vendredi";
        $trouve = false;
        $i=0;
        while(!$trouve & $i<sizeof($jours)){
            if (strpos($ressouceId, $jours[$i])){
                $trouve = true;
                $jour = $jours[$i];
                $enfantId = substr($ressouceId, 0,strlen($ressouceId)-strlen($jour));
                echo ($enfantId);
            }

            $i++;
        }
        
                $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($enfantId);
        
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activite = $activiteRepository->findOneById($activiteId);
        
        $evenement = new \CalendarBundle\Entity\EventEntity($title, $startdate,$enddate);
        $evenement->setJour($jour);
        $evenement->setEnfant($enfant);
        $evenement->setActivite($activite);
        
         $entityManager->persist($evenement);
            $entityManager->flush();
        
        
        $return = array();
        $return['status'] = "success";
        $return['eventId'] = $evenement->getId();

        // Setup Response with the new id and some new property
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $response->setContent(json_encode(array('status' => 'success', 'eventid' => '1')));
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

    public function loadRessourceByIdAction(Request $request, $id) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");

        $enfant = $enfantRepository->findOneById($id);

        $return_ressources = array();

        $jours = array();
        $jours[] = "Lundi";
        $jours[] = "Mardi";
        $jours[] = "Mercredi";
        $jours[] = "Jeudi";
        $jours[] = "Vendredi";

        foreach ($jours as $jour) {
            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . $jour;
            $child['enfant'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $child['title'] = $jour;
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


        $children = array();


        $jours = array();
        $jours[] = "Lundi";
        $jours[] = "Mardi";
        $jours[] = "Mercredi";
        $jours[] = "Jeudi";
        $jours[] = "Vendredi";



        foreach ($enfants as $enfant) {

            foreach ($jours as $jour) {
                $child = array();
                $child['idEnfant'] = $enfant->getId();
                $child['id'] = $enfant->getId() . $jour;
                $child['enfant'] = $jour;
                $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
                $return_ressources[] = $child;
            }
        }


        $response->setContent(json_encode($return_ressources));

        return $response;
    }

    public function loadAllRessourceAction(Request $request) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();
        $return_ressources = array();
        foreach ($enfants as $enfant) {
            $enfantArray = array();
            $enfantArray['id'] = $enfant->getId();
            $enfantArray['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $children = array();
            $lundi = array();
            $lundi['id'] = $enfant->getId() . 'lundi';
            $lundi['title'] = "Lundi";
            $mardi['id'] = $enfant->getId() . 'mardi';
            $mardi['title'] = "Mardi";
            $mercredi['id'] = $enfant->getId() . 'mercredi';
            $mercredi['title'] = "Mercredi";
            $jeudi['id'] = $enfant->getId() . 'jeudi';
            $jeudi['title'] = "Jeudi";
            $vendredi['id'] = $enfant->getId() . 'vendredi';
            $vendredi['title'] = "Vendredi";
            $children[] = $lundi;
            $children[] = $mardi;
            $children[] = $mercredi;
            $children[] = $jeudi;
            $children[] = $vendredi;

            $enfantArray['children'] = $children;
            $return_ressources[] = $enfantArray;
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

}
