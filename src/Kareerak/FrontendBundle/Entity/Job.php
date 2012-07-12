<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Job
 *
 * @ORM\Table(name="job")
 * @ORM\Entity
 */
class Job
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
     * @var string $jobTitle
     *
     * @ORM\Column(name="job_title", type="string", length=255, nullable=true)
     */
    private $jobTitle;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var datetime $jobPostCreationTimestamp
     *
     * @ORM\Column(name="job_post_creation_timestamp", type="datetime", nullable=false)
     */
    private $jobPostCreationTimestamp;

    /**
     * @var datetime $jobPostExpiryDate
     *
     * @ORM\Column(name="job_post_expiry_date", type="datetime", nullable=true)
     */
    private $jobPostExpiryDate;

    /**
     * @var datetime $jobStartDate
     *
     * @ORM\Column(name="job_start_date", type="datetime", nullable=true)
     */
    private $jobStartDate;

    /**
     * @var integer $experienceNeeded
     *
     * @ORM\Column(name="experience_needed", type="integer", nullable=true)
     */
    private $experienceNeeded;

    /**
     * @var string $degreeNeeded
     *
     * @ORM\Column(name="degree_needed", type="string", length=255, nullable=true)
     */
    private $degreeNeeded;

    /**
     * @var string $majorNeeded
     *
     * @ORM\Column(name="major_needed", type="string", length=255, nullable=true)
     */
    private $majorNeeded;

    /**
     * @var integer $universityPreferred
     *
     * @ORM\Column(name="university_preferred", type="integer", nullable=true)
     */
    private $universityPreferred;

    /**
     * @var string $concentrationPreferred
     *
     * @ORM\Column(name="concentration_preferred", type="string", length=255, nullable=true)
     */
    private $concentrationPreferred;

    /**
     * @var string $workingHours
     *
     * @ORM\Column(name="working_hours", type="string", length=255, nullable=true)
     */
    private $workingHours;

    /**
     * @var Skill
     *
     * @ORM\ManyToMany(targetEntity="Skill", inversedBy="job")
     * @ORM\JoinTable(name="job_skill",
     *   joinColumns={
     *     @ORM\JoinColumn(name="job_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="skill_id", referencedColumnName="id")
     *   }
     * )
     */
    private $skill;

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
     * @var Industry
     *
     * @ORM\ManyToOne(targetEntity="Industry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     * })
     */
    private $industry;

    /**
     * @var Employer
     *
     * @ORM\ManyToOne(targetEntity="Employer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employer_id", referencedColumnName="id")
     * })
     */
    private $employer;

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
     * @var CareerLevel
     *
     * @ORM\ManyToOne(targetEntity="CareerLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_level_id", referencedColumnName="id")
     * })
     */
    private $careerLevel;

    public function __construct()
    {
        $this->skill = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set jobPostCreationTimestamp
     *
     * @param datetime $jobPostCreationTimestamp
     */
    public function setJobPostCreationTimestamp($jobPostCreationTimestamp)
    {
        $this->jobPostCreationTimestamp = $jobPostCreationTimestamp;
    }

    /**
     * Get jobPostCreationTimestamp
     *
     * @return datetime 
     */
    public function getJobPostCreationTimestamp()
    {
        return $this->jobPostCreationTimestamp;
    }

    /**
     * Set jobPostExpiryDate
     *
     * @param datetime $jobPostExpiryDate
     */
    public function setJobPostExpiryDate($jobPostExpiryDate)
    {
        $this->jobPostExpiryDate = $jobPostExpiryDate;
    }

    /**
     * Get jobPostExpiryDate
     *
     * @return datetime 
     */
    public function getJobPostExpiryDate()
    {
        return $this->jobPostExpiryDate;
    }

    /**
     * Set jobStartDate
     *
     * @param datetime $jobStartDate
     */
    public function setJobStartDate($jobStartDate)
    {
        $this->jobStartDate = $jobStartDate;
    }

    /**
     * Get jobStartDate
     *
     * @return datetime 
     */
    public function getJobStartDate()
    {
        return $this->jobStartDate;
    }

    /**
     * Set experienceNeeded
     *
     * @param integer $experienceNeeded
     */
    public function setExperienceNeeded($experienceNeeded)
    {
        $this->experienceNeeded = $experienceNeeded;
    }

    /**
     * Get experienceNeeded
     *
     * @return integer 
     */
    public function getExperienceNeeded()
    {
        return $this->experienceNeeded;
    }

    /**
     * Set degreeNeeded
     *
     * @param string $degreeNeeded
     */
    public function setDegreeNeeded($degreeNeeded)
    {
        $this->degreeNeeded = $degreeNeeded;
    }

    /**
     * Get degreeNeeded
     *
     * @return string 
     */
    public function getDegreeNeeded()
    {
        return $this->degreeNeeded;
    }

    /**
     * Set majorNeeded
     *
     * @param string $majorNeeded
     */
    public function setMajorNeeded($majorNeeded)
    {
        $this->majorNeeded = $majorNeeded;
    }

    /**
     * Get majorNeeded
     *
     * @return string 
     */
    public function getMajorNeeded()
    {
        return $this->majorNeeded;
    }

    /**
     * Set universityPreferred
     *
     * @param integer $universityPreferred
     */
    public function setUniversityPreferred($universityPreferred)
    {
        $this->universityPreferred = $universityPreferred;
    }

    /**
     * Get universityPreferred
     *
     * @return integer 
     */
    public function getUniversityPreferred()
    {
        return $this->universityPreferred;
    }

    /**
     * Set concentrationPreferred
     *
     * @param string $concentrationPreferred
     */
    public function setConcentrationPreferred($concentrationPreferred)
    {
        $this->concentrationPreferred = $concentrationPreferred;
    }

    /**
     * Get concentrationPreferred
     *
     * @return string 
     */
    public function getConcentrationPreferred()
    {
        return $this->concentrationPreferred;
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
     * Add skill
     *
     * @param Kareerak\FrontendBundle\Entity\Skill $skill
     */
    public function addSkill(\Kareerak\FrontendBundle\Entity\Skill $skill)
    {
        $this->skill[] = $skill;
    }

    /**
     * Get skill
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSkill()
    {
        return $this->skill;
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
     * Set employer
     *
     * @param Kareerak\FrontendBundle\Entity\Employer $employer
     */
    public function setEmployer(\Kareerak\FrontendBundle\Entity\Employer $employer)
    {
        $this->employer = $employer;
    }

    /**
     * Get employer
     *
     * @return Kareerak\FrontendBundle\Entity\Employer 
     */
    public function getEmployer()
    {
        return $this->employer;
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