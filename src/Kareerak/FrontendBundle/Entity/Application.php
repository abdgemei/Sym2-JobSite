<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Application
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\ApplicationRepository")
 */
class Application
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
     * @var bigint $applied_timestamp
     *
     * @ORM\Column(name="applied_timestamp", type="bigint")
     */
    private $applied_timestamp;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string $notes
     *
     * @ORM\Column(name="notes", type="string", length=5000)
     */
    private $notes;

    /**
     * @var boolean $starred
     *
     * @ORM\Column(name="starred", type="boolean")
     */
    private $starred;

    /**
     * @var string $cover_letter
     *
     * @ORM\Column(name="cover_letter", type="string", length=5000)
     */
    private $cover_letter;

    /**
     * @var integer $expected_salary
     *
     * @ORM\Column(name="expected_salary", type="integer")
     */
    private $expected_salary;

    /**
     * @var integer $seeker_id
     *
     * @ORM\Column(name="seeker_id", type="integer")
     */
    private $seeker_id;

    /**
     * @var integer $job_id
     *
     * @ORM\Column(name="job_id", type="integer")
     */
    private $job_id;


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
     * Set applied_timestamp
     *
     * @param bigint $appliedTimestamp
     */
    public function setAppliedTimestamp($appliedTimestamp)
    {
        $this->applied_timestamp = $appliedTimestamp;
    }

    /**
     * Get applied_timestamp
     *
     * @return bigint 
     */
    public function getAppliedTimestamp()
    {
        return $this->applied_timestamp;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set cover_letter
     *
     * @param string $coverLetter
     */
    public function setCoverLetter($coverLetter)
    {
        $this->cover_letter = $coverLetter;
    }

    /**
     * Get cover_letter
     *
     * @return string 
     */
    public function getCoverLetter()
    {
        return $this->cover_letter;
    }

    /**
     * Set expected_salary
     *
     * @param integer $expectedSalary
     */
    public function setExpectedSalary($expectedSalary)
    {
        $this->expected_salary = $expectedSalary;
    }

    /**
     * Get expected_salary
     *
     * @return integer 
     */
    public function getExpectedSalary()
    {
        return $this->expected_salary;
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

    /**
     * Set job_id
     *
     * @param integer $jobId
     */
    public function setJobId($jobId)
    {
        $this->job_id = $jobId;
    }

    /**
     * Get job_id
     *
     * @return integer 
     */
    public function getJobId()
    {
        return $this->job_id;
    }
}