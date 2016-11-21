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
     * @ORM\Column(name="duree_max", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $dureeMax;

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
     * @ORM\Column(name="nb_enfants_max", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $nbEnfantsMax;

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
     * @ORM\Column(name="duree_transport", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $dureeTransport;

    /**
   * @ORM\ManyToOne(targetEntity="TypeActivite")
   * @ORM\JoinColumn(nullable=false)
   */
    private $typesActivite;

    /**
     * @ORM\ManyToOne(targetEntity="RessourceBundle\Entity\FenetreHoraire",inversedBy="Activite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fenetreHoraire;

    /**
     * @ORM\ManyToMany(targetEntity="RessourceBundle\Entity\Enfant")
     */
    private $enfantsOptionnel;

    /**
     * @ORM\OneToOne(targetEntity="ActiviteRealisee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ActiviteRealisee;


    /**
     * @ORM\OneToMany(targetEntity="RessourceBundle\Entity\Preaffection", mappedBy="Activite")
     */
    private $preaffection;


    /**
     * @ORM\OneToMany(targetEntity="ActiviteObligatoire", mappedBy="Activite")
     */
    private $enfantObligatoires;


    /**
     * @ORM\OneToMany(targetEntity="ActiviteFixee", mappedBy="Activite")
     */
    private $horairefixe;

    /**
     * @ORM\OneToMany(targetEntity="RessourceBundle\Entity\BesoinTypeRessource", mappedBy="Activite")
     */
    private $besoinsTypeRessource;

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
}
