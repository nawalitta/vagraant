<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BesoinTypeRessource
 *
 * @ORM\Table(name="besoin_type_ressource")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\BesoinTypeRessourceRepository")
 */
class BesoinTypeRessource
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
     * @ORM\Column(name="quantiteRessource", type="integer")
     */
    private $quantiteRessource;

    /**
     * @var int
     *
     * @ORM\Column(name="ratio", type="integer")
     */
    private $ratio;

    /**
     * @var int
     *
     * @ORM\Column(name="preference", type="integer")
     */
    private $preference;


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
     * Set quantiteRessource
     *
     * @param integer $quantiteRessource
     *
     * @return BesoinTypeRessource
     */
    public function setQuantiteRessource($quantiteRessource)
    {
        $this->quantiteRessource = $quantiteRessource;
    
        return $this;
    }

    /**
     * Get quantiteRessource
     *
     * @return integer
     */
    public function getQuantiteRessource()
    {
        return $this->quantiteRessource;
    }

    /**
     * Set ratio
     *
     * @param integer $ratio
     *
     * @return BesoinTypeRessource
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
    
        return $this;
    }

    /**
     * Get ratio
     *
     * @return integer
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set preference
     *
     * @param integer $preference
     *
     * @return BesoinTypeRessource
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;
    
        return $this;
    }

    /**
     * Get preference
     *
     * @return integer
     */
    public function getPreference()
    {
        return $this->preference;
    }
}

