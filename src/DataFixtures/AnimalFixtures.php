<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** 
          * $classe = {"Barbare","druide"};
          *foreach($classe as $classe) {
           * $type = new Type();
           *$type->setNom($classe)
           * $manager->persist();
           *}
        */  
        // $product = new Product();
        // $manager->persist($product);

        
    }
}
