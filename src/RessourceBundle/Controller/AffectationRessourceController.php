<?php

namespace RessourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AffectationRessourceController extends Controller
{
    public function indexAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        //On récupere les infos des entités qui nous interesse
        $activiteRealiseeRepository = $entityManager->getRepository("ActiviteBundle:ActiviteRealisee");
        $ressourceRepository = $entityManager->getRepository("RessourceBundle:Ressource");
        $enfantRepository = $entityManager->getRepository("RessourceBundle:Enfant");
        //Si id est non null alors on récupère l'activite que l'on veux
        if ($id != null) {
            $activiteRealise = $activiteRealiseeRepository->findOneById($id);
        } else {
            $activitesRealise = $activiteRealiseeRepository->findAll();
        }
        $ressources = $ressourceRepository->findAll();
        $enfants = $enfantRepository->findAll();
        

        //On gère l'affectation
        //On récupère les infos de l'activité à laquelle on veux affecter des ressources
        $activiteAffectation = $activiteRealiseeRepository->findOneById($request->get('activiteId'));

        // On ajoute toute les ressources coché
        $listRessources = $request->get('idRessources');
        if ($listRessources != null) {
            foreach ($listRessources as $id) {
                $ressource = $ressourceRepository->findOneById($id);
                if ($ressource != null) {
                    $activiteAffectation->addRessource($ressource);
                }
            }
            $entityManager->persist($activiteAffectation);
            $entityManager->flush();
        }
        return $this->render('RessourceBundle:AffectationRessource:index.html.twig', array(
                    "activitesRealise" => $activitesRealise,"ressources" => $ressources,"enfants"=>$enfants
        ));
    }

}
