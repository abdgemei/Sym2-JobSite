<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity
 */
class Area
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
     * @var City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;



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
     * Set city
     *
     * @param Kareerak\FrontendBundle\Entity\City $city
     */
    public function setCity(\Kareerak\FrontendBundle\Entity\City $city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return Kareerak\FrontendBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}