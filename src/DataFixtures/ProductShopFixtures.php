<?php 


namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;
use App\Entity\Brand;
use phpDocumentor\Reflection\DocBlock\Description;

class ProductShopFixtures extends Fixture

{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        
        for ($i = 0; $i < 150; $i++) {
            $category = $this->getReference('category-' . $faker->numberBetween(1, 3));
            $product = new Product();
            $product->setName($faker->sentence);
            $product->setDescription($faker->text);
            $product->setAttachment($faker->imageUrl(640, 480, 'shoes','clothes','accessories'));
            $product->setPrice($faker->randomFloat(2));
            $product->setColor($faker->colorName);
            $product->setBrand($this->getReference('brand-' . $faker->numberBetween(1, 13)));
            $product->setDescription($faker->text);
            
            $product->setSize($faker->randomLetter);
            $product->setCategory($category);
            $manager->persist($product);
            
        }

        $manager->flush();
    }
}