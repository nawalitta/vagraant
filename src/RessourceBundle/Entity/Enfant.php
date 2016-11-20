<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="FenetreHoraire",inversedBy="Enfant")
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $fenetreHoraire;
    
    /**
     * @ORM\ManyToOne(targetEntity="Groupe",inversedBy="Enfant")
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $groupe;
    
    /**
     * @ORM\ManyToMany(targetEntity="ActiviteBundle\Entity\Activite")
     */
    private $activitesOptionelles;
    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteFixee", mappedBy="Enfant")
     */
    private $activitesFixees;
    
     /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteRealisee", mappedBy="Enfant")
     */   
    private $activitesRealisees;
    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteObligatoire", mappedBy="Enfant")
     */
    private $activitesObligatoires;
    
    /**
     * @ORM\OneToMany(targetEntity="Preaffection", mappedBy="Enfant")
     */
    private $preaffection;

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
     * @param \DateTime $dateArrive
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
     * @return \DateTime
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
        $this->activitesFixees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activitesOptionelles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activitesObligatoires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->preaffection = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fenetreHoraire
     *
     * @param \RessourceBundle\Entity\FenetreHoraire $fenetreHoraire
     *
     * @return Enfant
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

    /**
     * Set groupe
     *
     * @param \RessourceBundle\Entity\Groupe $groupe
     *
     * @return Enfant
     */
    public function setGroupe(\RessourceBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \RessourceBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Add activitesFixee
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $activitesFixee
     *
     * @return Enfant
     */
    public function addActivitesFixee(\ActiviteBundle\Entity\ActiviteFixee $activitesFixee)
    {
        $this->activitesFixees[] = $activitesFixee;

        return $this;
    }

    /**
     * Remove activitesFixee
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $activitesFixee
     */
    public function removeActivitesFixee(\ActiviteBundle\Entity\ActiviteFixee $activitesFixee)
    {
        $this->activitesFixees->removeElement($activitesFixee);
    }

    /**
     * Get activitesFixees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivitesFixees()
    {
        return $this->activitesFixees;
    }

    /**
     * Add activitesOptionelle
     *
     * @param \ActiviteBundle\Entity\Activite $activitesOptionelle
     *
     * @return Enfant
     */
    public function addActivitesOptionelle(\ActiviteBundle\Entity\Activite $activitesOptionelle)
    {
        $this->activitesOptionelles[] = $activitesOptionelle;

        return $this;
    }

    /**
     * Remove activitesOptionelle
     *
     * @param \ActiviteBundle\Entity\Activite $activitesOptionelle
     */
    public function removeActivitesOptionelle(\ActiviteBundle\Entity\Activite $activitesOptionelle)
    {
        $this->activitesOptionelles->removeElement($activitesOptionelle);
    }

    /**
     * Get activitesOptionelles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivitesOptionelles()
    {
        return $this->activitesOptionelles;
    }

    /**
     * Add activitesObligatoire
     *
     * @param \ActiviteBundle\Entity\ActiviteObligatoire $activitesObligatoire
     *
     * @return Enfant
     */
    public function addActivitesObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $activitesObligatoire)
    {
        $this->activitesObligatoires[] = $activitesObligatoire;

        return $this;
    }

    /**
     * Remove activitesObligatoire
     *
     * @param \ActiviteBundle\Entity\ActiviteObligatoire $activitesObligatoire
     */
    public function removeActivitesObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $activitesObligatoire)
    {
        $this->activitesObligatoires->removeElement($activitesObligatoire);
    }

    /**
     * Get activitesObligatoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivitesObligatoires()
    {
        return $this->activitesObligatoires;
    }

    /**
     * Add preaffection
     *
     * @param \RessourceBundle\Entity\Preaffection $preaffection
     *
     * @return Enfant
     */
    public function addPreaffection(\RessourceBundle\Entity\Preaffection $preaffection)
    {
        $this->preaffection[] = $preaffection;

        return $this;
    }

    /**
     * Remove preaffection
     *
     * @param \RessourceBundle\Entity\Preaffection $preaffection
     */
    public function removePreaffection(\RessourceBundle\Entity\Preaffection $preaffection)
    {
        $this->preaffection->removeElement($preaffection);
    }

    /**
     * Get preaffection
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPreaffection()
    {
        return $this->preaffection;
    }

    /**
     * Add activitesRealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee
     *
     * @return Enfant
     */
    public function addActivitesRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee)
    {
        $this->activitesRealisees[] = $activitesRealisee;

        return $this;
    }

    /**
     * Remove activitesRealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee
     */
    public function removeActivitesRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee)
    {
        $this->activitesRealisees->removeElement($activitesRealisee);
    }

    /**
     * Get activitesRealisees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivitesRealisees()
    {
        return $this->activitesRealisees;
    }
}
