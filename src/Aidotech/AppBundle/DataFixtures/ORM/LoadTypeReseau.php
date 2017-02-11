<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\TypeReseau;

class LoadTypeReseau extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    $types = [
        ['nom' => 'Lan'],
        ['nom' => 'Internet'],
        ['nom' => 'Intranet'],
        ['nom' => 'VPN'],
    ];

    foreach ($types as $typ) {
      $type = new TypeReseau();
      $type->setNom($typ['nom']);
      $manager->persist($type);
    }
    $manager->flush();
  }
  
  public function getOrder() {
    return 1;
  }

}
