<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $nbPlaceAssise;

    /**
     * @var string
     *
     * @ORM\Column(name="labelV", type="string", length=255)
     */
    private $labelV;


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
     * Set labelV
     *
     * @param string $labelV
     * @return Vehicule
     */
    public function setLabelV($labelV)
    {
        $this->labelV = $labelV;

        return $this;
    }

    /**
     * Get labelV
     *
     * @return string 
     */
    public function getLabelV()
    {
        return $this->labelV;
    }
}
