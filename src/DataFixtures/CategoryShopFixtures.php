<?php 

namespace App\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryShopFixtures extends Fixture

{
    public function load(ObjectManager $manager)
    {
        $c = [
            1 => [
                'name' => 'Chaussures',
                
            ],

            2 => [
                'name' => 'Vêtements',
                
            ],

            3 => [
                'name' => 'Accessoires',
                
            ]
            ];
        
        foreach ($c as $k => $value) {
            $categoryShop = new CategoryShop();
            $categoryShop->setName($value['name']); 
            $manager->persist($categoryShop);
 
        
    }

        $manager->flush();
    }
}