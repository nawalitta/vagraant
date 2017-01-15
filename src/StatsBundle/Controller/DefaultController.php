<?php

namespace StatsBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {


        return $this->render('@Stats/Default/index.html.twig', array(
            'activite' => $this->activityCharts(),
            'enfant' => $this->enfantCharts(),
            'eenfantPerActivite'=> $this->ressourcePerTypeCharts(),
        ));
    }

    private function activityCharts()
    {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text(' % des activités par type d\'activité');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true,
            'dataLabels' => array(
                'enabled' => true,
                'format' => '<b>{point.name}</b>: {point.percentage:.1f} %',
            )));

        $ob->xAxis->categories(array());
//        $ob->yAxis->title->text('nombre');;
        $ob->plotOptions->series(array(
            'name' => '% des activités'
        ));

        $ob->yAxis->text('');

        $data = $this->getActivitesByType();
        $ob->series(array(array('type' => 'pie', 'data' => $data)));
        return $ob;
    }
    private function enfantCharts()
    {
        $ob = new Highchart();
        $ob->chart->renderTo('column');
        $ob->title->text('Nombre d\'enfants par groupe');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true,
            'dataLabels' => array(
                'enabled' => true,
                'format' => '<b>{point.name}</b>: {point.percentage:.1f} %',
            )));

        $ob->xAxis->categories(array());
//        $ob->yAxis->title->text('nombre');;
        $ob->plotOptions->series(array(
            'name' => 'Nombre d\'enfants par groupe'
        ));

        $ob->yAxis->text('');

        $data = $this->getEnfantByGroupe();
        $ob->series(array(array('type' => 'column', 'data' => $data)));
        return $ob;
    }
    private function ressourcePerTypeCharts()
    {
        $ob = new Highchart();
        $ob->chart->renderTo('column2');
        $ob->title->text('Nombre d\'enfants par groupe');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true,
            'dataLabels' => array(
                'enabled' => true,
                'format' => '<b>{point.name}</b>: {point.percentage:.1f} %',
            )));

        $ob->xAxis->categories(array());
        $ob->yAxis->text('');

        $data = $this->getRessourceParType();
        $ob->series(array(
            array(
                'startAngle' =>  -90,
                'endAngle' =>  90,
                'center'=>['50%', '75%'],
                'name' => 'Nombre de ressource par type',
                'type' => 'pie',
                'innerSize' => '50%',
                'data' => $data)));
        return $ob;
    }

    private function getActivitesByType()
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
    private function getEnfantByGroupe()
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
    private function getRessourceParType()
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
        }
        return $arrayResult;
    }

}
