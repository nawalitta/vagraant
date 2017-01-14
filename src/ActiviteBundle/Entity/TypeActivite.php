<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * TypeActivite
 *
 * @ORM\Table(name="type_activite")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\TypeActiviteRepository")
 */
class TypeActivite
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
     * @var string designation
     *
     * @ORM\Column(name="designation", type="string", length=255, unique=true)
     */
    private $designation;
    
    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\Activite", mappedBy="typeActivite",cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */  
    private $activites;
    
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
     * Set designation
     *
     * @param string $designation
     * @return TypeActivite
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
        
    }
    public function __toString() {
        return $this->designation;
    }

    /**
     * Set activites
     *
     * @param Activite $activites
     *
     * @return TypeActivite
     */
    public function setActivites(Activite $activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return Activite
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Add activite
     *
     * @param \ActiviteBundle\Entity\Activite $activite
     *
     * @return TypeActivite
     */
    public function addActivite(\ActiviteBundle\Entity\Activite $activite)
    {
        $this->activites[] = $activite;

        return $this;
    }

    /**
     * Remove activite
     *
     * @param \ActiviteBundle\Entity\Activite $activite
     */
    public function removeActivite(\ActiviteBundle\Entity\Activite $activite)
    {
        $this->activites->removeElement($activite);
    }
}
