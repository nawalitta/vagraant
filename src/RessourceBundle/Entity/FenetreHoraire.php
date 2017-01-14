<?php

namespace RessourceBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ActiviteBundle\Entity\Activite;
/**
 * FenetreHoraire
 *
 * @ORM\Table(name="fenetre_horaire")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\FenetreHoraireRepository")
 */
class FenetreHoraire
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
     * @ORM\Column(name="lundiDebut", type="time")
     */
    private $lundiDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="lundiFin", type="time")
     */
    private $lundiFin;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="mardiDebut", type="time")
     */
    private $mardiDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="mardiFin", type="time")
     */
    private $mardiFin;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="mercrediDebut", type="time")
     */
    private $mercrediDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="mercrediFin", type="time")
     */
    private $mercrediFin;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="jeudiDebut", type="time")
     */
    private $jeudiDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="jeudiFin", type="time")
     */
    private $jeudiFin;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="vendrediDebut", type="time")
     */
    private $vendrediDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="vendrediFin", type="time")
     */
    private $vendrediFin;

    /**
     * @ORM\OneToMany(targetEntity="Ressource", mappedBy="fenetreHoraire")
     */
    private $ressources;

    /**
     * @ORM\OneToMany(targetEntity="ActiviteBundle\Entity\Activite", mappedBy="fenetreHoraire" )
     */
    private $activites;

    /**
     * @ORM\OneToMany(targetEntity="Enfant", mappedBy="fenetreHoraire")
     */
    private $enfants;

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
     * Set lundiDebut
     *
     * @param DateTime $lundiDebut
     * @return FenetreHoraire
     */
    public function setLundiDebut($lundiDebut)
    {
        $this->lundiDebut = $lundiDebut;

        return $this;
    }

    /**
     * Get lundiDebut
     *
     * @return DateTime
     */
    public function getLundiDebut()
    {
        return $this->lundiDebut;
    }

    /**
     * Set lundiFin
     *
     * @param DateTime $lundiFin
     * @return FenetreHoraire
     */
    public function setLundiFin($lundiFin)
    {
        $this->lundiFin = $lundiFin;

        return $this;
    }

    /**
     * Get lundiFin
     *
     * @return DateTime
     */
    public function getLundiFin()
    {
        return $this->lundiFin;
    }

    /**
     * Set mardiDebut
     *
     * @param DateTime $mardiDebut
     * @return FenetreHoraire
     */
    public function setMardiDebut($mardiDebut)
    {
        $this->mardiDebut = $mardiDebut;

        return $this;
    }

    /**
     * Get mardiDebut
     *
     * @return DateTime
     */
    public function getMardiDebut()
    {
        return $this->mardiDebut;
    }

    /**
     * Set mardiFin
     *
     * @param DateTime $mardiFin
     * @return FenetreHoraire
     */
    public function setMardiFin($mardiFin)
    {
        $this->mardiFin = $mardiFin;

        return $this;
    }

    /**
     * Get mardiFin
     *
     * @return DateTime
     */
    public function getMardiFin()
    {
        return $this->mardiFin;
    }

    /**
     * Set mercrediDebut
     *
     * @param DateTime $mercrediDebut
     * @return FenetreHoraire
     */
    public function setMercrediDebut($mercrediDebut)
    {
        $this->mercrediDebut = $mercrediDebut;

        return $this;
    }

    /**
     * Get mercrediDebut
     *
     * @return DateTime
     */
    public function getMercrediDebut()
    {
        return $this->mercrediDebut;
    }

    /**
     * Set mercrediFin
     *
     * @param DateTime $mercrediFin
     * @return FenetreHoraire
     */
    public function setMercrediFin($mercrediFin)
    {
        $this->mercrediFin = $mercrediFin;

        return $this;
    }

    /**
     * Get mercrediFin
     *
     * @return DateTime
     */
    public function getMercrediFin()
    {
        return $this->mercrediFin;
    }

    /**
     * Set jeudiDebut
     *
     * @param DateTime $jeudiDebut
     * @return FenetreHoraire
     */
    public function setJeudiDebut($jeudiDebut)
    {
        $this->jeudiDebut = $jeudiDebut;

        return $this;
    }

    /**
     * Get jeudiDebut
     *
     * @return DateTime
     */
    public function getJeudiDebut()
    {
        return $this->jeudiDebut;
    }

    /**
     * Set jeudiFin
     *
     * @param DateTime $jeudiFin
     * @return FenetreHoraire
     */
    public function setJeudiFin($jeudiFin)
    {
        $this->jeudiFin = $jeudiFin;

        return $this;
    }

    /**
     * Get jeudiFin
     *
     * @return DateTime
     */
    public function getJeudiFin()
    {
        return $this->jeudiFin;
    }

    /**
     * Set vendrediDebut
     *
     * @param DateTime $vendrediDebut
     * @return FenetreHoraire
     */
    public function setVendrediDebut($vendrediDebut)
    {
        $this->vendrediDebut = $vendrediDebut;

        return $this;
    }

    /**
     * Get vendrediDebut
     *
     * @return DateTime
     */
    public function getVendrediDebut()
    {
        return $this->vendrediDebut;
    }

    /**
     * Set vendrediFin
     *
     * @param DateTime $vendrediFin
     * @return FenetreHoraire
     */
    public function setVendrediFin($vendrediFin)
    {
        $this->vendrediFin = $vendrediFin;

        return $this;
    }

    /**
     * Get vendrediFin
     *
     * @return DateTime
     */
    public function getVendrediFin()
    {
        return $this->vendrediFin;
    }

    /**
     * @Assert\IsTrue(message = "La date de début doit etre avant la date de fin")
     */
    public function isValidDate()
    {
        return ($this->lundiDebut < $this->lundiFin
            && $this->mardiDebut < $this->mardiFin
            && $this->mercrediDebut < $this->mercrediFin
            && $this->jeudiDebut < $this->jeudiFin
            && $this->vendrediDebut < $this->vendrediFin);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ressources = new ArrayCollection();
    }

    /**
     * Add ressource
     *
     * @param Ressource $ressource
     *
     * @return FenetreHoraire
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
     * Add activite
     *
     * @param Activite $activite
     *
     * @return FenetreHoraire
     */
    public function addActivite(Activite $activite)
    {
        $this->activites[] = $activite;

        return $this;
    }

    /**
     * Remove activite
     *
     * @param Activite $activite
     */
    public function removeActivite(Activite $activite)
    {
        $this->activites->removeElement($activite);
    }

    /**
     * Get activites
     *
     * @return ArrayCollection
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Add enfant
     *
     * @param Enfant $enfant
     *
     * @return FenetreHoraire
     */
    public function addEnfant(Enfant $enfant)
    {
        $this->enfants[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param Enfant $enfant
     */
    public function removeEnfant(Enfant $enfant)
    {
        $this->enfants->removeElement($enfant);
    }

    /**
     * Get enfants
     *
     * @return ArrayCollection
     */
    public function getEnfants()
    {
        return $this->enfants;
    }
    public function __toString()
    {
        return "Lundi( ". $this->lundiDebut->format('H:i')." - ".$this->lundiFin->format('H:i')." ) - Mardi( ".$this->mardiDebut->format('H:i')." - ".$this->mardiFin->format('H:i')." ) - Mercredi( ".$this->mercrediDebut->format('H:i')." - ".$this->mercrediFin->format('H:i')." ) - Jeudi( ".$this->jeudiDebut->format('H:i')." - ".$this->jeudiFin->format('H:i').") - Vendredi( ".$this->vendrediDebut->format('H:i')." - ".$this->vendrediFin->format('H:i')." )";
    }
}
