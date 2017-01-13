<?php

namespace RessourceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GroupeControllerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'groupe/index');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'groupe/edit');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'groupe/show');
    }

}
