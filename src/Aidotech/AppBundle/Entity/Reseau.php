<?php

namespace Aidotech\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * reseau
 *
 * @ORM\Table(name="reseau")
 * @ORM\Entity(repositoryClass="Aidotech\AppBundle\Repository\ReseauRepository")
 */
class Reseau
{
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
     * @var int
     * 
     * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\TypeReseau")
     * @JoinColumn(nullable=false)
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return reseau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set type
     *
     * @param \Aidotech\AppBundle\Entity\TypeReseau $type
     *
     * @return Reseau
     */
    public function setType(\Aidotech\AppBundle\Entity\TypeReseau $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Aidotech\AppBundle\Entity\TypeReseau
     */
    public function getType()
    {
        return $this->type;
    }
}
