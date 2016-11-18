<?php

namespace ActiviteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ActiviteBundle\Form\ActiviteObligatoireType;
use ActiviteBundle\Entity\ActiviteObligatoire;
use Symfony\Component\HttpFoundation\Request;

class ActiviteObligatoireController extends Controller
{
    public function editAction($id=null, Request $request)
    {
        $activiteObligatoire = new ActiviteObligatoire();
        $form = $this->createForm(ActiviteObligatoireType::class,$activiteObligatoire);
         $form->handleRequest($request);
        if ($id==null){
            #Ajout
            if ($form->isValid()) {
                $activiteObligatoire = $form->getData();
                $em->persist($activiteObligatoire);
                $em->flush();
                return $this->redirectToRoute('ActiviteBundle_activiteObligatoire_show');
            }
        }else{
            #Modification
            $activiteObligatoire = $em->getRepository('ActiviteBundle:ActiviteObligatoire')->find($id);
            $activiteObligatoire = $form->getData();
            $em->flush();
            return $this->redirectToRoute('ActiviteBundle_activiteObligatoire_show');
            
            
        }
        
        return $this->render('ActiviteBundle:ActiviteObligatoire:edit.html.twig',array('form' => $form->createView(),
        ));
    }
    
    public function deleteAction($id=null)
    {
        if($id!=null)
        {
            $em = $this->getDoctrine()->getManager();
            $activiteObligatoire = $em->getRepository('ActiviteBundle:ActiviteObligatoire')->find($id);
            $em->remove($activiteObligatoire);
            $em->flush();
        }
        return $this->render('ActiviteBundle:ActiviteObligatoire:show.html.twig');
    }
    
    public function showAction()
    {
        return $this->render('ActiviteBundle:ActiviteObligatoire:show.html.twig');
    }

}
