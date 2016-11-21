<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Form\ActiviteFixeeType;

class ActiviteFixeeController extends Controller
{
    /**
     * Affichage de toutes les ActiviteFixee présentes dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activitesFixees = $activiteFixeeRepository->findAll();
        
        return $this->render('ActiviteBundle:ActiviteFixee:index.html.twig', array(
        "activitesFixees"=>$activitesFixees
        ));
    }
    
    /**
     * Affichage d'une ActiviteFixee présent dans la bdd
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activiteFixee = $activiteFixeeRepository->findOneById($id);
        
        return $this->render('ActiviteBundle:ActiviteFixee:show.html.twig', array(
        "activiteFixee"=>$activiteFixee
        ));
    }

    /**
     * @param null $id : si null alors ajout
     *                   sinon édition d'une ActiviteFixee
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id=null,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activiteFixee = $activiteFixeeRepository->findOneById($id);
        
        if($activiteFixee==null){
            $activiteFixee=new \ActiviteBundle\Entity\ActiviteFixee();
        }
        
        $form = $this->createForm(ActiviteFixeeType::class,$activiteFixee);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $entityManager->persist($activiteFixee);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'ActiviteFixee bien enregistrée.');

            return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteFixee_index'));
        }
        
        return $this->render('ActiviteBundle:ActiviteFixee:edit.html.twig', array(
        'activiteFixee'=>$activiteFixee,
        'form' => $form->createView()
        ));
    }

    /**
     * Suppression d'une ActiviteFixee
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */    
    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
  
        $activiteFixeeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteFixee");
        $activiteFixee = $activiteFixeeRepository->findOneById($id);
        if($activiteFixee!=null){
            $entityManager->remove ($activiteFixee);
        }
        $entityManager->flush();
       
        return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteFixee_index'));
    }

}
