<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Lake;

class LoadZimbabwe implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/zimbabwe.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $zimbabwe = new Zimbabwe();
            $zimbabwe->setName($item['name']);
            $zimbabwe->setDepth($item['depth']);
            $manager->persist($zimbabwe);
        }

        $manager->flush();
    }
}