<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FenetreHoraireControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'FenetreHoraire/index');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'FenetreHoraire/edit');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'FenetreHoraire/delete');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'FenetreHoraire/show/{id}');
    }

}
