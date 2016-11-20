<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeRessource
 *
 * @ORM\Table(name="type_ressource")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\TypeRessourceRepository")
 */
class TypeRessource
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
   * @ORM\OneToMany(targetEntity="BesoinTypeRessource", mappedBy="TypeRessource")
   */
    private $besoinsTypeRessources;
    
    /**
   * @ORM\OneToMany(targetEntity="Ressource", mappedBy="TypeRessource")
   */
    private $ressources;

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
     * @return TypeRessource
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
        $this->besoinsTypeRessources = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ressources = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add besoinsTypeRessource
     *
     * @param \RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource
     *
     * @return TypeRessource
     */
    public function addBesoinsTypeRessource(\RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource)
    {
        $this->besoinsTypeRessources[] = $besoinsTypeRessource;

        return $this;
    }

    /**
     * Remove besoinsTypeRessource
     *
     * @param \RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource
     */
    public function removeBesoinsTypeRessource(\RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource)
    {
        $this->besoinsTypeRessources->removeElement($besoinsTypeRessource);
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

    /**
     * Add ressource
     *
     * @param \RessourceBundle\Entity\Ressource $ressource
     *
     * @return TypeRessource
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
}
