<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 27/12/2019
 * Time: 17:09
 */

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ProductControllerTest extends WebTestCase
{
    public function testProduct()
    {
        $client = static::createClient();
        $client->request("GET","/product");
        $this->assertResponseStatusCodeSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

//    public function testCreate()
//    {
//        $name = 'My product '.mt_rand();
//        $price = mt_rand();
//        $description = "description ".mt_rand();
//        $client = static::createClient();
//        $crawler = $client->request("POST","/product/create");
//
//    }
}