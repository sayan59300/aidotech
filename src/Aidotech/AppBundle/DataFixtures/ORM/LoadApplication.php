<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\Application;

class LoadApplication implements FixtureInterface {

  public function load(ObjectManager $manager) {
    $apps = [
        ['nom' => 'Netbeans', 'editeur' => 'Jetbrains', 'version' => '8.2'],
        ['nom' => 'PHPStorm', 'editeur' => 'Oracle', 'version' => '5'],
        ['nom' => 'SublimText', 'editeur' => 'SublimSoft', 'version' => '3.2'],
        ['nom' => 'JMerise', 'editeur' => 'Java', 'version' => '1.0'],
        ['nom' => 'Skype', 'editeur' => 'Microsoft', 'version' => '10'],
    ];

    foreach ($apps as $app) {
      $application = new Application();
      $application->setNom($app['nom']);
      $application->setEditeur($app['editeur']);
      $application->setVersion($app['version']);
      $manager->persist($application);
    }
    $manager->flush();
  }

}
