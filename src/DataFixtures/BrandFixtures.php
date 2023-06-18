<?php 

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BrandFixtures extends Fixture

{
    public function load(ObjectManager $manager)
    {
        $c = [
            1 => [
                'name' => 'Nike',
                'description' => 'Just Do It.'
                
            ],

            2 => [
                'name' => 'Adidas',
                'description' => 'Impossible is Nothing.'
                
            ],

            3 => [
                'name' => 'Lacoste',
                'description' => 'Un style sportif et élégant, synonyme de classe intemporelle.'
                
            ],

            4 => [
                'name' => 'Puma',
                'description' => 'La vitesse et la performance incarnées dans chaque pas.'
                
            ],

            5 => [
                'name' => 'Reebok',
                'description' => 'L\'audace et le style athlétique en parfaite harmonie.'
                
            ],

            6 => [
                'name' => 'New Balance',
                'description' => 'Un équilibre parfait entre confort et performance.'
                
            ],

            7 => [
                'name' => 'Converse',
                'description' => 'L\'icône intemporelle de la simplicité rebelle.'
                
            ],

            8 => [
                'name' => 'Vans',
                'description' => 'L\'esprit de la culture skate et de la créativité urbaine.'
                
            ],

            9 => [
                'name' => 'Fila',
                'description' => 'La fusion parfaite de la mode sportive et de l\'élégance décontractée.'
                
            ],

            10 => [
                'name' => 'Asics',
                'description' => 'La recherche de la perfection dans chaque mouvement.'
                
            ],

            11 => [
                'name' => 'Timberland',
                'description' => 'L\'alliance de la robustesse et de l\'élégance pour affronter la nature.'
                
            ],

            12 => [
                'name' => 'DC Shoes',
                'description' => 'L\'énergie audacieuse et le style urbain dans chaque pas.'
                
            ],

            13 => [
                'name' => 'Le Coq Sportif',
                'description' => 'La tradition française de l\'élégance sportive.'
                
            ],

            14 => [
                'name' => 'Skechers',
                'description' => 'Le confort inégalé pour une vie active et décontractée.'
                
            ],
            ];
        
        foreach ($c as $k => $value) {
            $brand = new Brand();
            $brand->setName($value['name']); 
            $brand->setDescription($value['description']); 
            $manager->persist($brand);
            $this -> addReference('brand-' . $k, $brand);
 
        
    }

        $manager->flush();
    }
}