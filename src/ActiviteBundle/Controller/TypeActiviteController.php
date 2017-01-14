<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\TypeActiviteType;

class TypeActiviteController extends Controller
{
    /**
     * Affichage de tous les type d'activités présents dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeActiviteRepository = $entityManager->getRepository("ActiviteBundle:TypeActivite");
        $erreurMsg = "";
        //Récupere la liste des types d'activités coché afin de les supprimer
        $listeTypeActivite = $request->get('idTypeActivites');
        if ($listeTypeActivite != null) {
            foreach ($listeTypeActivite as $id) {
                $typeActivite = $typeActiviteRepository->findOneById($id);
                if ($typeActivite != null) {
                    $entityManager->remove($typeActivite);
                }
                try{
                    $entityManager->flush();
                } catch (\Exception $ex) {
                    //Problème de clé étrangère encore présente
                    $erreurMsg = "Ces types d'activités sont encore affectées";
                }
            }
        }

        //Fin suppression des éléments
        $typeActivites= $typeActiviteRepository->findAll();

        return $this->render('ActiviteBundle:TypeActivite:index.html.twig', array(
            "typeActivites" => $typeActivites,"erreur"=>$erreurMsg
        ));
    }
    
    /**
     * Affichage d'un type d'activite présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeActiviteRepository = $entityManager->getRepository("ActiviteBundle:TypeActivite");
        $typeActivite = $typeActiviteRepository->findOneById($id);

        return $this->render('ActiviteBundle:TypeActivite:show.html.twig', array(
        "typeActivite"=>$typeActivite
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'un TypeActivite
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeActiviteRepository = $entityManager->getRepository("ActiviteBundle:TypeActivite");
        $typeActivite = $typeActiviteRepository->findOneById($id);

        if($typeActivite==null){
            $typeActivite=new \ActiviteBundle\Entity\TypeActivite();
        }

        $form = $this->createForm(TypeActiviteType::class,$typeActivite);
        $form->handleRequest($request);

        if($form->isValid()){

            $entityManager->persist($typeActivite);
            $entityManager->flush();

            $this->get('session')->getFlashBag()->add('notice', 'TypeActivite bien enregistrée.');

            return $this->redirect($this->generateUrl('ActiviteBundle_Activite_edit'));               

        }

        return $this->render('ActiviteBundle:TypeActivite:edit.html.twig', array(
        'typeActivite'=>$typeActivite,
        'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'un TypeActivite
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $typeActiviteRepository = $entityManager->getRepository("ActiviteBundle:TypeActivite");
        $typeActivite = $typeActiviteRepository->findOneById($id);
        if($typeActivite!=null){
            $entityManager->remove ($typeActivite);
        }
        $entityManager->flush();

        return $this->redirect($this->generateUrl('ActiviteBundle_TypeActivite_index'));
    }

}
