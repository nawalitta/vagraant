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
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;


    /**
 * @ORM\OneToMany(targetEntity="Activite", mappedBy="TypeActivite")
 */
public $activites;
    
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
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activites
     *
     * @param \ActiviteBundle\Entity\Activite $activites
     * @return TypeActivite
     */
    public function addActivite(\ActiviteBundle\Entity\Activite $activites)
    {
        $this->activites[] = $activites;

        return $this;
    }

    /**
     * Remove activites
     *
     * @param \ActiviteBundle\Entity\Activite $activites
     */
    public function removeActivite(\ActiviteBundle\Entity\Activite $activites)
    {
        $this->activites->removeElement($activites);
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivites()
    {
        return $this->activites;
    }
    public function __toString() {
        return $this->designation;
    }
}
