<?php

namespace ActiviteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActiviteFixeeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteFixee/index');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteFixee/show/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteFixee/delete/{id}');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteFixee/edit/{id}');
    }

}
