<?php

namespace CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AffectationControllerTest extends WebTestCase
{
    public function testAffecterenfantactiviteoption()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'affectation/enfantActiviteOption');
    }

    public function testAffecterenfantactiviteobligatoire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'affectation/enfantActivteObligatoire');
    }

}
