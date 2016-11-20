<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preaffection
 *
 * @ORM\Table(name="preaffection")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\PreaffectionRepository")
 */
class Preaffection
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
     * @ORM\ManyToOne(targetEntity="Enfant",inversedBy="Preaffection")
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $enfant;
    
    /**
     * @ORM\ManyToOne(targetEntity="ActiviteBundle\Entity\Activite",inversedBy="Preaffection")
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $activite;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ressource",inversedBy="Preaffection")
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $ressource;


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
     * Set enfant
     *
     * @param \RessourceBundle\Entity\Enfant $enfant
     *
     * @return Preaffection
     */
    public function setEnfant(\RessourceBundle\Entity\Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return \RessourceBundle\Entity\Enfant
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set activite
     *
     * @param \ActiviteBundle\Entity\Activite $activite
     *
     * @return Preaffection
     */
    public function setActivite(\ActiviteBundle\Entity\Activite $activite)
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
     * Set ressource
     *
     * @param \RessourceBundle\Entity\Ressource $ressource
     *
     * @return Preaffection
     */
    public function setRessource(\RessourceBundle\Entity\Ressource $ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return \RessourceBundle\Entity\Ressource
     */
    public function getRessource()
    {
        return $this->ressource;
    }
}
