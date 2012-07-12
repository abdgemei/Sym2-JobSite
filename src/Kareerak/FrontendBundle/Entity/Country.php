<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $isoShort
     *
     * @ORM\Column(name="iso_short", type="string", length=2, nullable=true)
     */
    private $isoShort;

    /**
     * @var string $isoLong
     *
     * @ORM\Column(name="iso_long", type="string", length=3, nullable=true)
     */
    private $isoLong;



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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isoShort
     *
     * @param string $isoShort
     */
    public function setIsoShort($isoShort)
    {
        $this->isoShort = $isoShort;
    }

    /**
     * Get isoShort
     *
     * @return string 
     */
    public function getIsoShort()
    {
        return $this->isoShort;
    }

    /**
     * Set isoLong
     *
     * @param string $isoLong
     */
    public function setIsoLong($isoLong)
    {
        $this->isoLong = $isoLong;
    }

    /**
     * Get isoLong
     *
     * @return string 
     */
    public function getIsoLong()
    {
        return $this->isoLong;
    }
}