<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/01/2017
 * Time: 03:12
 */

namespace StatsBundle\stats;
use Ob\HighchartsBundle\Highcharts\Highchart;


class chart
{
  /*  private $chartData;


    public function __construct(chartData $chartData)
    {
        $this->chartData = $chartData;
    }
    public function activityCharts()
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

        $data = $this->chartData->getActivitesByType() ;
        $ob->series(array(array('type' => 'pie', 'data' => $data)));
        return $ob;
    }

    public function enfantCharts()
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

        $data = $this->chartData->getEnfantByGroupe();
        $ob->series(array(array('type' => 'column', 'data' => $data)));
        return $ob;
    }

    public function ressourcePerTypeCharts()
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

        $data = $this->chartData->getRessourceParType();
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
  */

}