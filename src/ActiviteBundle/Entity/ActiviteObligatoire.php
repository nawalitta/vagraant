<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RessourceBundle\Entity\Enfant;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * activiteObligatoire
 *
 * @ORM\Table(name="activite_obligatoire")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\ActiviteObligatoireRepository")
 */
class ActiviteObligatoire
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
     * @ORM\Column(name="quotas", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $quotas;

    /**
     * @var int
     *
     * @ORM\Column(name="ecart", type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $ecart;

    /**
     * @ORM\ManyToOne(targetEntity="Activite",inversedBy="enfantsObligatoires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $activite;

    /**
     * @ORM\ManyToOne(targetEntity="RessourceBundle\Entity\Enfant",inversedBy="activitesObligatoires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $enfant;

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
     * Set quotas
     *
     * @param integer $quotas
     *
     * @return activiteObligatoire
     */
    public function setQuotas($quotas)
    {
        $this->quotas = $quotas;

        return $this;
    }

    /**
     * Get quotas
     *
     * @return integer
     */
    public function getQuotas()
    {
        return $this->quotas;
    }

    /**
     * Set ecart
     *
     * @param integer $ecart
     *
     * @return activiteObligatoire
     */
    public function setEcart($ecart)
    {
        $this->ecart = $ecart;

        return $this;
    }

    /**
     * Get ecart
     *
     * @return integer
     */
    public function getEcart()
    {
        return $this->ecart;
    }

    public function getActivite()
    {
        return $this->activite;
    }

    public function setActivite($activite)
    {
        $this->activite = $activite;
        return $this;
    }

    public function __construct($activite)
    {
        $this->activite = $activite;
    }

    public function __toString()
    {
        return $this->activite->getDesignation();
    }

    /**
     * Set enfant
     *
     * @param Enfant $enfant
     *
     * @return ActiviteObligatoire
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
}
