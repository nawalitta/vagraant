<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalendarController extends Controller {

    /**
     * Affichage de toutes les Activite pr�sentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        return $this->render('ADesignsCalendarBundle:Calendar:calendar.html.twig', array(
        ));
    }

    public function showAction($id) {
        return $this->render('ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig', array(
        ));
    }

    public function loadCalendarByIdAction(Request $request, $id) {

        $entityManager = $this->getDoctrine()->getManager();
        $eventRepository = $entityManager->getRepository("ADesignsCalendarBundle:EventEntity");

        $databaseEvents = $eventRepository->findByEnfantId($id);

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

        $response->setContent(json_encode($return_ressources));

        return $response;
    }

    public function loadAllRessourceInvertedAction(Request $request) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();
        $return_ressources = array();

        $lundiArray = array();

        $lundiArray['enfant'] = "Lundi";
        $mardiArray = array();
        $mardiArray['id'] = "mardi";
        $mardiArray['title'] = "Mardi";
        $mercrediArray = array();
        $mercrediArray['id'] = "mercredi";
        $mercrediArray['title'] = "Mercredi";
        $jeudiArray = array();
        $jeudiArray['id'] = "jeudi";
        $jeudiArray['title'] = "Jeudi";
        $vendrediArray = array();
        $vendrediArray['id'] = "vendredi";
        $vendrediArray['title'] = "Vendredi";

        $children = array();

        foreach ($enfants as $enfant) {

            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . 'Lundi';
            $child['enfant'] = 'Lundi';

            $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $children[] = $child;
        }


        foreach ($enfants as $enfant) {

            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . 'Mardi';
            $child['enfant'] = 'Mardi';

            $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $children[] = $child;
        }

        foreach ($enfants as $enfant) {

            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . 'Mercredi';
            $child['enfant'] = 'Mercredi';

            $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $children[] = $child;
        }
        foreach ($enfants as $enfant) {

            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . 'Jeudi';
            $child['enfant'] = 'Jeudi';

            $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $children[] = $child;
        }
        foreach ($enfants as $enfant) {

            $child = array();
            $child['idEnfant'] = $enfant->getId();
            $child['id'] = $enfant->getId() . 'Vendredi';
            $child['enfant'] = 'Vendredi';

            $child['title'] = $enfant->getPrenom() . " " . $enfant->getNom();
            $children[] = $child;
        }
        $return_ressources = $children;



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
