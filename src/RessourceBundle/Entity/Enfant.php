<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\EnfantRepository")
 */
class Enfant
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="estArchive", type="string", length=255)
     */
    private $estArchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrive", type="date")
     */
    private $dateArrive;

    /**
     * @var int
     *
     * @ORM\Column(name="regime", type="integer")
     */
    private $regime;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;


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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enfant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Enfant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set estArchive
     *
     * @param string $estArchive
     *
     * @return Enfant
     */
    public function setEstArchive($estArchive)
    {
        $this->estArchive = $estArchive;
    
        return $this;
    }

    /**
     * Get estArchive
     *
     * @return string
     */
    public function getEstArchive()
    {
        return $this->estArchive;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     *
     * @return Enfant
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;
    
        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set regime
     *
     * @param integer $regime
     *
     * @return Enfant
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;
    
        return $this;
    }

    /**
     * Get regime
     *
     * @return integer
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Enfant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    
        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
}

