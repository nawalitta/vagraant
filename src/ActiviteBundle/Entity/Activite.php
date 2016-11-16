<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $dureeMax;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_min", type="integer")
     */
    private $dureeMin;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_enfants_max", type="integer")
     */
    private $nbEnfantsMax;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_enfants_min", type="integer")
     */
    private $nbEnfantsMin;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_transport", type="integer")
     */
    private $dureeTransport;

    /**
   * @ORM\ManyToOne(targetEntity="TypeActivite")
   * @ORM\JoinColumn(nullable=false)
   */
    private $typesActivite;

    /**
  * @ORM\OneToOne(targetEntity="ActiviteRealisee")
  * @ORM\JoinColumn(nullable=false)
  */
    private $ActiviteRealisee;
    
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
    public function setTypesActivite(\ActiviteBundle\Entity\TypeActivite $typesActivite)
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
}
