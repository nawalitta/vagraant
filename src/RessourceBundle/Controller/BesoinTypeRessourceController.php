<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\BesoinTypeRessourceType;
use RessourceBundle\Entity\BesoinTypeRessource;

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
    public function editAction($id = null,$idActivite, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        //Recherche des elements necessaire à l'action
        $besoinTypeRessourceRepository = $entityManager->getRepository("RessourceBundle:BesoinTypeRessource");
        $besoinTypeRessource = $besoinTypeRessourceRepository->findOneById($id);
        $typeRessourceRepository = $entityManager->getRepository("RessourceBundle:TypeRessource");
        $typesRessource = $typeRessourceRepository->findAll();
        $activiteRepository = $entityManager->getRepository('ActiviteBundle:Activite');
        $activite = $activiteRepository->findOneById($idActivite);
        
            //Pour tous les types coché , on recherche son entité et les infos associé afin de l'ajouté a besoinTypeRessource
            $listTypeRessource=$request->get('idTypeRessource');
            $quantite= $request->get('quantite');
            $ratio= $request->get('ratio');
            $preference= $request->get('preference');
            $erreurMsg = "";
            if($listTypeRessource !=null){
                //Creer autant d'entité besoin type ressource que necessaire
                // i est le compteur du tableau
                $i = 0;
                $besoinTypeRessource[sizeof($listTypeRessource)];
                foreach ($listTypeRessource as $id){
                    // On enregistre le typeRessource
                    $typeRessource =  $typeRessourceRepository->findOneById($id);
                    $besoinTypeRessource[$i] = new BesoinTypeRessource();
                    $besoinTypeRessource[$i]->setTypeRessource($typeRessource);
                    
                    //On verifie que les champs soit renseigné sinon on affiche un msg d'erreur
                    if($quantite[$id]==""){
                        $erreurMsg = "La quantité doit être renseigné";
                    }else{
                        $besoinTypeRessource[$i]->setQuantiteRessource($quantite[$id]);
                    }
                    if($ratio[$id]==""){
                        $erreurMsg = " Le ratio doit être renseingé";
                    }else{
                        $besoinTypeRessource[$i]->setRatio($ratio[$id]);
                    }
                    if($preference[$id]==""){
                        $erreurMsg = "La preference doit être renseigné";
                    }else{
                        $besoinTypeRessource[$i]->setPreference($preference[$id]);    
                    }
                    //On enregistre uniquement si tout est rempli
                    if($preference[$id]!="" && $ratio[$id]!="" && $quantite[$id]!="" ){
                        $besoinTypeRessource[$i]->setActivite($activite);         
                        $entityManager->persist($besoinTypeRessource[$i]);
                        $entityManager->flush();
                        $i = $i +1;                       
                    }

                    
                }
                //On ce redirige vers l'index d'activité
                return $this->redirect($this->generateUrl('ActiviteBundle_Activite_index'));  
            }

        return $this->render('RessourceBundle:BesoinTypeRessource:edit.html.twig', array(
                    'besoinTypeRessource' => $besoinTypeRessource,
                    'typesRessource'=> $typesRessource,
                    'erreur'=> $erreurMsg
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
