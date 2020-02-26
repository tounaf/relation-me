<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 26/02/2020
 * Time: 14:18
 */

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class HomeControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = self::createClient();
        $client->request('GET','/show');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertNotEquals(Response::HTTP_BAD_REQUEST, $statusCode);
    }
}