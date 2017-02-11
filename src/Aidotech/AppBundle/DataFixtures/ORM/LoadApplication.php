<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\Application;

class LoadApplication extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    $apps = [
        ['nom' => 'Netbeans', 'editeur' => 'Jetbrains', 'version' => '8.2'],
        ['nom' => 'Netbeans', 'editeur' => 'Jetbrains', 'version' => '7.2'],
        ['nom' => 'PHPStorm', 'editeur' => 'Oracle', 'version' => '5'],
        ['nom' => 'PHPStorm', 'editeur' => 'Oracle', 'version' => '4'],
        ['nom' => 'PHPStorm', 'editeur' => 'Oracle', 'version' => '3'],
        ['nom' => 'SublimText', 'editeur' => 'SublimSoft', 'version' => '3.2'],
        ['nom' => 'SublimText', 'editeur' => 'SublimSoft', 'version' => '2.0'],
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
  
  public function getOrder() {
    return 1;
  }

}
