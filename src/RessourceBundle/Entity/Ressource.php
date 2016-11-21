<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\RessourceRepository")
 */
class Ressource
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
   * @ORM\ManyToMany(targetEntity="ActiviteBundle\Entity\ActiviteRealisee")
   */
  private $activiteesRealisees;
    
  /**
   * @ORM\ManyToOne(targetEntity="FenetreHoraire",inversedBy="Ressource")
   * @ORM\JoinColumn(nullable=false)
   */
  private $fenetreHoraire;
  
  
  
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
     * @return Ressource
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
        $this->activiteesRealisees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activiteesRealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activiteesRealisee
     *
     * @return Ressource
     */
    public function addActiviteesRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activiteesRealisee)
    {
        $this->activiteesRealisees[] = $activiteesRealisee;

        return $this;
    }

    /**
     * Remove activiteesRealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activiteesRealisee
     */
    public function removeActiviteesRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activiteesRealisee)
    {
        $this->activiteesRealisees->removeElement($activiteesRealisee);
    }

    /**
     * Get activiteesRealisees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActiviteesRealisees()
    {
        return $this->activiteesRealisees;
    }

    /**
     * Set fenetreHoraire
     *
     * @param \RessourceBundle\Entity\FenetreHoraire $fenetreHoraire
     *
     * @return Ressource
     */
    public function setFenetreHoraire(\RessourceBundle\Entity\FenetreHoraire $fenetreHoraire)
    {
        $this->fenetreHoraire = $fenetreHoraire;

        return $this;
    }

    /**
     * Get fenetreHoraire
     *
     * @return \RessourceBundle\Entity\FenetreHoraire
     */
    public function getFenetreHoraire()
    {
        return $this->fenetreHoraire;
    }
    
    public function __toString() {
        return $this->designation;
    }
}
