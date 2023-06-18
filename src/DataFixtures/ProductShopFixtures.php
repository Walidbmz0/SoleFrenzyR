<?php 


namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;

class ProductShopFixtures extends Fixture

{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        // create 20 products! Bam!
        for ($i = 0; $i < 150; $i++) {
            $product = new Product();
            $product->setName($faker->sentence);
            $product->setDescription($faker->text);
            $product->setAttachment($faker->imageUrl(640, 480, 'shoes','clothes','accessories'));
            $product->setPrice($faker->randomFloat(2));
            $product->setColor($faker->colorName);
            
        }

        $manager->flush();
    }
}