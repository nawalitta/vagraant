<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\BesoinTypeRessourceType;

class BesoinTypeRessourceController extends Controller {

    /**
     * Affichage de toutes les BesoinTypeRessource présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        $entityManager = $this->getDoctrine()->getManager();
        $besoinTypeRessourceRepository = $entityManager->getRepository("RessourceBundle:BesoinTypeRessource");
        $besoinsTypeRessource = $besoinTypeRessourceRepository->findAll();

        return $this->render('RessourceBundle:BesoinTypeRessource:index.html.twig', array(
                    "besoinsTypeRessource" => $besoinsTypeRessource
        ));
    }

    /**
     * Affichage d'une BesoinTypeRessource présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $besoinTypeRessourceRepository = $entityManager->getRepository("RessourceBundle:BesoinTypeRessource");
        $besoinTypeRessource = $besoinTypeRessourceRepository->findOneById($id);

        return $this->render('RessourceBundle:BesoinTypeRessource:show.html.twig', array(
                    "besoinTypeRessource" => $besoinTypeRessource
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une BesoinTypeRessource
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $typeActivitRepository = $entityManager->getRepository('RessourceBundle:TypeBesoinTypeRessource');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type BesoinTypeRessource requis.');
            return $this->redirect($this->generateUrl('RessourceBundle_TypeBesoinTypeRessource_edit'));
        }


        $besoinTypeRessourceRepository = $entityManager->getRepository("RessourceBundle:BesoinTypeRessource");
        $besoinTypeRessource = $besoinTypeRessourceRepository->findOneById($id);

        if ($besoinTypeRessource == null) {
            $besoinTypeRessource = new \RessourceBundle\Entity\BesoinTypeRessource();
        }

        $form = $this->createForm(BesoinTypeRessourceType::class, $besoinTypeRessource);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($besoinTypeRessource);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'BesoinTypeRessource bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBundle_BesoinTypeRessource_index'));
        }

        return $this->render('RessourceBundle:BesoinTypeRessource:edit.html.twig', array(
                    'besoinTypeRessource' => $besoinTypeRessource,
                    'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une BesoinTypeRessource
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id) {
        $entityManager = $this->getDoctrine()->getManager();

        $besoinTypeRessourceRepository = $entityManager->getRepository("RessourceBundle:BesoinTypeRessource");
        $besoinTypeRessource = $besoinTypeRessourceRepository->findOneById($id);
        if ($besoinTypeRessource != null) {
            $entityManager->remove($besoinTypeRessource);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('RessourceBundle_BesoinTypeRessource_index'));
    }
}
