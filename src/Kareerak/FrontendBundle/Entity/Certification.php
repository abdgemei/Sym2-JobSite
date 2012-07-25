<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Certification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\CertificationRepository")
 */
class Certification
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=5000)
     */
    private $description;

    /**
     * @var date $year_earned
     *
     * @ORM\Column(name="year_earned", type="date")
     */
    private $year_earned;

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
     * @var string $institution_name
     *
     * @ORM\Column(name="institution_name", type="string", length=255)
     */
    private $institution_name;


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
     * Set year_earned
     *
     * @param date $yearEarned
     */
    public function setYearEarned($yearEarned)
    {
        $this->year_earned = $yearEarned;
    }

    /**
     * Get year_earned
     *
     * @return date 
     */
    public function getYearEarned()
    {
        return $this->year_earned;
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
     * Set institution_name
     *
     * @param string $institutionName
     */
    public function setInstitutionName($institutionName)
    {
        $this->institution_name = $institutionName;
    }

    /**
     * Get institution_name
     *
     * @return string 
     */
    public function getInstitutionName()
    {
        return $this->institution_name;
    }
}