<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Experience
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\ExperienceRepository")
 */
class Experience
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
     * @var string $organization_name
     *
     * @ORM\Column(name="organization_name", type="string", length=255)
     */
    private $organization_name;

    /**
     * @var string $job_title
     *
     * @ORM\Column(name="job_title", type="string", length=255)
     */
    private $job_title;

    /**
     * @var date $start_date
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $start_date;

    /**
     * @var date $end_date
     *
     * @ORM\Column(name="end_date", type="date")
     */
    private $end_date;

    /**
     * @var string $work_details
     *
     * @ORM\Column(name="work_details", type="string", length=5000)
     */
    private $work_details;

    /**
     * @var string $position
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var string $number_of_subordinates
     *
     * @ORM\Column(name="number_of_subordinates", type="string", length=255)
     */
    private $number_of_subordinates;

    /**
     * @var string $reasons_for_leaving
     *
     * @ORM\Column(name="reasons_for_leaving", type="string", length=5000)
     */
    private $reasons_for_leaving;

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
     * Set organization_name
     *
     * @param string $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organization_name = $organizationName;
    }

    /**
     * Get organization_name
     *
     * @return string 
     */
    public function getOrganizationName()
    {
        return $this->organization_name;
    }

    /**
     * Set job_title
     *
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->job_title = $jobTitle;
    }

    /**
     * Get job_title
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Set start_date
     *
     * @param date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    }

    /**
     * Get start_date
     *
     * @return date 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param date $endDate
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
    }

    /**
     * Get end_date
     *
     * @return date 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set work_details
     *
     * @param string $workDetails
     */
    public function setWorkDetails($workDetails)
    {
        $this->work_details = $workDetails;
    }

    /**
     * Get work_details
     *
     * @return string 
     */
    public function getWorkDetails()
    {
        return $this->work_details;
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
     * Set number_of_subordinates
     *
     * @param string $numberOfSubordinates
     */
    public function setNumberOfSubordinates($numberOfSubordinates)
    {
        $this->number_of_subordinates = $numberOfSubordinates;
    }

    /**
     * Get number_of_subordinates
     *
     * @return string 
     */
    public function getNumberOfSubordinates()
    {
        return $this->number_of_subordinates;
    }

    /**
     * Set reasons_for_leaving
     *
     * @param string $reasonsForLeaving
     */
    public function setReasonsForLeaving($reasonsForLeaving)
    {
        $this->reasons_for_leaving = $reasonsForLeaving;
    }

    /**
     * Get reasons_for_leaving
     *
     * @return string 
     */
    public function getReasonsForLeaving()
    {
        return $this->reasons_for_leaving;
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