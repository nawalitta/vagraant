<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jour
 *
 * @ORM\Table(name="Jour")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\JourRepository")
 */
class Jour
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
     * @ORM\Column(name="labelJ", type="string", length=255)
     */
    private $labelJ;

    /**
     * @var int
     *
     * @ORM\Column(name="parite", type="integer")
     */
    private $parite;


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
     * Set labelJ
     *
     * @param string $labelJ
     *
     * @return jour
     */
    public function setLabelJ($labelJ)
    {
        $this->labelJ = $labelJ;
    
        return $this;
    }

    /**
     * Get labelJ
     *
     * @return string
     */
    public function getLabelJ()
    {
        return $this->labelJ;
    }

    /**
     * Set parite
     *
     * @param integer $parite
     *
     * @return jour
     */
    public function setParite($parite)
    {
        $this->parite = $parite;
    
        return $this;
    }

    /**
     * Get parite
     *
     * @return integer
     */
    public function getParite()
    {
        return $this->parite;
    }
}
