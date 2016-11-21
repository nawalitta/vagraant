<?php

namespace UtilisateurBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'utilisateur/edit');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'utilisateur/show');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'utilisateur/index');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'utilisateurAction');
    }

}
