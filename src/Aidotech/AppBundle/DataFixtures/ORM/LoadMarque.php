<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\Marque;

class LoadMarque extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    $marques = [
        ['nom' => 'HP'],
        ['nom' => 'Asus'],
        ['nom' => 'Apple'],
        ['nom' => 'Samsung'],
        ['nom' => 'Toshiba'],
    ];

    foreach ($marques as $mark) {
      $marque = new Marque();
      $marque->setNom($mark['nom']);
      $manager->persist($marque);
    }
    $manager->flush();
  }
  
  public function getOrder() {
    return 1;
  }

}
