<?php

namespace ActiviteBundle\Controller;

use ActiviteBundle\Entity\Activite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ActiviteBundle\Form\TypeActiviteType;
use ActiviteBundle\Entity\TypeActivite;
use Symfony\Component\HttpFoundation\Request;

class TypeActiviteController extends Controller
{
    public function indexAction()
    {
        return $this->render('ActiviteBundle:TypeActivite:index.html.twig', array(
            // ...
        ));
    }
    
    public function editAction($id=Null,Request $request)
    {
        
        #Création formulaire
        $typeactivite = new TypeActivite();
        $form = $this->createForm(TypeActiviteType::class, $typeactivite);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($id==null){
            #Ajout
            if ($form->isValid()) {
                $typeactivite = $form->getData();
                $em->persist($typeactivite);
                $em->flush();
                return $this->redirectToRoute('ActiviteBundle_TypeActivite_show');
            }
        }else{
            #Modification
            $typeactivite = $em->getRepository('ActiviteBundle:TypeActivite')->find($id);
            $typeactivite = $form->getData();
            $em->flush();
            return $this->redirectToRoute('ActiviteBundle_TypeActivite_show');
            
            
        }
        return $this->render('ActiviteBundle:TypeActivite:edit.html.twig', array('form' => $form->createView() , ));
    }

    public function deleteAction($id)
    {
        if($id!=null)
        {
            $em = $this->getDoctrine()->getManager();
            $typeactivite = $em->getRepository('ActiviteBundle:TypeActivite')->find($id);
            $em->remove($typeactivite);
            $em->flush();
        }
        return $this->render('ActiviteBundle:TypeActivite:delete.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('ActiviteBundle:TypeActivite:show.html.twig', array(
            // ...
        ));
    }

}
