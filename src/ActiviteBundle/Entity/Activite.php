<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ActiviteBundle\Entity\TypeActivite;

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
     * @return activites
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
     * @return activites
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
     * @return activites
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
     * @return activites
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
     * @return activites
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
     * @return Activites
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
     * @param \ActiviteBundle\Entity\TypeActivite $typesActivite
     * @return Activites
     */
    public function setTypesActivite($typesActivite)
    {
        $this->typesActivite = $typesActivite;

        return $this;
    }

    /**
     * Get typesActivite
     *
     * @return \ActiviteBundle\Entity\TypeActivite 
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
     * @param \ActiviteBundle\Entity\ActiviteRealisee $activiteRealisee
     *
     * @return Activite
     */
    public function setActiviteRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activiteRealisee)
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
        $this->enfantsOptionnel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->preaffection = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enfantObligatoires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->horairefixe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->besoinsTypeRessource = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fenetreHoraire
     *
     * @param \RessourceBundle\Entity\FenetreHoraire $fenetreHoraire
     *
     * @return Activite
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
     * Add enfantsOptionnel
     *
     * @param \RessourceBundle\Entity\Enfant $enfantsOptionnel
     *
     * @return Activite
     */
    public function addEnfantsOptionnel(\RessourceBundle\Entity\Enfant $enfantsOptionnel)
    {
        $this->enfantsOptionnel[] = $enfantsOptionnel;

        return $this;
    }

    /**
     * Remove enfantsOptionnel
     *
     * @param \RessourceBundle\Entity\Enfant $enfantsOptionnel
     */
    public function removeEnfantsOptionnel(\RessourceBundle\Entity\Enfant $enfantsOptionnel)
    {
        $this->enfantsOptionnel->removeElement($enfantsOptionnel);
    }

    /**
     * Get enfantsOptionnel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfantsOptionnel()
    {
        return $this->enfantsOptionnel;
    }

    /**
     * Add preaffection
     *
     * @param \RessourceBundle\Entity\Preaffection $preaffection
     *
     * @return Activite
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
     * Add enfantObligatoire
     *
     * @param \ActiviteBundle\Entity\ActiviteObligatoire $enfantObligatoire
     *
     * @return Activite
     */
    public function addEnfantObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantObligatoire)
    {
        $this->enfantObligatoires[] = $enfantObligatoire;

        return $this;
    }

    /**
     * Remove enfantObligatoire
     *
     * @param \ActiviteBundle\Entity\ActiviteObligatoire $enfantObligatoire
     */
    public function removeEnfantObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantObligatoire)
    {
        $this->enfantObligatoires->removeElement($enfantObligatoire);
    }

    /**
     * Get enfantObligatoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfantObligatoires()
    {
        return $this->enfantObligatoires;
    }

    /**
     * Add horairefixe
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $horairefixe
     *
     * @return Activite
     */
    public function addHorairefixe(\ActiviteBundle\Entity\ActiviteFixee $horairefixe)
    {
        $this->horairefixe[] = $horairefixe;

        return $this;
    }

    /**
     * Remove horairefixe
     *
     * @param \ActiviteBundle\Entity\ActiviteFixee $horairefixe
     */
    public function removeHorairefixe(\ActiviteBundle\Entity\ActiviteFixee $horairefixe)
    {
        $this->horairefixe->removeElement($horairefixe);
    }

    /**
     * Get horairefixe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHorairefixe()
    {
        return $this->horairefixe;
    }

    /**
     * Add besoinsTypeRessource
     *
     * @param \RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource
     *
     * @return Activite
     */
    public function addBesoinsTypeRessource(\RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource)
    {
        $this->besoinsTypeRessource[] = $besoinsTypeRessource;

        return $this;
    }

    /**
     * Remove besoinsTypeRessource
     *
     * @param \RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource
     */
    public function removeBesoinsTypeRessource(\RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource)
    {
        $this->besoinsTypeRessource->removeElement($besoinsTypeRessource);
    }

    /**
     * Get besoinsTypeRessource
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBesoinsTypeRessource()
    {
        return $this->besoinsTypeRessource;
    }
}
