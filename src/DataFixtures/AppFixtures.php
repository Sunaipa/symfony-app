<?php

namespace App\DataFixtures;

use App\Entity\TrainingCenter;
use App\Entity\TrainingProgram;
use App\Factory\DegreeFactory;
use App\Factory\TrainingCenterFactory;
use App\Factory\TrainingFactory;
use App\Factory\TrainingProgramFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        DegreeFactory::createMany(10);
        TrainingCenterFactory::createMany(10);
        TrainingProgramFactory::createMany(10);
        TrainingFactory::createMany(50);


        $manager->flush();
    }
}
