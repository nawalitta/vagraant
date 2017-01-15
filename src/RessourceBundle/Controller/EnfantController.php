<?php

namespace RessourceBundle\Controller;

use RessourceBundle\Entity\Enfant;
use RessourceBundle\Entity\Groupe;
use RessourceBundle\Form\EnfantType;
use RessourceBundle\Form\GroupeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\RessourceType;


class EnfantController extends Controller
{
    /**
     * Affichage de tous les enfant présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $erreurMsg="";
        //Récupere la liste des enfants coché afin de les supprimer
        $listEnfants=$request->get('idEnfants');
        if($listEnfants !=null){
            foreach ($listEnfants as $id){
                $enfant = $enfantRepository->findOneById($id);
                try{
                    if ($enfant != null) {
                        $entityManager->remove($enfant);
                    }
                    $entityManager->flush();                   
                } catch (\Exception $ex) {
                    //Pb de suppression
                    $erreurMsg = "les enfants selectionnées ont encore des activités !";
                }
            }           
        }
        
        $enfants = $enfantRepository->findAll();

        return $this->render('RessourceBundle:Enfant:index.html.twig', array(
                    "enfants" => $enfants,"erreur"=>$erreurMsg
        ));
    }

    /**
     * Affichage d'un enfant présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        $activteRepository = $entityManager->getRepository("ActiviteBundle:Activite");

        $listActivitesOption = $request->get('idActivitesOption');
        if($listActivitesOption !=null){
            foreach ($listActivitesOption as $id){
                $activite = $activteRepository->findOneById($id);
                try{
                    if ($activite != null) {
                        $enfant->removeActivitesOptionelle($activite);
                    }
                    $entityManager->flush();
                } catch (\Exception $ex) {
                    //Pb de suppression
                    $erreurMsg = "les enfants selectionnées ont encore des activités !";
                }
            }
        }
        $listActivitesObligatoires = $request->get('idActivitesObligatoires');
        if($listActivitesObligatoires !=null){
            foreach ($listActivitesObligatoires as $id){
                $activite = $activteRepository->findOneById($id);
                try{
                    if ($activite != null) {
                        $enfant->removeActivitesObligatoire($activite);
                    }
                    $entityManager->flush();
                } catch (\Exception $ex) {
                    //Pb de suppression
                    $erreurMsg = "les enfants selectionnées ont encore des activités !";
                }
            }
        }

        return $this->render('RessourceBundle:Enfant:show.html.twig', array(
                    "enfant" => $enfant
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'un enfant
     * @param Request $request
     * @return Response
     */
    public function editAction($id = null, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        // Si l'utilisateur veut ajouter un groupe à travers la modal
        $groupe = new Groupe();
        $formGroupe = $this->createForm(GroupeType::class, $groupe);

        if ($enfant == null) {
            $enfant = new Enfant();
        }

        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        $estArchive = $request->get('estArchive');
        if($estArchive == null){
            $enfant->setEstArchive("0");
        }else{
            $enfant->setEstArchive("1");
        }

        if ($form->isValid()) {

            // A ENLEVER UNIQUEMENT QUAND FENTRE HORAIRE SERA OK
            $entityManager = $this->getDoctrine()->getManager();
            $fenetreHoraireRepository = $entityManager->getRepository("RessourceBundle:FenetreHoraire");
            $fenetreHoraire = $fenetreHoraireRepository->findOneById('1');
            $enfant->setFenetreHoraire($fenetreHoraire);

            $entityManager->persist($enfant);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Enfant bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBundle_Enfant_index'));
        }

        return $this->render('RessourceBundle:Enfant:edit.html.twig', array(
            'enfant' => $enfant,
            'form' => $form->createView(),
            'formGroupe' => $formGroupe->createView(),
            'groupe' => $groupe
        ));
    }

    /**
     * Suppression d'un enfant
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id) {
        $entityManager = $this->getDoctrine()->getManager();

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);
        if ($enfant != null) {
            $entityManager->remove($enfant);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('RessourceBundle_Enfant_index'));
    }
}
