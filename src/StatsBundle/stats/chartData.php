<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/01/2017
 * Time: 03:12
 */

namespace StatsBundle\stats;


class chartData
{
   /* public function getEnfantByGroupe()
    {
        $repo1 = $this->getDoctrine()->getManager()->getRepository('RessourceBundle:Enfant');
        $groupes = $this->getDoctrine()->getManager()->getRepository('RessourceBundle:Groupe')->findAll();
        $enfants = $repo1->findAll();

        $count = $repo1->createQueryBuilder('enfant')
            ->select('count(enfant.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $arrayResult = array();
        foreach ($groupes as $groupe) {
            $opt = 0;
            foreach ($enfants as $enfant) {
                if ($groupe == $enfant->getGroupe()) {
                    $opt++;
                }
            }
//            array_push($arrayResult, [$groupe->getLabelG(),(100*$opt)/$count]);
            array_push($arrayResult, [$groupe->getDesignation(), $opt]);
        }
        return $arrayResult;
    }
    public function getActivitesByType()
    {
        $repo1 = $this->getDoctrine()->getManager()->getRepository('ActiviteBundle:TypeActivite');
        $idTypesActivites = $repo1->findAll();
        $repos2 = $this->getDoctrine()->getManager()->getRepository('ActiviteBundle:Activite')->findAll();

        $count = $this->getDoctrine()
            ->getRepository('ActiviteBundle:Activite')
            ->createQueryBuilder('u')
            ->select('count(u.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $arrayResult = array();
        foreach ($idTypesActivites as $type) {
            $opt = 0;
            foreach ($repos2 as $activite) {
                if ($type == $activite->getTypeActivite()) {
                    $opt++;
                }
            }
            array_push($arrayResult, [$type->getDesignation(), (100 * $opt) / $count]);
        }
        return $arrayResult;
    }
    public  function getRessourceParType()
    {
        $repo1 = $this->getDoctrine()->getManager()->getRepository('RessourceBundle:Ressource');
        $types = $this->getDoctrine()->getManager()->getRepository('RessourceBundle:TypeRessource')->findAll();
        $ressources = $repo1->findAll();

        $count = $repo1->createQueryBuilder('r')
            ->select('count(r.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $arrayResult = array();
        foreach ($types as $type) {
            $opt = 0;
            foreach ($ressources as $ressource) {
                if ($type == $ressource->getTypeRessource()) {
                    $opt++;
                }
            }
            array_push($arrayResult, [$type->getDesignation(),(100*$opt)/$count]);
//            array_push($arrayResult, [$type->getDesignation(), $opt]);
        }
        return $arrayResult;
    }
   */


}