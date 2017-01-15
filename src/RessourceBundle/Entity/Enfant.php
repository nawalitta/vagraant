<?php

namespace RessourceBundle\Entity;

use ActiviteBundle\Entity\Activite;
use ActiviteBundle\Entity\ActiviteFixee;
use ActiviteBundle\Entity\ActiviteObligatoire;
use ActiviteBundle\Entity\ActiviteRealisee;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\EnfantRepository")
 */
class Enfant
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="estArchive", type="string", length=255)
     */
    private $estArchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrive", type="date")
     */
    private $dateArrive;

    /**
     * @var int
     *
     * @ORM\Column(name="regime", type="integer")
     */
    private $regime;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @ORM\ManyToOne(targetEntity="FenetreHoraire",inversedBy="enfants")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fenetreHoraire;

    /**
     * @ORM\ManyToOne(targetEntity="Groupe",inversedBy="enfants" )
     * @ORM\JoinColumn(nullable=true)
     */
    private $groupe;

    /**
     * @ORM\ManyToMany(targetEntity="ActiviteBundle\Entity\Activite", inversedBy="enfantsOptionnels")
     * @ORM\JoinTable(name="activite_optionnelle",
     *      joinColumns={@ORM\JoinColumn(name="enfant_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="activite_id", referencedColumnName="id")}
     *      )
     */
    private $activitesOptionelles;

    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteFixee", mappedBy="enfant", cascade={"persist", "remove"} )
     */
    private $activitesFixees;

    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteRealisee", mappedBy="enfant" ,cascade={"persist", "remove"})
     */
    private $activitesRealisees;

    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteObligatoire", mappedBy="enfant" , cascade={"persist", "remove"})
     */
    private $activitesObligatoires;

    /**
     * @ORM\OneToMany(targetEntity="Preaffection", mappedBy="enfant", cascade={"persist", "remove"})
     */
    private $preAffections;
    
        /**
     * @ORM\OneToMany(targetEntity="CalendarBundle\Entity\EventEntity", mappedBy="enfant",cascade={"persist"})
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enfant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Enfant
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
     * Set estArchive
     *
     * @param string $estArchive
     *
     * @return Enfant
     */
    public function setEstArchive($estArchive)
    {
        $this->estArchive = $estArchive;

        return $this;
    }

    /**
     * Get estArchive
     *
     * @return string
     */
    public function getEstArchive()
    {
        return $this->estArchive;
    }

    /**
     * Set dateArrive
     *
     * @param  DateTime $dateArrive
     *
     * @return Enfant
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set regime
     *
     * @param integer $regime
     *
     * @return Enfant
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return integer
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Enfant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activitesFixees = new ArrayCollection();
        $this->activitesOptionelles = new ArrayCollection();
        $this->activitesObligatoires = new ArrayCollection();
        $this->preaffection = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    /**
     * Set fenetreHoraire
     *
     * @param FenetreHoraire $fenetreHoraire
     *
     * @return Enfant
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
     * Set groupe
     *
     * @param Groupe $groupe
     *
     * @return Enfant
     */
    public function setGroupe(Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Add activitesFixee
     *
     * @param ActiviteFixee $activitesFixee
     *
     * @return Enfant
     */
    public function addActivitesFixee(ActiviteFixee $activitesFixee)
    {
        $this->activitesFixees[] = $activitesFixee;

        return $this;
    }

    /**
     * Remove activitesFixee
     *
     * @param ActiviteFixee $activitesFixee
     */
    public function removeActivitesFixee(ActiviteFixee $activitesFixee)
    {
        $this->activitesFixees->removeElement($activitesFixee);
    }

    /**
     * Get activitesFixees
     *
     * @return ArrayCollection
     */
    public function getActivitesFixees()
    {
        return $this->activitesFixees;
    }

    /**
     * Add activitesOptionelle
     *
     * @param Activite $activitesOptionelle
     *
     * @return Enfant
     */
    public function addActivitesOptionelle(Activite $activitesOptionelle)
    {
        $this->activitesOptionelles[] = $activitesOptionelle;

        return $this;
    }

    /**
     * Remove activitesOptionelle
     *
     * @param Activite $activitesOptionelle
     */
    public function removeActivitesOptionelle(Activite $activitesOptionelle)
    {
        $this->activitesOptionelles->removeElement($activitesOptionelle);
    }

    /**
     * Get activitesOptionelles
     *
     * @return ArrayCollection
     */
    public function getActivitesOptionelles()
    {
        return $this->activitesOptionelles;
    }

    /**
     * Add activitesObligatoire
     *
     * @param ActiviteObligatoire $activitesObligatoire
     *
     * @return Enfant
     */
    public function addActivitesObligatoire(ActiviteObligatoire $activitesObligatoire)
    {
        $this->activitesObligatoires[] = $activitesObligatoire;

        return $this;
    }

    /**
     * Remove activitesObligatoire
     *
     * @param ActiviteObligatoire $activitesObligatoire
     */
    public function removeActivitesObligatoire(ActiviteObligatoire $activitesObligatoire)
    {
        $this->activitesObligatoires->removeElement($activitesObligatoire);
    }

    /**
     * Get activitesObligatoires
     *
     * @return ArrayCollection
     */
    public function getActivitesObligatoires()
    {
        return $this->activitesObligatoires;
    }

    /**
     * Add preaffection
     *
     * @param Preaffection $preaffection
     *
     * @return Enfant
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

    /**
     * Add activitesRealisee
     *
     * @param ActiviteRealisee $activitesRealisee
     *
     * @return Enfant
     */
    public function addActivitesRealisee(ActiviteRealisee $activitesRealisee)
    {
        $this->activitesRealisees[] = $activitesRealisee;

        return $this;
    }

    /**
     * Remove activitesRealisee
     *
     * @param ActiviteRealisee $activitesRealisee
     */
    public function removeActivitesRealisee(ActiviteRealisee $activitesRealisee)
    {
        $this->activitesRealisees->removeElement($activitesRealisee);
    }

    /**
     * Get activitesRealisees
     *
     * @return ArrayCollection
     */
    public function getActivitesRealisees()
    {
        return $this->activitesRealisees;
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

    /**
     * Add evenement
     *
     * @param \CalendarBundle\Entity\EventEntity $evenement
     *
     * @return Enfant
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
