<?php

namespace RessourceBundle\Controller;

use RessourceBundle\Entity\Enfant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RessourceBundle\Form\RessourceType;


class EnfantController extends Controller
{
      /**
     * Affichage de toutes les Enfant présentes dans la bdd
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
     * Affichage d'une Enfant présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        return $this->render('RessourceBundle:Enfant:show.html.twig', array(
                    "enfant" => $enfant
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une Enfant
     * @param Request $request
     * @return Response
     */
    public function editAction($id = null, Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $typeActivitRepository = $entityManager->getRepository('RessourceBundle:Enfant');
        if ($typeActivitRepository->findOneBy(array()) == null) {
            $this->get('session')->getFlashBag()->add('alert', 'Type Enfant requis.');
            return $this->redirect($this->generateUrl('RessourceBundle_Enfant_edit'));
        }

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);

        if ($enfant == null) {
            $enfant = new Enfant();
        }

        $form = $this->createForm(Enfant::class, $enfant);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entityManager->persist($enfant);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Enfant bien enregistrée.');

            return $this->redirect($this->generateUrl('RessourceBundle_Enfant_index'));
        }

        return $this->render('RessourceBundle:Enfant:edit.html.twig', array(
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

        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        $enfant = $enfantRepository->findOneById($id);
        if ($enfant != null) {
            $entityManager->remove($enfant);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('RessourceBundle_Enfant_index'));
    }
}
