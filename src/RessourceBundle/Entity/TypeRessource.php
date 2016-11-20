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
}
