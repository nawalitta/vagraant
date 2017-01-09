<?php

namespace RessourceBundle\Entity;

use ActiviteBundle\Entity\ActiviteRealisee;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\ManyToMany(targetEntity="ActiviteBundle\Entity\ActiviteRealisee", inversedBy="ressources")
     * @ORM\JoinTable(name="ressource_affectee",
     *      joinColumns={@ORM\JoinColumn(name="ressource_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="activite_realisee_id", referencedColumnName="id")}
     *      )
     */
    private $activiteesRealisees;

    /**
     * @ORM\ManyToOne(targetEntity="FenetreHoraire", inversedBy="ressources")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fenetreHoraire;

    /**
     * @ORM\ManyToOne(targetEntity="TypeRessource", inversedBy="ressources")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeRessource;

    /**
     * @ORM\OneToMany(targetEntity="Preaffection", mappedBy="ressource")
     */
    private $preAffections;


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
        $this->activiteesRealisees = new ArrayCollection();
    }

    /**
     * Add activiteesRealisee
     *
     * @param ActiviteRealisee $activiteesRealisee
     *
     * @return Ressource
     */
    public function addActiviteesRealisee(ActiviteRealisee $activiteesRealisee)
    {
        $this->activiteesRealisees[] = $activiteesRealisee;

        return $this;
    }

    /**
     * Remove activiteesRealisee
     *
     * @param ActiviteRealisee $activiteesRealisee
     */
    public function removeActiviteesRealisee(ActiviteRealisee $activiteesRealisee)
    {
        $this->activiteesRealisees->removeElement($activiteesRealisee);
    }

    /**
     * Get activiteesRealisees
     *
     * @return ArrayCollection
     */
    public function getActiviteesRealisees()
    {
        return $this->activiteesRealisees;
    }

    /**
     * Set fenetreHoraire
     *
     * @param FenetreHoraire $fenetreHoraire
     *
     * @return Ressource
     */
    public function setFenetreHoraire(FenetreHoraire $fenetreHoraire)
    {
        $this->fenetreHoraire = $fenetreHoraire;

        return $this;
    }

    /**
     * Get fenetreHoraire
     *
     * @return FenetreHoraire
     */
    public function getFenetreHoraire()
    {
        return $this->fenetreHoraire;
    }

    /**
     * Set typeRessource
     *
     * @param TypeRessource $typeRessource
     *
     * @return Ressource
     */
    public function setTypeRessource(TypeRessource $typeRessource)
    {
        $this->typeRessource = $typeRessource;

        return $this;
    }

    /**
     * Get typeRessource
     *
     * @return TypeRessource
     */
    public function getTypeRessource()
    {
        return $this->typeRessource;
    }

    /**
     * Add preaffection
     *
     * @param Preaffection $preaffection
     *
     * @return Ressource
     */
    public function addPreaffection(Preaffection $preaffection)
    {
        $this->preaffection[] = $preaffection;

        return $this;
    }

    /**
     * Remove preaffection
     *
     * @param Preaffection $preaffection
     */
    public function removePreaffection(Preaffection $preaffection)
    {
        $this->preaffection->removeElement($preaffection);
    }

    /**
     * Get preaffection
     *
     * @return ArrayCollection
     */
    public function getPreaffection()
    {
        return $this->preaffection;
    }

    public function __toString()
    {
        return $this->designation;
    }

    /**
     * Get preaffections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPreAffections()
    {
        return $this->preAffections;
    }
}
