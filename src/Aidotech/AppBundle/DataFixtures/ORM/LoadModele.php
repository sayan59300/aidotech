<?php

namespace Aidotech\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aidotech\AppBundle\Entity\Modele;

class LoadModele extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    
    $marques = $manager->getRepository('AidotechAppBundle:Marque')->findAll();
    $types = $manager->getRepository('AidotechAppBundle:TypeModele')->findAll();
    
    $modeles = [
        [
            'nom' => 'DC456', 
            'marque' => $marques[0],
            'type'   => $types[0]
        ],
        [
            'nom' => 'A234', 
            'marque' => $marques[1],
            'type'   => $types[1]
        ],
        [
            'nom' => 'GH890', 
            'marque' => $marques[2],
            'type'   => $types[2]
        ],
        [
            'nom' => 'S2', 
            'marque' => $marques[3],
            'type'   => $types[3]
        ],
        [
            'nom' => 'SDR45', 
            'marque' => $marques[4],
            'type'   => $types[4]
        ],
    ];

    foreach ($modeles as $model) {
      $modele = new Modele();
      $modele->setNom($model['nom'])
          ->setMarque($model['marque'])
          ->setType($model['type']);
      $manager->persist($modele);
    }
    $manager->flush();
  }
  
  public function getOrder() {
    return 2;
  }

}
