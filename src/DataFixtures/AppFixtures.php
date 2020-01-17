<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i= 0;$i<3;$i++) {
            $product = new Product();
            $product->setName("My product ".$i);
            $product->setPrice(1+$i);
            $product->setDescription("description ".$i);
            $manager->persist($product);
        }
        $manager->flush();
    }
}
