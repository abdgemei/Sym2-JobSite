<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Job
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\JobRepository")
 */
class Job
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=5000)
     */
    private $description;

    /**
     * @var bigint $post_creation_timestamp
     *
     * @ORM\Column(name="post_creation_timestamp", type="bigint")
     */
    private $post_creation_timestamp;

    /**
     * @var datetime $post_expiry_date
     *
     * @ORM\Column(name="post_expiry_date", type="datetime")
     */
    private $post_expiry_date;

    /**
     * @var string $post_slug
     *
     * @ORM\Column(name="post_slug", type="string", length=255)
     */
    private $post_slug;

    /**
     * @var date $job_start_date
     *
     * @ORM\Column(name="job_start_date", type="date")
     */
    private $job_start_date;

    /**
     * @var integer $years_of_experience_needed
     *
     * @ORM\Column(name="years_of_experience_needed", type="integer")
     */
    private $years_of_experience_needed;

    /**
     * @var string $degree_level_needed
     *
     * @ORM\Column(name="degree_level_needed", type="string", length=255)
     */
    private $degree_level_needed;

    /**
     * @var string $major_needed
     *
     * @ORM\Column(name="major_needed", type="string", length=255)
     */
    private $major_needed;

    /**
     * @var integer $university_needed_id
     *
     * @ORM\Column(name="university_needed_id", type="integer")
     */
    private $university_needed_id;

    /**
     * @var string $concentration_needed
     *
     * @ORM\Column(name="concentration_needed", type="string", length=255)
     */
    private $concentration_needed;

    /**
     * @var string $working_hours
     *
     * @ORM\Column(name="working_hours", type="string", length=255)
     */
    private $working_hours;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var integer $salary
     *
     * @ORM\Column(name="salary", type="integer")
     */
    private $salary;

    /**
     * @var string $summary
     *
     * @ORM\Column(name="summary", type="string", length=5000)
     */
    private $summary;

    /**
     * @var string $responsibilities
     *
     * @ORM\Column(name="responsibilities", type="string", length=5000)
     */
    private $responsibilities;

    /**
     * @var string $qualification
     *
     * @ORM\Column(name="qualification", type="string", length=5000)
     */
    private $qualification;

    /**
     * @var string $reporting_to
     *
     * @ORM\Column(name="reporting_to", type="string", length=5000)
     */
    private $reporting_to;

    /**
     * @var integer $job_type_id
     *
     * @ORM\Column(name="job_type_id", type="integer")
     */
    private $job_type_id;

    /**
     * @var integer $career_level_id
     *
     * @ORM\Column(name="career_level_id", type="integer")
     */
    private $career_level_id;

    /**
     * @var integer $industry_id
     *
     * @ORM\Column(name="industry_id", type="integer")
     */
    private $industry_id;

    /**
     * @var integer $employer_id
     *
     * @ORM\Column(name="employer_id", type="integer")
     */
    private $employer_id;

    /**
     * @var integer $country_id
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $country_id;

    /**
     * @var integer $city_id
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $city_id;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set post_creation_timestamp
     *
     * @param bigint $postCreationTimestamp
     */
    public function setPostCreationTimestamp($postCreationTimestamp)
    {
        $this->post_creation_timestamp = $postCreationTimestamp;
    }

    /**
     * Get post_creation_timestamp
     *
     * @return bigint 
     */
    public function getPostCreationTimestamp()
    {
        return $this->post_creation_timestamp;
    }

    /**
     * Set post_expiry_date
     *
     * @param datetime $postExpiryDate
     */
    public function setPostExpiryDate($postExpiryDate)
    {
        $this->post_expiry_date = $postExpiryDate;
    }

    /**
     * Get post_expiry_date
     *
     * @return datetime 
     */
    public function getPostExpiryDate()
    {
        return $this->post_expiry_date;
    }

    /**
     * Set post_slug
     *
     * @param string $postSlug
     */
    public function setPostSlug($postSlug)
    {
        $this->post_slug = $postSlug;
    }

    /**
     * Get post_slug
     *
     * @return string 
     */
    public function getPostSlug()
    {
        return $this->post_slug;
    }

    /**
     * Set job_start_date
     *
     * @param date $jobStartDate
     */
    public function setJobStartDate($jobStartDate)
    {
        $this->job_start_date = $jobStartDate;
    }

    /**
     * Get job_start_date
     *
     * @return date 
     */
    public function getJobStartDate()
    {
        return $this->job_start_date;
    }

    /**
     * Set years_of_experience_needed
     *
     * @param integer $yearsOfExperienceNeeded
     */
    public function setYearsOfExperienceNeeded($yearsOfExperienceNeeded)
    {
        $this->years_of_experience_needed = $yearsOfExperienceNeeded;
    }

    /**
     * Get years_of_experience_needed
     *
     * @return integer 
     */
    public function getYearsOfExperienceNeeded()
    {
        return $this->years_of_experience_needed;
    }

    /**
     * Set degree_level_needed
     *
     * @param string $degreeLevelNeeded
     */
    public function setDegreeLevelNeeded($degreeLevelNeeded)
    {
        $this->degree_level_needed = $degreeLevelNeeded;
    }

    /**
     * Get degree_level_needed
     *
     * @return string 
     */
    public function getDegreeLevelNeeded()
    {
        return $this->degree_level_needed;
    }

    /**
     * Set major_needed
     *
     * @param string $majorNeeded
     */
    public function setMajorNeeded($majorNeeded)
    {
        $this->major_needed = $majorNeeded;
    }

    /**
     * Get major_needed
     *
     * @return string 
     */
    public function getMajorNeeded()
    {
        return $this->major_needed;
    }

    /**
     * Set university_needed_id
     *
     * @param integer $universityNeededId
     */
    public function setUniversityNeededId($universityNeededId)
    {
        $this->university_needed_id = $universityNeededId;
    }

    /**
     * Get university_needed_id
     *
     * @return integer 
     */
    public function getUniversityNeededId()
    {
        return $this->university_needed_id;
    }

    /**
     * Set concentration_needed
     *
     * @param string $concentrationNeeded
     */
    public function setConcentrationNeeded($concentrationNeeded)
    {
        $this->concentration_needed = $concentrationNeeded;
    }

    /**
     * Get concentration_needed
     *
     * @return string 
     */
    public function getConcentrationNeeded()
    {
        return $this->concentration_needed;
    }

    /**
     * Set working_hours
     *
     * @param string $workingHours
     */
    public function setWorkingHours($workingHours)
    {
        $this->working_hours = $workingHours;
    }

    /**
     * Get working_hours
     *
     * @return string 
     */
    public function getWorkingHours()
    {
        return $this->working_hours;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set salary
     *
     * @param integer $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * Get salary
     *
     * @return integer 
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set summary
     *
     * @param string $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set responsibilities
     *
     * @param string $responsibilities
     */
    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }

    /**
     * Get responsibilities
     *
     * @return string 
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * Set qualification
     *
     * @param string $qualification
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;
    }

    /**
     * Get qualification
     *
     * @return string 
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Set reporting_to
     *
     * @param string $reportingTo
     */
    public function setReportingTo($reportingTo)
    {
        $this->reporting_to = $reportingTo;
    }

    /**
     * Get reporting_to
     *
     * @return string 
     */
    public function getReportingTo()
    {
        return $this->reporting_to;
    }

    /**
     * Set job_type_id
     *
     * @param integer $jobTypeId
     */
    public function setJobTypeId($jobTypeId)
    {
        $this->job_type_id = $jobTypeId;
    }

    /**
     * Get job_type_id
     *
     * @return integer 
     */
    public function getJobTypeId()
    {
        return $this->job_type_id;
    }

    /**
     * Set career_level_id
     *
     * @param integer $careerLevelId
     */
    public function setCareerLevelId($careerLevelId)
    {
        $this->career_level_id = $careerLevelId;
    }

    /**
     * Get career_level_id
     *
     * @return integer 
     */
    public function getCareerLevelId()
    {
        return $this->career_level_id;
    }

    /**
     * Set industry_id
     *
     * @param integer $industryId
     */
    public function setIndustryId($industryId)
    {
        $this->industry_id = $industryId;
    }

    /**
     * Get industry_id
     *
     * @return integer 
     */
    public function getIndustryId()
    {
        return $this->industry_id;
    }

    /**
     * Set employer_id
     *
     * @param integer $employerId
     */
    public function setEmployerId($employerId)
    {
        $this->employer_id = $employerId;
    }

    /**
     * Get employer_id
     *
     * @return integer 
     */
    public function getEmployerId()
    {
        return $this->employer_id;
    }

    /**
     * Set country_id
     *
     * @param integer $countryId
     */
    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;
    }

    /**
     * Get country_id
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set city_id
     *
     * @param integer $cityId
     */
    public function setCityId($cityId)
    {
        $this->city_id = $cityId;
    }

    /**
     * Get city_id
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->city_id;
    }
}