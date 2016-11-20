<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preaffection
 *
 * @ORM\Table(name="preaffection")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\PreaffectionRepository")
 */
class Preaffection
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
   * @ORM\ManyToOne(targetEntity="Enfant",inversedBy="Preaffection")
   * @ORM\JoinColumn(nullable=false)
   */ 
    private $enfant;
    
    /**
   * @ORM\ManyToOne(targetEntity="ActiviteBundle\Entity\Activite",inversedBy="Preaffection")
   * @ORM\JoinColumn(nullable=false)
   */ 
    private $activite;
    
    /**
   * @ORM\ManyToOne(targetEntity="Ressource",inversedBy="Preaffection")
   * @ORM\JoinColumn(nullable=false)
   */ 
    private $ressource;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

