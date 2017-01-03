<?php

namespace ActiviteBundle\Controller;

use ActiviteBundle\Entity\Activite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteType;
use Symfony\Component\HttpFoundation\Response;

class ActiviteController extends Controller
{

    /**
     * Affichage de toutes les Activite présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");

        //Récupere la liste des activités coché afin de les supprimer
        $listActivite = $request->get('idActivites');
        if ($listActivite != null) {
            foreach ($listActivite as $id) {
                $activite = $activiteRepository->findOneById($id);
                if ($activite != null) {
                    $entityManager->remove($activite);
                }
                $entityManager->flush();
            }
        }
        $activites = $activiteRepository->findAll();

        return $this->render('ActiviteBundle:Activite:index.html.twig', array(
            "activites" => $activites
        ));
    }

    /**
     * Affichage d'une Activite présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
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
     * @return Response
     */
    public function editAction($id = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        /*
        $typeActivitRepository = $entityManager->getRepository('ActiviteBundle:TypeActivite');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type Activite requis.');
            return $this->redirect($this->generateUrl('ActiviteBundle_TypeActivite_edit'));
        }
        */

        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activite = $activiteRepository->findOneById($id);

        if ($activite == null) {
            $activite = new Activite();
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
    public function deleteAction($id)
    {
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
