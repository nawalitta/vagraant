<?php

namespace CalendarBundle\Entity;

use Time;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class for holding a calendar event's details.
 * 
 * @author Mike Yudin <mikeyudin@gmail.com>
 */

/**
 * event
 *
 * @ORM\Table(name="Evenement")
 * @ORM\Entity(repositoryClass="CalendarBundle\Repository\EventRepository")
 */
class EventEntity {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string Title/label of the calendar event.
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    protected $title;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="RessourceBundle\Entity\Enfant", inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $enfant;
    
      /**
     * @ORM\ManyToOne(targetEntity="ActiviteBundle\Entity\Activite", inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $activite;
    

    /**
     * @var string URL Relative to current path.
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;
    
    /**
     * @var string HTML color code for the bg color of the event label.
     * 
     * @ORM\ManyToOne(targetEntity="ActiviteBundle\Entity\Jour", inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $jour;

    /**
     * @var string HTML color code for the bg color of the event label.
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=true)
     */
    protected $bgColor;

    /**
     * @var string HTML color code for the foregorund color of the event label.
     */
    protected $fgColor;

    /**
     * @var string css class for the event label
     *
     * @ORM\Column(name="cssClass", type="string", length=255, nullable=true)
     */
    protected $cssClass;

    /**
     * @var \DateTime DateTime object of the event start date/time.
     *
     * @ORM\Column(name="dateDebut", type="time")
     */
    protected $startDatetime;

    /**
     * @var \DateTime DateTime object of the event end date/time.
     *
     * @ORM\Column(name="dateFin", type="time")
     */
    protected $endDatetime;

    /**
     * @var array Non-standard fields
     */
    protected $otherFields = array();

    public function __construct($title, \DateTime $startDatetime, \DateTime $endDatetime = null) {
        $this->title = $title;
        $this->startDatetime = $startDatetime;

        if ($endDatetime === null) {
            throw new \InvalidArgumentException("Must specify an event End DateTime if not an all day event.");
        }

        $this->endDatetime = $endDatetime;
    }

    /**
     * Convert calendar event details to an array
     * 
     * @return array $event 
     */
    public function toArray() {
        $event = array();

        if ($this->id !== null) {
            $event['id'] = "$this->id";
        }

        $event['title'] = $this->title;
        $event['start'] = $this->startDatetime->format("H:i:s");
        if ($this->endDatetime !== null) {
            $event['end'] = $this->endDatetime->format("H:i:s");
        }
            $event['resourceId'] = $this->enfant->getId().$this->jour->getDesignation();
                if ($this->bgColor !== null) {
            $event['color'] = $this->bgColor;

        }

//        
//        if ($this->url !== null) {
//            $event['url'] = $this->url;
//        }
//
//
//
//        if ($this->fgColor !== null) {
//            $event['textColor'] = $this->fgColor;
//        }
//
//        if ($this->cssClass !== null) {
//            $event['className'] = $this->cssClass;
//        }
//
//
//        
//
//
//        $event['allDay'] = $this->allDay;
//
//        foreach ($this->otherFields as $field => $value) {
//            $event[$field] = $value;
//        }

        return $event;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setBgColor($color) {
        $this->bgColor = $color;
    }

    public function getBgColor() {
        return $this->bgColor;
    }

    public function setFgColor($color) {
        $this->fgColor = $color;
    }

    public function getFgColor() {
        return $this->fgColor;
    }

    public function setCssClass($class) {
        $this->cssClass = $class;
    }

    public function getCssClass() {
        return $this->cssClass;
    }

    public function setStartDatetime(\Time $start) {
        $this->startDatetime = $start;
    }

    public function getStartDatetime() {
        return $this->startDatetime;
    }

    public function setEndDatetime(\Time $end) {
        $this->endDatetime = $end;
    }

    public function getEndDatetime() {
        return $this->endDatetime;
    }
    
    /**
     * @param string $name
     * @param string $value
     */
    public function addField($name, $value) {
        $this->otherFields[$name] = $value;
    }

    /**
     * @param string $name
     */
    public function removeField($name) {
        if (!array_key_exists($name, $this->otherFields)) {
            return;
        }

        unset($this->otherFields[$name]);
    }
    
    /**
     * Set jour
     *
     * @param string $jour
     *
     * @return EventEntity
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set enfant
     *
     * @param \RessourceBundle\Entity\Enfant $enfant
     *
     * @return EventEntity
     */
    public function setEnfant(\RessourceBundle\Entity\Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return \RessourceBundle\Entity\Enfant
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set activite
     *
     * @param \ActiviteBundle\Entity\Activite $activite
     *
     * @return EventEntity
     */
    public function setActivite(\ActiviteBundle\Entity\Activite $activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \ActiviteBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }
}
