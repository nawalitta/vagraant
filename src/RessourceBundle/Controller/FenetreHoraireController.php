<?php

namespace RessourceBundle\Controller;

use RessourceBundle\Entity\FenetreHoraire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\FenetreHoraireType;
use Symfony\Component\HttpFoundation\Response;

class FenetreHoraireController extends Controller
{
    /**
     * Affichage de toutes les FenetreHoraire présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetresHoraire = $fenetreHoraireRepository->findAll();
        $erreurMsg = "";
        //Récupere la liste des fenetres horaires coché afin de les supprimer
        $listFh=$request->get('idfhs');
        if($listFh !=null){
            foreach ($listFh as $id){

                $fh = $fenetreHoraireRepository->findOneById($id);
                try{
                    if ($fh != null) {
                        $entityManager->remove($fh);
                    }
                    $entityManager->flush();
                }catch (\Exception $e) {
                    //Problème de suppression
                    $erreurMsg = "Les fenêtres horaires sélectionnées sont encore affectées !";
                }

            }           
        }
        return $this->render('RessourceBundle:FenetreHoraire:index.html.twig', array(
        "fenetresHoraire"=>$fenetresHoraire,"erreur"=>$erreurMsg
        ));
    }

    /**
     * Affichage d'une FenetreHoraire présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);

        return $this->render('RessourceBundle:FenetreHoraire:show.html.twig', array(
            "fenetreHoraire" => $fenetreHoraire
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une FenetreHoraire
     * @param Request $request
     * @return Response response
     */
    public function editAction($id = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);

        if ($fenetreHoraire == null) {
            $fenetreHoraire = new FenetreHoraire();
        }

        $form = $this->createForm(FenetreHoraireType::class, $fenetreHoraire);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($fenetreHoraire);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Fenetre Horaire bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBunde_FenetreHoraire_index'));
        }

        return $this->render('RessourceBundle:FenetreHoraire:edit.html.twig', array(
            'fenetreHoraire' => $fenetreHoraire,
            'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une FenetreHoraire
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
        $fenetreHoraire = $fenetreHoraireRepository->findOneById($id);
        if ($fenetreHoraire != null) {
            $entityManager->remove($fenetreHoraire);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('RessourceBundle_FenetreHoraire_index'));
    }

}
