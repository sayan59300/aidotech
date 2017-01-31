<?php

namespace Aidotech\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classe de contact
 */
class ContactForm {
  
  /**
   * nom
   * @var string
   * @Assert\NotBlank(message="Le champ nom ne peut pas être vide")
   * @Assert\Length(min=2,minMessage="Le message doit comporter au moins 2 caractères")
   */
  private $nom;
  
  /**
   * prenom
   * @var string
   * @Assert\NotBlank(message="Le champ prenom ne peut pas être vide")
   * @Assert\Length(min=2,minMessage="Le message doit comporter au moins 2 caractères")
   */
  private $prenom;
  
  /**
   * email
   * @var string
   * @Assert\NotBlank(message="Pour que nous puissions vous répondre, l'email ne peut pas être vide")
   * @Assert\Email(message="L'email est invalide")
   */
  private $email;
  
  /**
   * objet
   * @var string
   * @Assert\NotBlank(message="Un objet est nécessaire afin de pouvoir envoyer le message")
   * @Assert\Length(min=2,minMessage="Le message doit comporter au moins 2 caractères")
   */
  private $objet;
  
  /**
   * message
   * @var string
   * @Assert\NotBlank(message="Veuillez écrire votre message avant de l'envoyer (entre 10 et 500 caractères)")
   * @Assert\Length(min=10,max=500,
   * minMessage="Le message doit comporter au moins 10 caractères",
   * maxMessage="Le message doit comporter au maximum 500 caractères")
   */
  private $message;

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }
  
  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function getObjet() {
    return $this->objet;
  }

  public function setObjet($objet) {
    $this->objet = $objet;
  }
  
  public function getMessage() {
    return $this->message;
  }

  public function setMessage($message) {
    $this->message = $message;
  }

}
