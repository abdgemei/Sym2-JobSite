<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Job_Skill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\Job_SkillRepository")
 */
class Job_Skill
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
     * @var integer $job_id
     *
     * @ORM\Column(name="job_id", type="integer")
     */
    private $job_id;

    /**
     * @var integer $skill_id
     *
     * @ORM\Column(name="skill_id", type="integer")
     */
    private $skill_id;


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

    /**
     * Set skill_id
     *
     * @param integer $skillId
     */
    public function setSkillId($skillId)
    {
        $this->skill_id = $skillId;
    }

    /**
     * Get skill_id
     *
     * @return integer 
     */
    public function getSkillId()
    {
        return $this->skill_id;
    }
}