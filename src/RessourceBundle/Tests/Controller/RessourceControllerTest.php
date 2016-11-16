<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RessourceControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Ressource/index');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Ressource/edit/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Ressource/delete/{id}');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Ressource/show/{id}');
    }

}
