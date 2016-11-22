<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\RessourceType;


class EnfantController extends Controller
{
      /**
     * Affichage de toutes les Enfant présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("EnfantBundle:Enfant");
        $enfants = $enfantRepository->findAll();

        return $this->render('EnfantBundle:Enfant:index.html.twig', array(
                    "enfants" => $enfants
        ));
    }

    /**
     * Affichage d'une Enfant présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("EnfantBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        return $this->render('EnfantBundle:Enfant:show.html.twig', array(
                    "enfant" => $enfant
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une Enfant
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $typeActivitRepository = $entityManager->getRepository('EnfantBundle:TypeEnfant');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type Enfant requis.');
            return $this->redirect($this->generateUrl('EnfantBundle_TypeEnfant_edit'));
        }


        $enfantRepository = $entityManager->getRepository("EnfantBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        if ($enfant == null) {
            $enfant = new \EnfantBundle\Entity\Enfant();
        }

        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($enfant);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Enfant bien enregistrée.');

            return $this->redirect($this->generateUrl('EnfantBundle_Enfant_index'));
        }

        return $this->render('EnfantBundle:Enfant:edit.html.twig', array(
                    'enfant' => $enfant,
                    'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une Enfant
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id) {
        $entityManager = $this->getDoctrine()->getManager();

        $enfantRepository = $entityManager->getRepository("EnfantBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);
        if ($enfant != null) {
            $entityManager->remove($enfant);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('EnfantBundle_Enfant_index'));
    }
}
