<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
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
     * @var date $startDate
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var date $endDate
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string $jobTitle
     *
     * @ORM\Column(name="job_title", type="string", length=255, nullable=true)
     */
    private $jobTitle;

    /**
     * @var string $workDetails
     *
     * @ORM\Column(name="work_details", type="string", length=5000, nullable=true)
     */
    private $workDetails;

    /**
     * @var string $position
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=true)
     */
    private $position;

    /**
     * @var integer $numberOfSubordinates
     *
     * @ORM\Column(name="number_of_subordinates", type="integer", nullable=true)
     */
    private $numberOfSubordinates;

    /**
     * @var string $reasonsForLeaving
     *
     * @ORM\Column(name="reasons_for_leaving", type="string", length=5000, nullable=true)
     */
    private $reasonsForLeaving;

    /**
     * @var JobType
     *
     * @ORM\ManyToOne(targetEntity="JobType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_type_id", referencedColumnName="id")
     * })
     */
    private $jobType;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

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
     * @var Industry
     *
     * @ORM\ManyToOne(targetEntity="Industry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     * })
     */
    private $industry;

    /**
     * @var CareerLevel
     *
     * @ORM\ManyToOne(targetEntity="CareerLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_level_id", referencedColumnName="id")
     * })
     */
    private $careerLevel;



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
     * Set startDate
     *
     * @param date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Get startDate
     *
     * @return date 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param date $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Get endDate
     *
     * @return date 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set workDetails
     *
     * @param string $workDetails
     */
    public function setWorkDetails($workDetails)
    {
        $this->workDetails = $workDetails;
    }

    /**
     * Get workDetails
     *
     * @return string 
     */
    public function getWorkDetails()
    {
        return $this->workDetails;
    }

    /**
     * Set position
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set numberOfSubordinates
     *
     * @param integer $numberOfSubordinates
     */
    public function setNumberOfSubordinates($numberOfSubordinates)
    {
        $this->numberOfSubordinates = $numberOfSubordinates;
    }

    /**
     * Get numberOfSubordinates
     *
     * @return integer 
     */
    public function getNumberOfSubordinates()
    {
        return $this->numberOfSubordinates;
    }

    /**
     * Set reasonsForLeaving
     *
     * @param string $reasonsForLeaving
     */
    public function setReasonsForLeaving($reasonsForLeaving)
    {
        $this->reasonsForLeaving = $reasonsForLeaving;
    }

    /**
     * Get reasonsForLeaving
     *
     * @return string 
     */
    public function getReasonsForLeaving()
    {
        return $this->reasonsForLeaving;
    }

    /**
     * Set jobType
     *
     * @param Kareerak\FrontendBundle\Entity\JobType $jobType
     */
    public function setJobType(\Kareerak\FrontendBundle\Entity\JobType $jobType)
    {
        $this->jobType = $jobType;
    }

    /**
     * Get jobType
     *
     * @return Kareerak\FrontendBundle\Entity\JobType 
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Set company
     *
     * @param Kareerak\FrontendBundle\Entity\Company $company
     */
    public function setCompany(\Kareerak\FrontendBundle\Entity\Company $company)
    {
        $this->company = $company;
    }

    /**
     * Get company
     *
     * @return Kareerak\FrontendBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
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

    /**
     * Set industry
     *
     * @param Kareerak\FrontendBundle\Entity\Industry $industry
     */
    public function setIndustry(\Kareerak\FrontendBundle\Entity\Industry $industry)
    {
        $this->industry = $industry;
    }

    /**
     * Get industry
     *
     * @return Kareerak\FrontendBundle\Entity\Industry 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set careerLevel
     *
     * @param Kareerak\FrontendBundle\Entity\CareerLevel $careerLevel
     */
    public function setCareerLevel(\Kareerak\FrontendBundle\Entity\CareerLevel $careerLevel)
    {
        $this->careerLevel = $careerLevel;
    }

    /**
     * Get careerLevel
     *
     * @return Kareerak\FrontendBundle\Entity\CareerLevel 
     */
    public function getCareerLevel()
    {
        return $this->careerLevel;
    }
}