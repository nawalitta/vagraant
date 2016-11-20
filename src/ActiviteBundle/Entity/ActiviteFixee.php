<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
   * @ORM\ManyToOne(targetEntity="Jour",inversedBy="ActiviteFixee")
   * @ORM\JoinColumn(nullable=false)
   */ 
    private $jour;
    
    /**
   * @ORM\ManyToOne(targetEntity="RessourceBundle/Enfant",inversedBy="ActiviteFixee")
   * @ORM\JoinColumn(nullable=false)
   */ 
    private $enfant;
    
    /**
   * @ORM\ManyToOne(targetEntity="Activite",inversedBy="ActiviteFixee")
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
     * @param \DateTime $heureDebut
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
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
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
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }
}

