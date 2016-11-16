<?php

namespace ActiviteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActiviteRealiseeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteRealisee/index');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteRealisee/edit/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteRealisee/delete/{id}');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ActiviteRealisee/show/{id}');
    }

}
