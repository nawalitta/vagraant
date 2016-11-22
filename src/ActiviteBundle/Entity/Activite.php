<?php

namespace ActiviteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use RessourceBundle\Entity\BesoinTypeRessource;
use RessourceBundle\Entity\Enfant;
use RessourceBundle\Entity\FenetreHoraire;
use RessourceBundle\Entity\Preaffection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * activite
 *
 * @ORM\Table(name="Activite")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\ActiviteRepository")
 */
class Activite
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
     * @ORM\Column(name="duree_min", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $dureeMin;
    
    /**
     * @var int
     *
     * @ORM\Column(name="duree_max", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $dureeMax;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_enfants_min", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $nbEnfantsMin;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_enfants_max", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $nbEnfantsMax;


    /**
     * @var int
     *
     * @ORM\Column(name="duree_transport", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $dureeTransport;

    /**
   * @ORM\ManyToOne(targetEntity="ActiviteBundle\Entity\TypeActivite",inversedBy="activites")
   * @ORM\JoinColumn(nullable=false)
   */
    private $typeActivite;

    /**
     * @ORM\ManyToOne(targetEntity="RessourceBundle\Entity\FenetreHoraire",inversedBy="activites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fenetreHoraire;

    /**
     * @ORM\ManyToMany(targetEntity="RessourceBundle\Entity\Enfant")
     */
    private $enfantsOptionnel;

    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\ActiviteRealisee", mappedBy="activite")
     */
    private $activitesRealisees;


    /**
     * @ORM\OneToMany(targetEntity="RessourceBundle\Entity\Preaffection", mappedBy="activite")
     */
    private $preaffections;


    /**
     * @ORM\OneToMany(targetEntity="ActiviteObligatoire", mappedBy="activite")
     */
    private $enfantsObligatoires;


    /**
     * @ORM\OneToMany(targetEntity="ActiviteFixee", mappedBy="activite")
     */
    private $horairesfixes;

    /**
     * @ORM\OneToMany(targetEntity="RessourceBundle\Entity\BesoinTypeRessource", mappedBy="activite")
     */
    private $besoinsTypeRessources;

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
     * Set dureeMax
     *
     * @param integer $dureeMax
     *
     * @return Activite
     */
    public function setDureeMax($dureeMax)
    {
        $this->dureeMax = $dureeMax;
    
        return $this;
    }

    /**
     * Get dureeMax
     *
     * @return integer
     */
    public function getDureeMax()
    {
        return $this->dureeMax;
    }

    /**
     * Set dureeMin
     *
     * @param string $dureeMin
     *
     * @return Activite
     */
    public function setDureeMin($dureeMin)
    {
        $this->dureeMin = $dureeMin;
    
        return $this;
    }

    /**
     * Get dureeMin
     *
     * @return string
     */
    public function getDureeMin()
    {
        return $this->dureeMin;
    }

    /**
     * Set nbEnfantsMax
     *
     * @param integer $nbEnfantsMax
     *
     * @return Activite
     */
    public function setNbEnfantsMax($nbEnfantsMax)
    {
        $this->nbEnfantsMax = $nbEnfantsMax;
    
        return $this;
    }

    /**
     * Get nbEnfantsMax
     *
     * @return integer
     */
    public function getNbEnfantsMax()
    {
        return $this->nbEnfantsMax;
    }

    /**
     * Set nbEnfantsMin
     *
     * @param integer $nbEnfantsMin
     *
     * @return Activite
     */
    public function setNbEnfantsMin($nbEnfantsMin)
    {
        $this->nbEnfantsMin = $nbEnfantsMin;
    
        return $this;
    }

    /**
     * Get nbEnfantsMin
     *
     * @return integer
     */
    public function getNbEnfantsMin()
    {
        return $this->nbEnfantsMin;
    }

    /**
     * Set dureeTransport
     *
     * @param integer $dureeTransport
     *
     * @return Activite
     */
    public function setDureeTransport($dureeTransport)
    {
        $this->dureeTransport = $dureeTransport;
    
        return $this;
    }

    /**
     * Get dureeTransport
     *
     * @return integer
     */
    public function getDureeTransport()
    {
        return $this->dureeTransport;
    }
    


    /**
     * Set designation
     *
     * @param string $designation
     * @return Activite
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
     * Set typesActivite
     *
     * @param TypeActivite $typesActivite
     * @return Activite
     */
    public function setTypesActivite(TypeActivite $typesActivite)
    {
        $this->typesActivite = $typesActivite;

        return $this;
    }

    /**
     * Get typesActivite
     *
     * @return TypeActivite
     */
    public function getTypesActivite()
    {
        return $this->typesActivite;
    }

    /**
     *
     * @Assert\isTrue(message =" La durée maximum doit être superieur à la durée minimum")
     */
    public function isDureeValid(){

        return $this->dureeMax >= $this->dureeMin;
    }

        /**
     *
     * @Assert\isTrue(message =" Le nombre d'enfants maximum doit être superieur au nombre d'enfants minimum")
     */
    public function isNbEnfantValid(){

        return $this->nbEnfantsMax >= $this->nbEnfantsMin;
    }



    public function __toString()
    {
        return $this->designation;
    }



    /**
     * Set activiteRealisee
     *
     * @param ActiviteRealisee $activiteRealisee
     *
     * @return Activite
     */
    public function setActiviteRealisee(ActiviteRealisee $activiteRealisee)
    {
        $this->ActiviteRealisee = $activiteRealisee;

        return $this;
    }

    /**
     * Get activiteRealisee
     *
     * @return \ActiviteBundle\Entity\ActiviteRealisee
     */
    public function getActiviteRealisee()
    {
        return $this->ActiviteRealisee;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfantsOptionnel = new ArrayCollection();
        $this->preaffection = new ArrayCollection();
        $this->enfantObligatoires = new ArrayCollection();
        $this->horairefixe = new ArrayCollection();
        $this->besoinsTypeRessource = new ArrayCollection();
    }

    /**
     * Set fenetreHoraire
     *
     * @param FenetreHoraire $fenetreHoraire
     *
     * @return Activite
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
     * Add enfantsOptionnel
     *
     * @param Enfant $enfantsOptionnel
     *
     * @return Activite
     */
    public function addEnfantsOptionnel(Enfant $enfantsOptionnel)
    {
        $this->enfantsOptionnel[] = $enfantsOptionnel;

        return $this;
    }

    /**
     * Remove enfantsOptionnel
     *
     * @param Enfant $enfantsOptionnel
     */
    public function removeEnfantsOptionnel(Enfant $enfantsOptionnel)
    {
        $this->enfantsOptionnel->removeElement($enfantsOptionnel);
    }

    /**
     * Get enfantsOptionnel
     *
     * @return ArrayCollection
     */
    public function getEnfantsOptionnel()
    {
        return $this->enfantsOptionnel;
    }

    /**
     * Add preaffection
     *
     * @param Preaffection $preaffection
     *
     * @return Activite
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
     * Add enfantObligatoire
     *
     * @param ActiviteObligatoire $enfantObligatoire
     *
     * @return Activite
     */
    public function addEnfantObligatoire(ActiviteObligatoire $enfantObligatoire)
    {
        $this->enfantObligatoires[] = $enfantObligatoire;

        return $this;
    }

    /**
     * Remove enfantObligatoire
     *
     * @param ActiviteObligatoire $enfantObligatoire
     */
    public function removeEnfantObligatoire(ActiviteObligatoire $enfantObligatoire)
    {
        $this->enfantObligatoires->removeElement($enfantObligatoire);
    }

    /**
     * Get enfantObligatoires
     *
     * @return ArrayCollection
     */
    public function getEnfantObligatoires()
    {
        return $this->enfantObligatoires;
    }

    /**
     * Add horairefixe
     *
     * @param ActiviteFixee $horairefixe
     *
     * @return Activite
     */
    public function addHorairefixe(ActiviteFixee $horairefixe)
    {
        $this->horairefixe[] = $horairefixe;

        return $this;
    }

    /**
     * Remove horairefixe
     *
     * @param ActiviteFixee $horairefixe
     */
    public function removeHorairefixe(ActiviteFixee $horairefixe)
    {
        $this->horairefixe->removeElement($horairefixe);
    }

    /**
     * Get horairefixe
     *
     * @return ArrayCollection
     */
    public function getHorairefixe()
    {
        return $this->horairefixe;
    }

    /**
     * Add besoinsTypeRessource
     *
     * @param BesoinTypeRessource $besoinsTypeRessource
     *
     * @return Activite
     */
    public function addBesoinsTypeRessource(BesoinTypeRessource $besoinsTypeRessource)
    {
        $this->besoinsTypeRessource[] = $besoinsTypeRessource;

        return $this;
    }

    /**
     * Remove besoinsTypeRessource
     *
     * @param BesoinTypeRessource $besoinsTypeRessource
     */
    public function removeBesoinsTypeRessource(BesoinTypeRessource $besoinsTypeRessource)
    {
        $this->besoinsTypeRessource->removeElement($besoinsTypeRessource);
    }

    /**
     * Get besoinsTypeRessource
     *
     * @return ArrayCollection
     */
    public function getBesoinsTypeRessource()
    {
        return $this->besoinsTypeRessource;
    }

    /**
     * Set typeActivite
     *
     * @param \ActiviteBundle\Entity\TypeActivite $typeActivite
     *
     * @return Activite
     */
    public function setTypeActivite(\ActiviteBundle\Entity\TypeActivite $typeActivite)
    {
        $this->typeActivite = $typeActivite;

        return $this;
    }

    /**
     * Get typeActivite
     *
     * @return \ActiviteBundle\Entity\TypeActivite
     */
    public function getTypeActivite()
    {
        return $this->typeActivite;
    }

    /**
     * Add activitesRealisee
     *
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee
     *
     * @return Activite
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

    /**
     * Get preaffections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPreaffections()
    {
        return $this->preaffections;
    }

    /**
     * Add enfantsObligatoire
     *
     * @param \ActiviteBundle\Entity\ActiviteObligatoire $enfantsObligatoire
     *
     * @return Activite
     */
    public function addEnfantsObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantsObligatoire)
    {
        $this->enfantsObligatoires[] = $enfantsObligatoire;

        return $this;
    }

    /**
     * Remove enfantsObligatoire
     *
     * @param \ActiviteBundle\Entity\ActiviteObligatoire $enfantsObligatoire
     */
    public function removeEnfantsObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantsObligatoire)
    {
        $this->enfantsObligatoires->removeElement($enfantsObligatoire);
    }

    /**
     * Get enfantsObligatoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfantsObligatoires()
    {
        return $this->enfantsObligatoires;
    }

    /**
     * Add horairesfix
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $horairesfix
     *
     * @return Activite
     */
    public function addHorairesfix(\ActiviteBundle\Entity\ActiviteFixee $horairesfix)
    {
        $this->horairesfixes[] = $horairesfix;

        return $this;
    }

    /**
     * Remove horairesfix
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $horairesfix
     */
    public function removeHorairesfix(\ActiviteBundle\Entity\ActiviteFixee $horairesfix)
    {
        $this->horairesfixes->removeElement($horairesfix);
    }

    /**
     * Get horairesfixes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHorairesfixes()
    {
        return $this->horairesfixes;
    }

    /**
     * Get besoinsTypeRessources
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBesoinsTypeRessources()
    {
        return $this->besoinsTypeRessources;
    }
}
