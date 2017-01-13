<?php

namespace RessourceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\groupeRepository")
 */
class Groupe
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

        /**
     * @ORM\OneToMany(targetEntity="Enfant", mappedBy="groupe")
     */
    private $enfants;
    
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
     * Set designation
     *
     * @param string $designation
     *
     * @return groupe
     */
    public function setLabelG($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getLabelG()
    {
        return $this->designation;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Groupe
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfants = new ArrayCollection();
    }

    /**
     * Add enfant
     *
     * @param Enfant $enfant
     *
     * @return Groupe
     */
    public function addEnfant(Enfant $enfant)
    {
        $this->enfants[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param Enfant $enfant
     */
    public function removeEnfant(Enfant $enfant)
    {
        $this->enfants->removeElement($enfant);
    }

    /**
     * Get enfants
     *
     * @return Collection
     */
    public function getEnfants()
    {
        return $this->enfants;
    }

    public function __toString()
    {
        return $this->designation;
    }
}
