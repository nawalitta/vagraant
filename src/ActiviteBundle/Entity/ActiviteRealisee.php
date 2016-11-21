<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ActiviteRealisee
 *
 * @ORM\Table(name="activite_realisee")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\ActiviteRealiseeRepository")
 */
class ActiviteRealisee
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
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebut", type="time")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFin", type="time")
     */
    private $heureFin;

   /**
   * @ORM\OneToOne(targetEntity="Activite")
   */
   public $activite;


   /**
   * @ORM\ManyToMany(targetEntity="RessourceBundle\Entity\Ressource")
   */
  private $ressources; 
   
    
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
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return ActiviteRealisee
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return ActiviteRealisee
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ressources = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        
        return $this->activite->getDesignation();
    }
    /**
     * Set activite
     *
     * @param \ActiviteBundle\Entity\Activite $activite
     *
     * @return ActiviteRealisee
     */
    public function setActivite(\ActiviteBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \ActiviteBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Add ressource
     *
     * @param \RessourceBundle\Entity\Ressource $ressource
     *
     * @return ActiviteRealisee
     */
    public function addRessource(\RessourceBundle\Entity\Ressource $ressource)
    {
        $this->ressources[] = $ressource;

        return $this;
    }

    /**
     * Remove ressource
     *
     * @param \RessourceBundle\Entity\Ressource $ressource
     */
    public function removeRessource(\RessourceBundle\Entity\Ressource $ressource)
    {
        $this->ressources->removeElement($ressource);
    }

    /**
     * Get ressources
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRessources()
    {
        return $this->ressources;
    }
    
    
          /**
     * @Assert\IsTrue(message = "L'heure de début doit etre avant l'heure de fin")
     */
    public function isValidHeure()
    {
        return ($this->heureDebut<=$this->heureFin);
    }
    
}
