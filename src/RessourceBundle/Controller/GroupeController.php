<?php

namespace RessourceBundle\Controller;

use MongoDB\Driver\Exception\Exception;
use RessourceBundle\Entity\Groupe;
use RessourceBundle\Form\GroupeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GroupeController extends Controller
{
    /**
     * Affichage de tous les groupes présents dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $groupeRepository = $entityManager->getRepository("RessourceBundle:Groupe");

        $erreurMsg = "";
        //Récupère la liste des groupes coché afin de les supprimer
        $listGroupes = $request->get('idGroupes');
        if ($listGroupes != null) {
            foreach ($listGroupes as $id) {

                $groupe = $groupeRepository->findOneById($id);
                try {
                    if ($groupe != null) {
                        $entityManager->remove($groupe);
                    }
                    $entityManager->flush();
                } catch (Exception $ex) {
                    //Pb de suppression
                    $erreurMsg = "Les groupes sélectionnées ont encore des enfants !";
                }
            }
        }

        $groupes = $groupeRepository->findAll();

        return $this->render('RessourceBundle:Groupe:index.html.twig', array(
            "groupes" => $groupes, "erreur" => $erreurMsg
        ));
    }

    /**
     * Edition d'un groupe
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, $nomGroupe = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $groupeRepository = $entityManager->getRepository("RessourceBundle:Groupe");
        $groupe = $groupeRepository->findOneById($id);

        if ($groupe == null) {
            $groupe = new Groupe();
        }

        // Si on est dans enfant et qu'on utilise la modal
        if ($nomGroupe != null) {
            $groupe->setDesignation($nomGroupe);
            $entityManager->persist($groupe);
            $entityManager->flush();
            return new Response($groupe->getId());
        }

        $form = $this->createForm(GroupeType::class, $groupe);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($groupe);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Groupe bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBundle_Groupe_edit'));
        }
        return $this->render('RessourceBundle:Groupe:edit.html.twig', array(
            'groupe' => $groupe,
            'form' => $form->createView()
        ));
    }

    /**
     * Affichage d'un groupe particulier
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $groupeRepository = $entityManager->getRepository("RessourceBundle:Groupe");
        $groupe = $groupeRepository->findOneById($id);

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfants = $enfantRepository->findAll();

        return $this->render('RessourceBundle:Groupe:show.html.twig', array(
            "groupe" => $groupe, 'enfants' => $enfants
        ));
    }

    /**
     * Suppression d'un groupe
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $groupeRepository = $entityManager->getRepository("RessourceBundle:Groupe");
        $groupe = $groupeRepository->findOneById($id);
        if ($groupe != null) {
            $entityManager->remove($groupe);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('RessourceBundle_Groupe_index'));
    }

}
