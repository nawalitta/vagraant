<?php

namespace CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AffectationControllerControllerTest extends WebTestCase
{
    public function testEnfantactiviteoption()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'affectation/enfantActiviteOption');
    }

    public function testEnfantactiviteobligatoire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'affectation/enfantActiviteObligatoire');
    }

}
