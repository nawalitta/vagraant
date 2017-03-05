<?php

namespace ActiviteBundle\Controller;

use ActiviteBundle\Entity\Activite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteType;
use Symfony\Component\HttpFoundation\Response;
use ActiviteBundle\Entity\TypeActivite;
use ActiviteBundle\Form\TypeActiviteType;
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
        $erreurMsg = "";
        //Récupere la liste des activités coché afin de les supprimer
        $listActivite = $request->get('idActivites');
        if ($listActivite != null) {
            foreach ($listActivite as $id) {
                $activite = $activiteRepository->findOneById($id);
                if ($activite != null) {
                    $entityManager->remove($activite);
                }
                try{
                    $entityManager->flush();
                } catch (\Exception $ex) {
                    //Problème de clé étrangère encore présente
                    $erreurMsg = " Ces activités sont encore affectées quelque part";
                }
            }
        }
        
        //Fin suppression des éléments
        $activites = $activiteRepository->findAll();

        return $this->render('ActiviteBundle:Activite:index.html.twig', array(
            "activites" => $activites,"erreur"=>$erreurMsg
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
        $erreurMsg ="";
        return $this->render('ActiviteBundle:Activite:show.html.twig', array(
            "activite" => $activite,"erreur"=>$erreurMsg
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
        
        $activiteRepository = $entityManager->getRepository("ActiviteBundle:Activite");
        $activite = $activiteRepository->findOneById($id);
        
        //Modal
        $typeActivite = new TypeActivite();
        $formType = $this->createForm(TypeActiviteType::class, $typeActivite);
        if ($activite == null) {
            $activite = new Activite();
        }

        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($activite);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Activite bien enregistrée.');

            return $this->redirectToRoute('RessourceBundle_BesoinTypeRessource_edit', array('id'=> 'null','idActivite' => $activite->getId()));
        }

        return $this->render('ActiviteBundle:Activite:edit.html.twig', array(
            'activite' => $activite,
            'form' => $form->createView(),
            'formType'=>$formType->createView(),
            'typeActivite'=>$typeActivite
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
        $erreurMsg ="";
        if ($activite != null) {
            $entityManager->remove($activite);
        }
        try{
            $entityManager->flush();
        } catch (\Exception $ex) {
        //Problème de clé étrangère encore présente
            $erreurMsg = " Ces activités sont encore affectées quelque part";
            return $this->render('ActiviteBundle:Activite:show.html.twig', array(
                "activite" => $activite,"erreur"=>$erreurMsg
            ));
        }
        return $this->redirect($this->generateUrl('ActiviteBundle_Activite_show',array('id'=>$id,'erreur'=>$erreurMsg)));
    }

}
