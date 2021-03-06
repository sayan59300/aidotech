<?php

namespace Aidotech\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Panne
 *
 * @ORM\Table(name="panne")
 * @ORM\Entity(repositoryClass="Aidotech\AppBundle\Repository\PanneRepository")
 */
class Panne {

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
   * @ORM\Column(name="titre", type="string", length=255)
   */
  private $titre;

  /**
   * @var string
   *
   * @ORM\Column(name="description", type="string", length=255)
   */
  private $description;

  /**
   * @var int
   * @ManyToOne(targetEntity="Aidotech\UserBundle\Entity\User")
   * @JoinColumn(nullable=false)
   */
  private $user;

  /**
   * @var int
   * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\Application")
   * @JoinColumn(nullable=true)
   */
  private $application;

  /**
   * @var int
   * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\SystemeExploitation")
   * @JoinColumn(nullable=true)
   */
  private $systemeExploitation;

  /**
   * @var int
   * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\Modele")
   * @JoinColumn(nullable=true)
   */
  private $modele;

  /**
   * @var int
   * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\Reseau")
   * @JoinColumn(nullable=true)
   */
  private $reseau;

  /**
   * @var string
   *
   * @ORM\Column(name="solution", type="string", length=255)
   */
  private $solution;

  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set titre
   *
   * @param string $titre
   *
   * @return Panne
   */
  public function setTitre($titre) {
    $this->titre = $titre;

    return $this;
  }

  /**
   * Get titre
   *
   * @return string
   */
  public function getTitre() {
    return $this->titre;
  }

  /**
   * Set description
   *
   * @param string $description
   *
   * @return Panne
   */
  public function setDescription($description) {
    $this->description = $description;

    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * Set user
   *
   * @param \Aidotech\UserBundle\Entity\User $user
   *
   * @return Panne
   */
  public function setUser(\Aidotech\UserBundle\Entity\User $user) {
    $this->user = $user;

    return $this;
  }

  /**
   * Get user
   *
   * @return \Aidotech\UserBundle\Entity\User
   */
  public function getUser() {
    return $this->user;
  }

  /**
   * Set application
   *
   * @param \Aidotech\AppBundle\Entity\Application $application
   *
   * @return Panne
   */
  public function setApplication(\Aidotech\AppBundle\Entity\Application $application = null) {
    $this->application = $application;

    return $this;
  }

  /**
   * Get application
   *
   * @return \Aidotech\AppBundle\Entity\Application
   */
  public function getApplication() {
    return $this->application;
  }

  /**
   * Set systemeExploitation
   *
   * @param \Aidotech\AppBundle\Entity\SystemeExploitation $systemeExploitation
   *
   * @return Panne
   */
  public function setSystemeExploitation(\Aidotech\AppBundle\Entity\SystemeExploitation $systemeExploitation = null) {
    $this->systemeExploitation = $systemeExploitation;

    return $this;
  }

  /**
   * Get systemeExploitation
   *
   * @return \Aidotech\AppBundle\Entity\SystemeExploitation
   */
  public function getSystemeExploitation() {
    return $this->systemeExploitation;
  }

  /**
   * Set modele
   *
   * @param \Aidotech\AppBundle\Entity\Modele $modele
   *
   * @return Panne
   */
  public function setModele(\Aidotech\AppBundle\Entity\Modele $modele = null) {
    $this->modele = $modele;

    return $this;
  }

  /**
   * Get modele
   *
   * @return \Aidotech\AppBundle\Entity\Modele
   */
  public function getModele() {
    return $this->modele;
  }

  /**
   * Set reseau
   *
   * @param \Aidotech\AppBundle\Entity\Reseau $reseau
   *
   * @return Panne
   */
  public function setReseau(\Aidotech\AppBundle\Entity\Reseau $reseau = null) {
    $this->reseau = $reseau;

    return $this;
  }

  /**
   * Get reseau
   *
   * @return \Aidotech\AppBundle\Entity\Reseau
   */
  public function getReseau() {
    return $this->reseau;
  }

  /**
   * Set solution
   *
   * @param string $solution
   *
   * @return Panne
   */
  public function setSolution($solution) {
    $this->solution = $solution;

    return $this;
  }

  /**
   * Get solution
   *
   * @return string
   */
  public function getSolution() {
    return $this->solution;
  }

}
