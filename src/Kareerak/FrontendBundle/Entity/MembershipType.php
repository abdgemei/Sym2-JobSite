<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\MembershipType
 *
 * @ORM\Table(name="membership_type")
 * @ORM\Entity
 */
class MembershipType
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
     * @var string $logoPath
     *
     * @ORM\Column(name="logo_path", type="string", length=255, nullable=true)
     */
    private $logoPath;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var string $monthlyFee
     *
     * @ORM\Column(name="monthly_fee", type="string", length=255, nullable=true)
     */
    private $monthlyFee;

    /**
     * @var integer $allowedPosts
     *
     * @ORM\Column(name="allowed_posts", type="integer", nullable=true)
     */
    private $allowedPosts;

    /**
     * @var integer $daysPostIsValid
     *
     * @ORM\Column(name="days_post_is_valid", type="integer", nullable=true)
     */
    private $daysPostIsValid;



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
     * Set logoPath
     *
     * @param string $logoPath
     */
    public function setLogoPath($logoPath)
    {
        $this->logoPath = $logoPath;
    }

    /**
     * Get logoPath
     *
     * @return string 
     */
    public function getLogoPath()
    {
        return $this->logoPath;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set monthlyFee
     *
     * @param string $monthlyFee
     */
    public function setMonthlyFee($monthlyFee)
    {
        $this->monthlyFee = $monthlyFee;
    }

    /**
     * Get monthlyFee
     *
     * @return string 
     */
    public function getMonthlyFee()
    {
        return $this->monthlyFee;
    }

    /**
     * Set allowedPosts
     *
     * @param integer $allowedPosts
     */
    public function setAllowedPosts($allowedPosts)
    {
        $this->allowedPosts = $allowedPosts;
    }

    /**
     * Get allowedPosts
     *
     * @return integer 
     */
    public function getAllowedPosts()
    {
        return $this->allowedPosts;
    }

    /**
     * Set daysPostIsValid
     *
     * @param integer $daysPostIsValid
     */
    public function setDaysPostIsValid($daysPostIsValid)
    {
        $this->daysPostIsValid = $daysPostIsValid;
    }

    /**
     * Get daysPostIsValid
     *
     * @return integer 
     */
    public function getDaysPostIsValid()
    {
        return $this->daysPostIsValid;
    }
}