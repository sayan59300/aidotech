<?php

namespace Aidotech\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * solution
 *
 * @ORM\Table(name="solution")
 * @ORM\Entity(repositoryClass="Aidotech\AppBundle\Repository\SolutionRepository")
 */
class Solution
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    /**
     * @var type
     * 
     * @ManyToOne(targetEntity="Aidotech\AppBundle\Entity\Panne")
     * @JoinColumn(nullable=false)
     */
    private $panne;


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
     * Set description
     *
     * @param string $description
     *
     * @return solution
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set panne
     *
     * @param \Aidotech\AppBundle\Entity\Panne $panne
     *
     * @return Solution
     */
    public function setPanne(\Aidotech\AppBundle\Entity\Panne $panne)
    {
        $this->panne = $panne;

        return $this;
    }

    /**
     * Get panne
     *
     * @return \Aidotech\AppBundle\Entity\Panne
     */
    public function getPanne()
    {
        return $this->panne;
    }
}
