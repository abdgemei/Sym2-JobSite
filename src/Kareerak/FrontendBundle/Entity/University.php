<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\University
 *
 * @ORM\Table(name="university")
 * @ORM\Entity
 */
class University
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
     * @var string $logoPath
     *
     * @ORM\Column(name="logo_path", type="string", length=255, nullable=true)
     */
    private $logoPath;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;

    /**
     * @var Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

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
     * Set logoPath
     *
     * @param string $logoPath
     */
    public function setLogoPath($logoPath)
    {
        $this->logoPath = $logoPath;
    }

    /**
     * Get logoPath
     *
     * @return string 
     */
    public function getLogoPath()
    {
        return $this->logoPath;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set country
     *
     * @param Kareerak\FrontendBundle\Entity\Country $country
     */
    public function setCountry(\Kareerak\FrontendBundle\Entity\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Kareerak\FrontendBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
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