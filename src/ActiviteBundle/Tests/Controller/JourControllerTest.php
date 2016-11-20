<?php

namespace ActiviteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JourControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Jour/index');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Jour/show/{id}');
    }

}
