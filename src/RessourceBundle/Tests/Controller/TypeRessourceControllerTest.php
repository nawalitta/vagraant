<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TypeRessourceControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'typeRessource');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'typeRessource');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'typeRessource');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'typeRessource');
    }

}
