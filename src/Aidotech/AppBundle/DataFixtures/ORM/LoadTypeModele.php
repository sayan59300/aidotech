<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\TypeModele;

class LoadTypeModele extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    $types = [
        ['nom' => 'Ecran'],
        ['nom' => 'Desktop'],
        ['nom' => 'Mobile'],
        ['nom' => 'Laptop'],
        ['nom' => 'Server'],
    ];

    foreach ($types as $typ) {
      $type = new TypeModele();
      $type->setNom($typ['nom']);
      $manager->persist($type);
    }
    $manager->flush();
  }
  
  public function getOrder() {
    return 1;
  }

}
