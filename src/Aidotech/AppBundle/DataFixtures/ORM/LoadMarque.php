<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\Marque;

class LoadMarque implements FixtureInterface {

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

}
