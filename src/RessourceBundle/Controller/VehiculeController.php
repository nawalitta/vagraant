<?php

namespace RessourceBundle\Controller;

use RessourceBundle\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RessourceBundle\Entity\Vehicule;
use Symfony\Component\HttpFoundation\Request;

class VehiculeController extends Controller
{
    /**
     * @param null $id si null alors ajout
     *                   sinon édition d'un véhicule
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id=null, Request $request)
    {
        #Création formulaire
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $em = $this->getDoctrine()->getManager();

        $form->handleRequest($request);
        if ($id==null){
            #Ajout
            if ($form->isValid()) {
                $vehicule = $form->getData();
                $em->persist($vehicule);
                $em->flush();
                return $this->redirectToRoute('RessourceBundle_Vehicule_edit');
            }
        }else{
            #Modification
            $vehicule = $em->getRepository('RessourceBundle:Vehicule')->find($id);
            $vehicule = $form->getData();
            $em->flush();
            return $this->redirectToRoute('RessourceBundle_Vehicule_show');
        }
        return $this->render('UtilisateurBundle:Utilisateur:edit.html.twig', array('form' => $form->createView() , ));

    }

    /**
     * Affichage d'un véhicule présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id=null)
    {
        if($id!=null) {
            $entityManager = $this->getDoctrine()->getManager();
            $vehiculeRepository = $entityManager->getRepository("RessourceBundle:Vehicule");
            $vehicule = $vehiculeRepository->find($id);
            return $this->render('@Ressource/Vehicule/show.html.twig', array(
                'vehicule'=>$vehicule,
            ));
        }
        return $this->redirectToRoute('RessourceBundle_Vehicule_index');
    }

    /**
     * Affichage de tous les véhicules présents dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $vehicules = $em->getRepository("RessourceBundle:Vehicule")->findAll();
        return $this->render('RessourceBundle:Vehicule:index.html.twig',array("vehicules"=>$vehicules));
    }

    /**
     * Suppresion d'un véhicule
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id=null)
    {
        if($id!=null)
        {
            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('RessourceBundle:Vehicule')->find($id);
            $em->remove($vehicule);
            $em->flush();
        }
        return $this->render('RessourceBundle:Vehicule:delete.html.twig');
    }

}
