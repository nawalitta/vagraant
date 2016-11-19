<?php

namespace UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UtilisateurBundle\Entity\Utilisateur;
use UtilisateurBundle\Form\UtilisateurType;

class UtilisateurController extends Controller
{
    /**
     * @param null $id si null alors ajout
     *                   sinon édition d'un utilisateur
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null, Request $request)
    {
        #Création formulaire
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $em = $this->getDoctrine()->getManager();

        $form->handleRequest($request);
        if ($id == null) {
            #Ajout
            if ($form->isValid()) {
                $utilisateur = $form->getData();
                $em->persist($utilisateur);
                $em->flush();
                return $this->redirectToRoute('UtilisateurBundle_Utilisateur_edit');
            }
        } else {
            #Modification
            $utilisateur = $em->getRepository('UtilisateurBundle:Utilisateur')->find($id);
            $utilisateur = $form->getData();
            $em->flush();
            return $this->redirectToRoute('UtilisateurBundle_Utilisateur_show');
        }
        return $this->render('UtilisateurBundle:Utilisateur:edit.html.twig', array('form' => $form->createView(),));
    }

    /**
     * Affichage d'un utilisateur présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id = null)
    {
        if ($id != null) {
            $entityManager = $this->getDoctrine()->getManager();
            $utilisateurRepository = $entityManager->getRepository("UtilisateurBundle:Utilisateur");
            $utilisateur = $utilisateurRepository->find($id);
            return $this->render('UtilisateurBundle:Utilisateur:show.html.twig', array(
                'utilisateur' => $utilisateur,
            ));
        }
        return $this->redirectToRoute('UtilisateurBundle_Utilisateur_index');
    }

    /**
     * Affichage de tous les utilisateurs présents dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository("UtilisateurBundle:Utilisateur")->findAll();
        return $this->render('UtilisateurBundle:Utilisateur:index.html.twig', array("utilisateurs" => $utilisateurs));
    }

    /**
     * Suppresion d'un utilisateur
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id = null)
    {
        if ($id != null) {
            $em = $this->getDoctrine()->getManager();
            $utilisateur = $em->getRepository('UtilisateurBundle:Utilisateur')->find($id);
            $em->remove($utilisateur);
            $em->flush();
        }
        return $this->render('UtilisateurBundle:Utilisateur:index.html.twig');
    }

}
