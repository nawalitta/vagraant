<?php

namespace ActiviteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TypeActiviteControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'TypeActivite/edit');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'TypeActivite/delete');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'TypeActivite/show/{id}');
    }

}
