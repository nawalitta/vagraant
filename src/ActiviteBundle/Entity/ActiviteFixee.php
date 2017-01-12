<?php

namespace ActiviteBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use RessourceBundle\Entity\Enfant;

/**
 * ActiviteFixee
 *
 * @ORM\Table(name="activite_fixee")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\ActiviteFixeeRepository")
 */
class ActiviteFixee
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
     * @var DateTime
     *
     * @ORM\Column(name="heureDebut", type="time")
     */
    private $heureDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="heureFin", type="time")
     */
    private $heureFin;

    /**
     * @ORM\ManyToOne(targetEntity="Jour",inversedBy="activitesFixees" )
     * @ORM\JoinColumn(nullable=true)
     */
    private $jour;

    /**
     * @ORM\ManyToOne(targetEntity="RessourceBundle\Entity\Enfant",inversedBy="activitesFixees" )
     * @ORM\JoinColumn(nullable=true)
     */
    private $enfant;

    /**
     * @ORM\ManyToOne(targetEntity="Activite",inversedBy="activitesFixees" )
     * @ORM\JoinColumn(nullable=false)
     */
    private $activite;

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
     * Set heureDebut
     *
     * @param DateTime $heureDebut
     *
     * @return ActiviteFixee
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;
    
        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param DateTime $heureFin
     *
     * @return ActiviteFixee
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    
        return $this;
    }

    /**
     * Get heureFin
     *
     * @return DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     *
     * @Assert\isTrue(message ="L'heure de fin doit être superieur a l'heure de début")
     */
    public function isHeureValid()
    {
        return $this->heureFin >= $this->heureDebut;
    }

    /**
     * Set jour
     *
     * @param Jour $jour
     *
     * @return ActiviteFixee
     */
    public function setJour(Jour $jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return Jour
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set enfant
     *
     * @param Enfant $enfant
     *
     * @return ActiviteFixee
     */
    public function setEnfant(Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return Enfant
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set activite
     *
     * @param Activite $activite
     *
     * @return ActiviteFixee
     */
    public function setActivite(Activite $activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }
}
