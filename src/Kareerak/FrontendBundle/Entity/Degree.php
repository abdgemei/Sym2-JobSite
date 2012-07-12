<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Degree
 *
 * @ORM\Table(name="degree")
 * @ORM\Entity
 */
class Degree
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
     * @var string $faculty
     *
     * @ORM\Column(name="faculty", type="string", length=255, nullable=true)
     */
    private $faculty;

    /**
     * @var string $major
     *
     * @ORM\Column(name="major", type="string", length=255, nullable=true)
     */
    private $major;

    /**
     * @var string $gradeEg
     *
     * @ORM\Column(name="grade_eg", type="string", length=255, nullable=true)
     */
    private $gradeEg;

    /**
     * @var string $gradeGpa
     *
     * @ORM\Column(name="grade_gpa", type="string", length=255, nullable=true)
     */
    private $gradeGpa;

    /**
     * @var string $honours
     *
     * @ORM\Column(name="honours", type="string", length=255, nullable=true)
     */
    private $honours;

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
     * @var University
     *
     * @ORM\ManyToOne(targetEntity="University")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uni_id", referencedColumnName="id")
     * })
     */
    private $uni;

    /**
     * @var Seeker
     *
     * @ORM\ManyToOne(targetEntity="Seeker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seeker_id", referencedColumnName="id")
     * })
     */
    private $seeker;

    /**
     * @var DegreeLevel
     *
     * @ORM\ManyToOne(targetEntity="DegreeLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="degree_level_id", referencedColumnName="id")
     * })
     */
    private $degreeLevel;



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
     * Set gradeEg
     *
     * @param string $gradeEg
     */
    public function setGradeEg($gradeEg)
    {
        $this->gradeEg = $gradeEg;
    }

    /**
     * Get gradeEg
     *
     * @return string 
     */
    public function getGradeEg()
    {
        return $this->gradeEg;
    }

    /**
     * Set gradeGpa
     *
     * @param string $gradeGpa
     */
    public function setGradeGpa($gradeGpa)
    {
        $this->gradeGpa = $gradeGpa;
    }

    /**
     * Get gradeGpa
     *
     * @return string 
     */
    public function getGradeGpa()
    {
        return $this->gradeGpa;
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
     * Set uni
     *
     * @param Kareerak\FrontendBundle\Entity\University $uni
     */
    public function setUni(\Kareerak\FrontendBundle\Entity\University $uni)
    {
        $this->uni = $uni;
    }

    /**
     * Get uni
     *
     * @return Kareerak\FrontendBundle\Entity\University 
     */
    public function getUni()
    {
        return $this->uni;
    }

    /**
     * Set seeker
     *
     * @param Kareerak\FrontendBundle\Entity\Seeker $seeker
     */
    public function setSeeker(\Kareerak\FrontendBundle\Entity\Seeker $seeker)
    {
        $this->seeker = $seeker;
    }

    /**
     * Get seeker
     *
     * @return Kareerak\FrontendBundle\Entity\Seeker 
     */
    public function getSeeker()
    {
        return $this->seeker;
    }

    /**
     * Set degreeLevel
     *
     * @param Kareerak\FrontendBundle\Entity\DegreeLevel $degreeLevel
     */
    public function setDegreeLevel(\Kareerak\FrontendBundle\Entity\DegreeLevel $degreeLevel)
    {
        $this->degreeLevel = $degreeLevel;
    }

    /**
     * Get degreeLevel
     *
     * @return Kareerak\FrontendBundle\Entity\DegreeLevel 
     */
    public function getDegreeLevel()
    {
        return $this->degreeLevel;
    }
}