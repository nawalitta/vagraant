<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteObligatoireType;

class ActiviteObligatoireController extends Controller
{
    /**
     * Affichage de toutes les ActiviteObligatoire présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteObligatoireRepository = $entityManager->getRepository("ActiviteBundle:ActiviteObligatoire");
        $activitesObligatoires = $activiteObligatoireRepository->findAll();
        
        return $this->render('ActiviteBundle:ActiviteObligatoire:index.html.twig', array(
        "activitesObligatoires"=>$activitesObligatoires
        ));
    }
    
    /**
     * Affichage d'une ActiviteObligatoire présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteObligatoireRepository = $entityManager->getRepository("ActiviteBundle:ActiviteObligatoire");
        $activiteObligatoire = $activiteObligatoireRepository->findOneById($id);
        
        return $this->render('ActiviteBundle:ActiviteObligatoire:show.html.twig', array(
        "activiteObligatoire"=>$activiteObligatoire
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une ActiviteObligatoire
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteObligatoireRepository = $entityManager->getRepository("ActiviteBundle:ActiviteObligatoire");
        $activiteObligatoire = $activiteObligatoireRepository->findOneById($id);
        
        if($activiteObligatoire==null){
            $activiteObligatoire=new \ActiviteBundle\Entity\ActiviteObligatoire();
        }
        
        $form = $this->createForm(ActiviteObligatoireType::class,$activiteObligatoire);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($activiteObligatoire);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'ActiviteObligatoire bien enregistrée.');

            return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteObligatoire_index'));
        }
        
        return $this->render('ActiviteBundle:ActiviteObligatoire:edit.html.twig', array(
        'activiteObligatoire'=>$activiteObligatoire,
        'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une ActiviteObligatoire
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */    
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
        $activiteObligatoireRepository = $entityManager->getRepository("ActiviteBundle:ActiviteObligatoire");
        $activiteObligatoire = $activiteObligatoireRepository->findOneById($id);
        if($activiteObligatoire!=null){
            $entityManager->remove ($activiteObligatoire);
        }
        $entityManager->flush();
       
        return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteObligatoire_index'));
    }

}
