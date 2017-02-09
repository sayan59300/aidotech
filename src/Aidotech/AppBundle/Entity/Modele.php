<?php

namespace Aidotech\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="Aidotech\AppBundle\Repository\ModeleRepository")
 */
class Modele {

  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="nom", type="string", length=255)
   */
  private $nom;

  /**
   * @var string
   * 
   * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\Marque")
   * @JoinColumn(nullable=false)
)   */
  private $marque;

  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set nom
   *
   * @param string $nom
   *
   * @return Modele
   */
  public function setNom($nom) {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Get nom
   *
   * @return string
   */
  public function getNom() {
    return $this->nom;
  }

  /**
   * Set marque
   *
   * @param string $marque
   *
   * @return Modele
   */
  public function setMarque($marque) {
    $this->marque = $marque;

    return $this;
  }

  /**
   * Get marque
   *
   * @return string
   */
  public function getMarque() {
    return $this->marque;
  }

}
