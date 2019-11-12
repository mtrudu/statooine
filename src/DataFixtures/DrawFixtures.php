<?php

namespace App\DataFixtures;

use App\Core\Draw\Entity\Draw;
use App\Core\Number\Entity\Number;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class DrawFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $draw = new Draw(new \DateTime(sprintf('now -%d day', $i+1)));

            $numbers = new ArrayCollection();

            for ($j = 0; $j < 7; $j++) {
                $isStar = false;

                if ($j > 4) {
                    $isStar = true;
                }

                $number = new Number($faker->numberBetween(1, 50), $j +1, $isStar, $draw);
                $manager->persist($number);

                $numbers->add($number);
            }

            $draw->setNumbers($numbers);
            $manager->persist($draw);
        }
        $manager->flush();
    }
}