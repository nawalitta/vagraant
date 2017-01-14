<?php

namespace RessourceBundle\Controller;

use RessourceBundle\Entity\TypeRessource;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\TypeRessourceType;
use Symfony\Component\HttpFoundation\Response;

class TypeRessourceController extends Controller
{
    /**
     * Affichage de tous les type ressource présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $erreurMsg = "";
        //Récupere la liste des types de ressources cochées afin de les supprimer
        $listTypesRessources = $request->get('idTypesRessources');
        if ($listTypesRessources != null) {
            foreach ($listTypesRessources as $id) {
                $typeRessource = $typeRessourceRepository->findOneById($id);
                try {
                    if ($typeRessource != null) {
                        $entityManager->remove($typeRessource);
                    }
                    $entityManager->flush();
                } catch (\Exception $ex) {
                    //Pb suppression
                    $erreurMsg = " Les types de ressources sont encore affectées à au moins une ressource";
                }

            }
        }

        $typeRessources = $typeRessourceRepository->findAll();

        return $this->render('RessourceBundle:TypeRessource:index.html.twig', array(
            "typeRessources" => $typeRessources, "erreur" => $erreurMsg
        ));
    }

    /**
     * Affichage d'un type de ressource présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typeRessource = $typeRessourceRepository->findOneById($id);

        return $this->render('RessourceBundle:TypeRessource:show.html.twig', array(
            "typeRessource" => $typeRessource
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'un type de ressource
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, $nomTypeRessource = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeActivitRepository = $entityManager->getRepository('RessourceBundle:TypeRessource');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type TypeRessource requis.');
            return $this->redirect($this->generateUrl('RessourceBundle_TypeRessource_edit'));
        }

        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typeRessource = $typeRessourceRepository->findOneById($id);

        if ($typeRessource == null) {
            $typeRessource = new TypeRessource();
        }

        // Si on est dans ressource et qu'on utilise la modal
        if ($nomTypeRessource != null) {
            $typeRessource->setDesignation($nomTypeRessource);
            $entityManager->persist($typeRessource);
            $entityManager->flush();
            return new Response($typeRessource->getId());
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
     * Suppression d'un type de ressource
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id)
    {
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
