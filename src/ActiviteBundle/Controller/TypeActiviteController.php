<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\TypeActiviteType;

class TypeActiviteController extends Controller
{
    /**
     * Affichage de toutes les TypeActivite présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $typeActiviteRepository = $entityManager->getRepository("ActiviteBundle:TypeActivite");
        $typeActivites = $typeActiviteRepository->findAll();

        return $this->render('ActiviteBundle:TypeActivite:index.html.twig', array(
        "typeActivites"=>$typeActivites
        ));
    }
    
    /**
     * Affichage d'un TypeActivite présent dans la bdd
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

            return $this->redirect($this->generateUrl('ActiviteBundle_TypeActivite_index'));
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
