<?php

namespace RessourceBundle\Entity;

use ActiviteBundle\Entity\Activite;
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

    /**
     * Set enfant
     *
     * @param Enfant $enfant
     *
     * @return Preaffection
     */
    public function setEnfant(Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return Enfant
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set activite
     *
     * @param Activite $activite
     *
     * @return Preaffection
     */
    public function setActivite(Activite $activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set ressource
     *
     * @param Ressource $ressource
     *
     * @return Preaffection
     */
    public function setRessource(Ressource $ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return Ressource
     */
    public function getRessource()
    {
        return $this->ressource;
    }
}
