<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteType;

class ActiviteController extends Controller {

    /**
     * Affichage de toutes les Activite présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activites = $activiteRepository->findAll();

        return $this->render('ActiviteBundle:Activite:index.html.twig', array(
                    "activites" => $activites
        ));
    }

    /**
     * Affichage d'une Activite présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activite = $activiteRepository->findOneById($id);

        return $this->render('ActiviteBundle:Activite:show.html.twig', array(
                    "activite" => $activite
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une Activite
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $typeActivitRepository = $entityManager->getRepository('ActiviteBundle:TypeActivite');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type Activite requis.');
            return $this->redirect($this->generateUrl('ActiviteBundle_TypeActivite_edit'));
        }


        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activite = $activiteRepository->findOneById($id);

        if ($activite == null) {
            $activite = new \ActiviteBundle\Entity\Activite();
        }

        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($activite);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Activite bien enregistrée.');

            return $this->redirect($this->generateUrl('ActiviteBundle_Activite_index'));
        }

        return $this->render('ActiviteBundle:Activite:edit.html.twig', array(
                    'activite' => $activite,
                    'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une Activite
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id) {
        $entityManager = $this->getDoctrine()->getManager();

        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activite = $activiteRepository->findOneById($id);
        if ($activite != null) {
            $entityManager->remove($activite);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('ActiviteBundle_Activite_index'));
    }

}
