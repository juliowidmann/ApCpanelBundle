<?php

namespace Ap\CpanelBundle\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CpanelapiTest 
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
}
