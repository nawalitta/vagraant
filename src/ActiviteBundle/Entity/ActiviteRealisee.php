<?php

namespace ActiviteBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use RessourceBundle\Entity\Enfant;
use RessourceBundle\Entity\Ressource;

/**
 * ActiviteRealisee
 *
 * @ORM\Table(name="activite_realisee")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\ActiviteRealiseeRepository")
 */
class ActiviteRealisee
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
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebut", type="time")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFin", type="time")
     */
    private $heureFin;

    /**
     * @ORM\ManyToOne(targetEntity="Activite",inversedBy="ActiviteRealisee")
     * @ORM\JoinColumn(nullable=true)
     */
    public $activite;

    /**
     * @ORM\ManyToMany(targetEntity="RessourceBundle\Entity\Ressource", mappedBy="activiteesRealisees")
     */
    private $ressources;

    /**
     * @ORM\ManyToOne(targetEntity="RessourceBundle\Entity\Enfant",inversedBy="activitesRealisees")
     * @ORM\JoinColumn(nullable=true)
     */
    private $enfant;

    /**
     * @ORM\ManyToOne(targetEntity="Jour",inversedBy="activitesRealisees")
     * @ORM\JoinColumn(nullable=true)
     */
    private $jour;

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
     * Set heureDebut
     *
     * @param DateTime $heureDebut
     *
     * @return ActiviteRealisee
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
     * @return ActiviteRealisee
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
     * Constructor
     */
    public function __construct()
    {
        $this->ressources = new ArrayCollection();
    }

    public function __toString()
    {

        return $this->activite->getDesignation() . " " . $this->heureDebut->format('Y-m-d H:i:s') . "-" . $this->heureFin->format('Y-m-d H:i:s');
    }

    /**
     * Set activite
     *
     * @param Activite $activite
     *
     * @return ActiviteRealisee
     */
    public function setActivite(Activite $activite = null)
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

    /**
     * Add ressource
     *
     * @param Ressource $ressource
     *
     * @return ActiviteRealisee
     */
    public function addRessource(Ressource $ressource)
    {
        $this->ressources[] = $ressource;

        return $this;
    }

    /**
     * Remove ressource
     *
     * @param Ressource $ressource
     */
    public function removeRessource(Ressource $ressource)
    {
        $this->ressources->removeElement($ressource);
    }

    /**
     * Get ressources
     *
     * @return ArrayCollection
     */
    public function getRessources()
    {
        return $this->ressources;
    }

    /**
     * @Assert\IsTrue(message = "L'heure de début doit etre avant l'heure de fin")
     */
    public function isValidHeure()
    {
        return ($this->heureDebut <= $this->heureFin);
    }

    /**
     * Set enfant
     *
     * @param Enfant $enfant
     *
     * @return ActiviteRealisee
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
     * Set jour
     *
     * @param Jour $jour
     *
     * @return ActiviteRealisee
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
     * Return array of activiteRealisee
     * @return type array
     */
    public function toArray()
    {
        $event = array();

        if ($this->id !== null) {
            $event['id'] = "$this->id";
        }

        $event['title'] = $this->activite->getDesignation();
        $event['start'] = $this->heureDebut->format("H:i:s");
        if ($this->heureFin !== null) {
            $event['end'] = $this->heureFin->format("H:i:s");
        }
        $event['resourceId'] = $this->enfant->getId() . "-" . $this->jour->getId();

        return $event;
    }
}
