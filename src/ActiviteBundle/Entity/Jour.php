<?php

namespace ActiviteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * jour
 *
 * @ORM\Table(name="Jour")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\JourRepository")
 */
class Jour
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="parite", type="integer")
     */
    private $parite;

    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteRealisee", mappedBy="jour",cascade={"persist"})
     */
    private $activitesRealisees;
    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteFixee", mappedBy="jour",cascade={"persist"})
     */
    private $activitesFixees;
    
    /**
     * @ORM\OneToMany(targetEntity="CalendarBundle\Entity\EventEntity", mappedBy="jour",cascade={"persist"})
     */
    private $evenements;

    /**
     * Get id
     *
     * @return integer
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
     * @return jour
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
     * Set parite
     *
     * @param integer $parite
     *
     * @return jour
     */
    public function setParite($parite)
    {
        $this->parite = $parite;
    
        return $this;
    }

    /**
     * Get parite
     *
     * @return integer
     */
    public function getParite()
    {
        return $this->parite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activitesrealisees = new ArrayCollection();
        $this->activitesfixees = new ArrayCollection();
    }
    
    /**
     * Add activitesrealisee
     *
     * @param ActiviteRealisee $activitesrealisee
     *
     * @return Jour
     */
    public function addActivitesrealisee(ActiviteRealisee $activitesrealisee)
    {
        $this->activitesrealisees[] = $activitesrealisee;

        return $this;
    }

    /**
     * Remove activitesrealisee
     *
     * @param ActiviteRealisee $activitesrealisee
     */
    public function removeActivitesrealisee(ActiviteRealisee $activitesrealisee)
    {
        $this->activitesrealisees->removeElement($activitesrealisee);
    }

    /**
     * Get activitesrealisees
     *
     * @return ArrayCollection
     */
    public function getActivitesrealisees()
    {
        return $this->activitesrealisees;
    }

    /**
     * Add activitesfixee
     *
     * @param ActiviteFixee $activitesfixee
     *
     * @return Jour
     */
    public function addActivitesfixee(ActiviteFixee $activitesfixee)
    {
        $this->activitesfixees[] = $activitesfixee;

        return $this;
    }

    /**
     * Remove activitesfixee
     *
     * @param ActiviteFixee $activitesfixee
     */
    public function removeActivitesfixee(ActiviteFixee $activitesfixee)
    {
        $this->activitesfixees->removeElement($activitesfixee);
    }

    /**
     * Get activitesfixees
     *
     * @return ArrayCollection
     */
    public function getActivitesfixees()
    {
        return $this->activitesfixees;
    }
    
    public function __toString()
    {
        return $this->designation." ".$this->parite;
    }

    /**
     * Add evenement
     *
     * @param \CalendarBundle\Entity\EventEntity $evenement
     *
     * @return Jour
     */
    public function addEvenement(\CalendarBundle\Entity\EventEntity $evenement)
    {
        $this->evenements[] = $evenement;

        return $this;
    }

    /**
     * Remove evenement
     *
     * @param \CalendarBundle\Entity\EventEntity $evenement
     */
    public function removeEvenement(\CalendarBundle\Entity\EventEntity $evenement)
    {
        $this->evenements->removeElement($evenement);
    }

    /**
     * Get evenements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvenements()
    {
        return $this->evenements;
    }
}
