<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Employer
 *
 * @ORM\Table(name="employer")
 * @ORM\Entity
 */
class Employer
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
     * @var string $tagline
     *
     * @ORM\Column(name="tagline", type="string", length=255, nullable=true)
     */
    private $tagline;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;

    /**
     * @var string $logoPath
     *
     * @ORM\Column(name="logo_path", type="string", length=255, nullable=true)
     */
    private $logoPath;

    /**
     * @var string $addressLine1
     *
     * @ORM\Column(name="address_line_1", type="string", length=255, nullable=true)
     */
    private $addressLine1;

    /**
     * @var string $addressLine2
     *
     * @ORM\Column(name="address_line_2", type="string", length=255, nullable=true)
     */
    private $addressLine2;

    /**
     * @var integer $numberOfEmployees
     *
     * @ORM\Column(name="number_of_employees", type="integer", nullable=true)
     */
    private $numberOfEmployees;

    /**
     * @var string $weekends
     *
     * @ORM\Column(name="weekends", type="string", length=255, nullable=true)
     */
    private $weekends;

    /**
     * @var string $workingHours
     *
     * @ORM\Column(name="working_hours", type="string", length=255, nullable=true)
     */
    private $workingHours;

    /**
     * @var decimal $longitude
     *
     * @ORM\Column(name="longitude", type="decimal", nullable=true)
     */
    private $longitude;

    /**
     * @var decimal $latitude
     *
     * @ORM\Column(name="latitude", type="decimal", nullable=true)
     */
    private $latitude;

    /**
     * @var Account
     *
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var MembershipType
     *
     * @ORM\ManyToOne(targetEntity="MembershipType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="membership_type_id", referencedColumnName="id")
     * })
     */
    private $membershipType;

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
     * @var Area
     *
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * })
     */
    private $area;



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
     * Set tagline
     *
     * @param string $tagline
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }

    /**
     * Get tagline
     *
     * @return string 
     */
    public function getTagline()
    {
        return $this->tagline;
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
     * Set addressLine1
     *
     * @param string $addressLine1
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set numberOfEmployees
     *
     * @param integer $numberOfEmployees
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }

    /**
     * Get numberOfEmployees
     *
     * @return integer 
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Set weekends
     *
     * @param string $weekends
     */
    public function setWeekends($weekends)
    {
        $this->weekends = $weekends;
    }

    /**
     * Get weekends
     *
     * @return string 
     */
    public function getWeekends()
    {
        return $this->weekends;
    }

    /**
     * Set workingHours
     *
     * @param string $workingHours
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;
    }

    /**
     * Get workingHours
     *
     * @return string 
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    /**
     * Set longitude
     *
     * @param decimal $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return decimal 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param decimal $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return decimal 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set account
     *
     * @param Kareerak\FrontendBundle\Entity\Account $account
     */
    public function setAccount(\Kareerak\FrontendBundle\Entity\Account $account)
    {
        $this->account = $account;
    }

    /**
     * Get account
     *
     * @return Kareerak\FrontendBundle\Entity\Account 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set membershipType
     *
     * @param Kareerak\FrontendBundle\Entity\MembershipType $membershipType
     */
    public function setMembershipType(\Kareerak\FrontendBundle\Entity\MembershipType $membershipType)
    {
        $this->membershipType = $membershipType;
    }

    /**
     * Get membershipType
     *
     * @return Kareerak\FrontendBundle\Entity\MembershipType 
     */
    public function getMembershipType()
    {
        return $this->membershipType;
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

    /**
     * Set area
     *
     * @param Kareerak\FrontendBundle\Entity\Area $area
     */
    public function setArea(\Kareerak\FrontendBundle\Entity\Area $area)
    {
        $this->area = $area;
    }

    /**
     * Get area
     *
     * @return Kareerak\FrontendBundle\Entity\Area 
     */
    public function getArea()
    {
        return $this->area;
    }
}