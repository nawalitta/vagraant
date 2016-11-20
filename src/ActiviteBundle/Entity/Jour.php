<?php

namespace ActiviteBundle\Entity;

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
     * @ORM\Column(name="labelJ", type="string", length=255)
     */
    private $labelJ;

    /**
     * @var int
     *
     * @ORM\Column(name="parite", type="integer")
     */
    private $parite;

    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteRealisee", mappedBy="Jour")
     */
    private $activitesrealisees;
    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteFixee", mappedBy="Jour")
     */
    private $activitesfixees;

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
     * Set labelJ
     *
     * @param string $labelJ
     *
     * @return jour
     */
    public function setLabelJ($labelJ)
    {
        $this->labelJ = $labelJ;
    
        return $this;
    }

    /**
     * Get labelJ
     *
     * @return string
     */
    public function getLabelJ()
    {
        return $this->labelJ;
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
        $this->activitesrealisees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activitesfixees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activitesrealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activitesrealisee
     *
     * @return Jour
     */
    public function addActivitesrealisee(\ActiviteBundle\Entity\ActiviteRealisee $activitesrealisee)
    {
        $this->activitesrealisees[] = $activitesrealisee;

        return $this;
    }

    /**
     * Remove activitesrealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activitesrealisee
     */
    public function removeActivitesrealisee(\ActiviteBundle\Entity\ActiviteRealisee $activitesrealisee)
    {
        $this->activitesrealisees->removeElement($activitesrealisee);
    }

    /**
     * Get activitesrealisees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivitesrealisees()
    {
        return $this->activitesrealisees;
    }

    /**
     * Add activitesfixee
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $activitesfixee
     *
     * @return Jour
     */
    public function addActivitesfixee(\ActiviteBundle\Entity\ActiviteFixee $activitesfixee)
    {
        $this->activitesfixees[] = $activitesfixee;

        return $this;
    }

    /**
     * Remove activitesfixee
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $activitesfixee
     */
    public function removeActivitesfixee(\ActiviteBundle\Entity\ActiviteFixee $activitesfixee)
    {
        $this->activitesfixees->removeElement($activitesfixee);
    }

    /**
     * Get activitesfixees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivitesfixees()
    {
        return $this->activitesfixees;
    }
}
