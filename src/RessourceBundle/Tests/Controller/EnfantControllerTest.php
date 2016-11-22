<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EnfantControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'enfant');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'enfant');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'enfant');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'enfant');
    }

}
