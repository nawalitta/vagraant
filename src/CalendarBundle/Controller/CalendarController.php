<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CalendarBundle\Event\CalendarEvent;

class CalendarController extends Controller {

    /**
     * Affichage de toutes les Activite présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
//        $entityManager = $this->getDoctrine()->getManager();
//        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
//        $activites = $activiteRepository->findAll();

        return $this->render('ADesignsCalendarBundle:Calendar:calendar.html.twig', array(
                   
        ));
    }

    /**
     * Dispatch a CalendarEvent and return a JSON Response of any events returned.
     * 
     * @param Request $request
     * @return Response
     */
    public function loadCalendarAction(Request $request) {
        $startDatetime = new \DateTime();
        $startDatetime->setTimestamp($request->get('start'));

        $endDatetime = new \DateTime();
        $endDatetime->setTimestamp($request->get('end'));

        $events = $this->container->get('event_dispatcher')->dispatch(CalendarEvent::CONFIGURE, new CalendarEvent($startDatetime, $endDatetime, $request))->getEvents();

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $return_events = array();

        foreach ($events as $event) {
            $return_events[] = $event->toArray();
        }

        $response->setContent(json_encode($return_events));

        return $response;
    }

}
