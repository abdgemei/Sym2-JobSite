<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Membership_Type
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\Membership_TypeRepository")
 */
class Membership_Type
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
     * @var string $logo
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var integer $monthly_fee
     *
     * @ORM\Column(name="monthly_fee", type="integer")
     */
    private $monthly_fee;

    /**
     * @var integer $allowed_posts
     *
     * @ORM\Column(name="allowed_posts", type="integer")
     */
    private $allowed_posts;

    /**
     * @var integer $job_valid_duration_in_days
     *
     * @ORM\Column(name="job_valid_duration_in_days", type="integer")
     */
    private $job_valid_duration_in_days;


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
     * Set logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set monthly_fee
     *
     * @param integer $monthlyFee
     */
    public function setMonthlyFee($monthlyFee)
    {
        $this->monthly_fee = $monthlyFee;
    }

    /**
     * Get monthly_fee
     *
     * @return integer 
     */
    public function getMonthlyFee()
    {
        return $this->monthly_fee;
    }

    /**
     * Set allowed_posts
     *
     * @param integer $allowedPosts
     */
    public function setAllowedPosts($allowedPosts)
    {
        $this->allowed_posts = $allowedPosts;
    }

    /**
     * Get allowed_posts
     *
     * @return integer 
     */
    public function getAllowedPosts()
    {
        return $this->allowed_posts;
    }

    /**
     * Set job_valid_duration_in_days
     *
     * @param integer $jobValidDurationInDays
     */
    public function setJobValidDurationInDays($jobValidDurationInDays)
    {
        $this->job_valid_duration_in_days = $jobValidDurationInDays;
    }

    /**
     * Get job_valid_duration_in_days
     *
     * @return integer 
     */
    public function getJobValidDurationInDays()
    {
        return $this->job_valid_duration_in_days;
    }
}