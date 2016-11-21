<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\JourType;

class JourController extends Controller
{
    /**
     * Affichage de toutes les Jour présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $jours = $jourRepository->findAll();
        
        return $this->render('ActiviteBundle:Jour:index.html.twig', array(
        "jours"=>$jours
        ));
    }
    
    /**
     * Affichage d'un Jour présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $jourRepository = $entityManager->getRepository("ActiviteBundle:Jour");
        $jour = $jourRepository->findOneById($id);
        
        return $this->render('ActiviteBundle:Jour:show.html.twig', array(
        "jour"=>$jour
        ));
    }

}
