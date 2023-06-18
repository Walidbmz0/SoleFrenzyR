<?php 

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture

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
            $category = new Category();
            $category->setName($value['name']); 
            $manager->persist($category);
            $this -> addReference('category-' . $k, $category);
 
        
    }

        $manager->flush();
    }
}