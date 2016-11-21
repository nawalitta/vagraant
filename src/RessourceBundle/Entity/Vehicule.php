<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @var int
     *
     * @ORM\Column(name="nbPlaceAssise", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $nbPlaceAssise;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;


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
     * Set nbPlaceAssise
     *
     * @param integer $nbPlaceAssise
     * @return Vehicule
     */
    public function setNbPlaceAssise($nbPlaceAssise)
    {
        $this->nbPlaceAssise = $nbPlaceAssise;

        return $this;
    }

    /**
     * Get nbPlaceAssise
     *
     * @return integer 
     */
    public function getNbPlaceAssise()
    {
        return $this->nbPlaceAssise;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Vehicule
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
    
    public function __toString() {
        return $this->labelV;
    }
}
