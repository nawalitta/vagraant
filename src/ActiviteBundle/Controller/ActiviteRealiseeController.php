<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActiviteRealiseeController extends Controller
{
    public function indexAction()
    {
       $entityManager = $this->getDoctrine()->getManager();
           $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");
      $activitesRealisees = $activiteRealiseeRepository->findAll();

        return $this->render('ActiviteBundle:ActiviteRealisee:index.html.twig', array(
            "activitesRealisees"=>$activitesRealisees
        ));
    }

    public function editAction($id,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

       $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

       $activiteRealisee = $activiteRealiseeRepository->findOneById($id);
       if($activiteRealisee==null)
           {
           $activiteRealisee=new \ActiviteBundle\Entity\ActiviteRealisee();
           }
       $form = $this->createForm(\ActiviteBundle\Form\ActiviteRealiseeType::class,$activiteRealisee);


        $form->handleRequest($request);

        if($form->isValid()){

            $entityManager->persist($activiteRealisee);

            $entityManager->flush();
             $request->getSession()->getFlashBag()->add('notice', 'L \'activite réalisé est bien enregistrée.');
            return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteRealisee_index'));
        }

        return $this->render('ActiviteBundle:ActiviteRealisee:edit.html.twig', array(
            'activiteRealisee'=>$activiteRealisee,
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

       $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

       $activiteRealisee = $activiteRealiseeRepository->findOneById($id);
       if($activiteRealisee!=null)
           $entityManager->remove ($activiteRealisee);
       $entityManager->flush();

        return $this->redirect($this->generateUrl('ActiviteBundle_ActiviteRealisee_index'));
    }

    public function showAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

       $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");

       $activiteRealisee = $activiteRealiseeRepository->findOneById($id);

        return $this->render('ActiviteBundle:ActiviteRealisee:show.html.twig', array(
            'activiteRealisee'=>$activiteRealisee,
        ));
    }

}
