<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\Reseau;

class LoadReseau extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    
    $types = $manager->getRepository('AidotechAppBundle:TypeReseau')->findAll();
    
    $reseaux = [
        [
            'nom' => 'Valenciennes Lan 1', 
            'type'   => $types[0]
        ],
        [
            'nom' => 'Valenciennes Internet 1',
            'type'   => $types[1]
        ],
        [
            'nom' => 'Valenciennes Intranet 1',
            'type'   => $types[2]
        ],
        [
            'nom' => 'Valenciennes VPN 1',
            'type'   => $types[3]
        ],
        [
            'nom' => 'Valenciennes Intranet 2',
            'type'   => $types[2]
        ],
    ];

    foreach ($reseaux as $res) {
      $reseau = new Reseau();
      $reseau->setNom($res['nom'])
          ->setType($res['type']);
      $manager->persist($reseau);
    }
    $manager->flush();
  }
  
  public function getOrder() {
    return 2;
  }

}
