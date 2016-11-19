<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VehiculeControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'vehicule/edit');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'vehicule/delete');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'vehicule/show');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'vehicule/index');
    }

}
