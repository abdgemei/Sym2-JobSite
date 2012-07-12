<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity
 */
class Application
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
     * @var datetime $timestamp
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var string $notes
     *
     * @ORM\Column(name="notes", type="string", length=5000, nullable=true)
     */
    private $notes;

    /**
     * @var boolean $starred
     *
     * @ORM\Column(name="starred", type="boolean", nullable=true)
     */
    private $starred;

    /**
     * @var string $coverLetter
     *
     * @ORM\Column(name="cover_letter", type="string", length=5000, nullable=true)
     */
    private $coverLetter;

    /**
     * @var Attachment
     *
     * @ORM\ManyToMany(targetEntity="Attachment", inversedBy="application")
     * @ORM\JoinTable(name="application_attachments",
     *   joinColumns={
     *     @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="attachment_id", referencedColumnName="id")
     *   }
     * )
     */
    private $attachment;

    /**
     * @var ApplicationStatus
     *
     * @ORM\ManyToOne(targetEntity="ApplicationStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

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
     * @var Job
     *
     * @ORM\ManyToOne(targetEntity="Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_id", referencedColumnName="id")
     * })
     */
    private $job;

    public function __construct()
    {
        $this->attachment = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set timestamp
     *
     * @param datetime $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Get timestamp
     *
     * @return datetime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set notes
     *
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set starred
     *
     * @param boolean $starred
     */
    public function setStarred($starred)
    {
        $this->starred = $starred;
    }

    /**
     * Get starred
     *
     * @return boolean 
     */
    public function getStarred()
    {
        return $this->starred;
    }

    /**
     * Set coverLetter
     *
     * @param string $coverLetter
     */
    public function setCoverLetter($coverLetter)
    {
        $this->coverLetter = $coverLetter;
    }

    /**
     * Get coverLetter
     *
     * @return string 
     */
    public function getCoverLetter()
    {
        return $this->coverLetter;
    }

    /**
     * Add attachment
     *
     * @param Kareerak\FrontendBundle\Entity\Attachment $attachment
     */
    public function addAttachment(\Kareerak\FrontendBundle\Entity\Attachment $attachment)
    {
        $this->attachment[] = $attachment;
    }

    /**
     * Get attachment
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set status
     *
     * @param Kareerak\FrontendBundle\Entity\ApplicationStatus $status
     */
    public function setStatus(\Kareerak\FrontendBundle\Entity\ApplicationStatus $status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return Kareerak\FrontendBundle\Entity\ApplicationStatus 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set job
     *
     * @param Kareerak\FrontendBundle\Entity\Job $job
     */
    public function setJob(\Kareerak\FrontendBundle\Entity\Job $job)
    {
        $this->job = $job;
    }

    /**
     * Get job
     *
     * @return Kareerak\FrontendBundle\Entity\Job 
     */
    public function getJob()
    {
        return $this->job;
    }
}