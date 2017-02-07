<?php

namespace Aidotech\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Aidotech\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser {

  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  /**
   * @var type
   * @ORM\Column(name="telephone", type="string", length=255)
   * @Assert\Regex("/^(01|02|03|04|05|06|07|08|09)[0-9]{8}$/")
   */
  protected $telephone;

  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }


    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}
