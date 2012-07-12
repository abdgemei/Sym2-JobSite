<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity
 */
class Skill
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
     * @var Job
     *
     * @ORM\ManyToMany(targetEntity="Job", mappedBy="skill")
     */
    private $job;

    /**
     * @var Seeker
     *
     * @ORM\ManyToMany(targetEntity="Seeker", mappedBy="skill")
     */
    private $seeker;

    /**
     * @var Industry
     *
     * @ORM\ManyToOne(targetEntity="Industry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     * })
     */
    private $industry;

    public function __construct()
    {
        $this->job = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add job
     *
     * @param Kareerak\FrontendBundle\Entity\Job $job
     */
    public function addJob(\Kareerak\FrontendBundle\Entity\Job $job)
    {
        $this->job[] = $job;
    }

    /**
     * Get job
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getJob()
    {
        return $this->job;
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
}