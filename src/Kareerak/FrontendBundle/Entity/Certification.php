<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Certification
 *
 * @ORM\Table(name="certification")
 * @ORM\Entity
 */
class Certification
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
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=true)
     */
    private $description;

    /**
     * @var date $yearCertified
     *
     * @ORM\Column(name="year_certified", type="date", nullable=true)
     */
    private $yearCertified;

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
     * @var string $institutionName
     *
     * @ORM\Column(name="institution_name", type="string", length=255, nullable=true)
     */
    private $institutionName;

    /**
     * @var Seeker
     *
     * @ORM\ManyToMany(targetEntity="Seeker", mappedBy="certification")
     */
    private $seeker;

    public function __construct()
    {
        $this->seeker = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set yearCertified
     *
     * @param date $yearCertified
     */
    public function setYearCertified($yearCertified)
    {
        $this->yearCertified = $yearCertified;
    }

    /**
     * Get yearCertified
     *
     * @return date 
     */
    public function getYearCertified()
    {
        return $this->yearCertified;
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
     * Set institutionName
     *
     * @param string $institutionName
     */
    public function setInstitutionName($institutionName)
    {
        $this->institutionName = $institutionName;
    }

    /**
     * Get institutionName
     *
     * @return string 
     */
    public function getInstitutionName()
    {
        return $this->institutionName;
    }

    /**
     * Add seeker
     *
     * @param Kareerak\FrontendBundle\Entity\Seeker $seeker
     */
    public function addSeeker(\Kareerak\FrontendBundle\Entity\Seeker $seeker)
    {
        $this->seeker[] = $seeker;
    }

    /**
     * Get seeker
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSeeker()
    {
        return $this->seeker;
    }
}