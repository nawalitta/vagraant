<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BesoinTypeRessourceControllerControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'besoinTypeRessource');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'besoinTypeRessource');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'besoinTypeRessource');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'besoinTypeRessource');
    }

}
