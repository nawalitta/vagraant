<?php

namespace RessourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="RessourceBundle\Repository\groupeRepository")
 */
class groupe
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
     * @ORM\Column(name="labelG", type="string", length=255)
     */
    private $labelG;


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
     * Set labelG
     *
     * @param string $labelG
     *
     * @return groupe
     */
    public function setLabelG($labelG)
    {
        $this->labelG = $labelG;

        return $this;
    }

    /**
     * Get labelG
     *
     * @return string
     */
    public function getLabelG()
    {
        return $this->labelG;
    }
}

