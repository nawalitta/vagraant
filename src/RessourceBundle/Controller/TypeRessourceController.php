<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\TypeRessourceType;

class TypeRessourceController extends Controller
{    /**
     * Affichage de toutes les TypeRessource présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        $entityManager = $this->getDoctrine()->getManager();
        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typesRessource = $typeRessourceRepository->findAll();

        return $this->render('RessourceBundle:TypeRessource:index.html.twig', array(
                    "typesRessource" => $typesRessource
        ));
    }

    /**
     * Affichage d'une TypeRessource présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typeRessource = $typeRessourceRepository->findOneById($id);

        return $this->render('RessourceBundle:TypeRessource:show.html.twig', array(
                    "typeRessource" => $typeRessource
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une TypeRessource
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $typeActivitRepository = $entityManager->getRepository('RessourceBundle:TypeTypeRessource');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type TypeRessource requis.');
            return $this->redirect($this->generateUrl('RessourceBundle_TypeTypeRessource_edit'));
        }


        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typeRessource = $typeRessourceRepository->findOneById($id);

        if ($typeRessource == null) {
            $typeRessource = new \RessourceBundle\Entity\TypeRessource();
        }

        $form = $this->createForm(TypeRessourceType::class, $typeRessource);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($typeRessource);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'TypeRessource bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBundle_TypeRessource_index'));
        }

        return $this->render('RessourceBundle:TypeRessource:edit.html.twig', array(
                    'typeRessource' => $typeRessource,
                    'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une TypeRessource
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id) {
        $entityManager = $this->getDoctrine()->getManager();

        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typeRessource = $typeRessourceRepository->findOneById($id);
        if ($typeRessource != null) {
            $entityManager->remove($typeRessource);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('RessourceBundle_TypeRessource_index'));
    }
}
