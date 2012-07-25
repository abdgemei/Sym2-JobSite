<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Degree
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\DegreeRepository")
 */
class Degree
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
     * @var string $faculty
     *
     * @ORM\Column(name="faculty", type="string", length=255)
     */
    private $faculty;

    /**
     * @var string $major
     *
     * @ORM\Column(name="major", type="string", length=255)
     */
    private $major;

    /**
     * @var string $level
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string $grade_if_egyptian
     *
     * @ORM\Column(name="grade_if_egyptian", type="string", length=255)
     */
    private $grade_if_egyptian;

    /**
     * @var decimal $grade_if_gpa
     *
     * @ORM\Column(name="grade_if_gpa", type="decimal")
     */
    private $grade_if_gpa;

    /**
     * @var string $honours
     *
     * @ORM\Column(name="honours", type="string", length=255)
     */
    private $honours;

    /**
     * @var date $completion_date
     *
     * @ORM\Column(name="completion_date", type="date")
     */
    private $completion_date;

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
     * @var integer $university_id
     *
     * @ORM\Column(name="university_id", type="integer")
     */
    private $university_id;

    /**
     * @var integer $seeker_id
     *
     * @ORM\Column(name="seeker_id", type="integer")
     */
    private $seeker_id;


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
     * Set faculty
     *
     * @param string $faculty
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
    }

    /**
     * Get faculty
     *
     * @return string 
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Set major
     *
     * @param string $major
     */
    public function setMajor($major)
    {
        $this->major = $major;
    }

    /**
     * Get major
     *
     * @return string 
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Set level
     *
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set grade_if_egyptian
     *
     * @param string $gradeIfEgyptian
     */
    public function setGradeIfEgyptian($gradeIfEgyptian)
    {
        $this->grade_if_egyptian = $gradeIfEgyptian;
    }

    /**
     * Get grade_if_egyptian
     *
     * @return string 
     */
    public function getGradeIfEgyptian()
    {
        return $this->grade_if_egyptian;
    }

    /**
     * Set grade_if_gpa
     *
     * @param decimal $gradeIfGpa
     */
    public function setGradeIfGpa($gradeIfGpa)
    {
        $this->grade_if_gpa = $gradeIfGpa;
    }

    /**
     * Get grade_if_gpa
     *
     * @return decimal 
     */
    public function getGradeIfGpa()
    {
        return $this->grade_if_gpa;
    }

    /**
     * Set honours
     *
     * @param string $honours
     */
    public function setHonours($honours)
    {
        $this->honours = $honours;
    }

    /**
     * Get honours
     *
     * @return string 
     */
    public function getHonours()
    {
        return $this->honours;
    }

    /**
     * Set completion_date
     *
     * @param date $completionDate
     */
    public function setCompletionDate($completionDate)
    {
        $this->completion_date = $completionDate;
    }

    /**
     * Get completion_date
     *
     * @return date 
     */
    public function getCompletionDate()
    {
        return $this->completion_date;
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

    /**
     * Set university_id
     *
     * @param integer $universityId
     */
    public function setUniversityId($universityId)
    {
        $this->university_id = $universityId;
    }

    /**
     * Get university_id
     *
     * @return integer 
     */
    public function getUniversityId()
    {
        return $this->university_id;
    }

    /**
     * Set seeker_id
     *
     * @param integer $seekerId
     */
    public function setSeekerId($seekerId)
    {
        $this->seeker_id = $seekerId;
    }

    /**
     * Get seeker_id
     *
     * @return integer 
     */
    public function getSeekerId()
    {
        return $this->seeker_id;
    }
}