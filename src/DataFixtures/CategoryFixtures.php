<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $manager->persist($this->createCategory('Image'));
        $manager->persist($this->createCategory('Video'));
        $manager->persist($this->createCategory('Son'));

        $manager->flush();
    }

    private function createCategory(string $label)
    {
        return (new Category())
            ->setLabel($label)
        ;
    }
}
