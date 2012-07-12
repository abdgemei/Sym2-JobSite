<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity
 */
class Order
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
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var Employer
     *
     * @ORM\ManyToOne(targetEntity="Employer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employer_id", referencedColumnName="id")
     * })
     */
    private $employer;

    /**
     * @var MembershipType
     *
     * @ORM\ManyToOne(targetEntity="MembershipType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mtype_id", referencedColumnName="id")
     * })
     */
    private $mtype;



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
     * Set employer
     *
     * @param Kareerak\FrontendBundle\Entity\Employer $employer
     */
    public function setEmployer(\Kareerak\FrontendBundle\Entity\Employer $employer)
    {
        $this->employer = $employer;
    }

    /**
     * Get employer
     *
     * @return Kareerak\FrontendBundle\Entity\Employer 
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set mtype
     *
     * @param Kareerak\FrontendBundle\Entity\MembershipType $mtype
     */
    public function setMtype(\Kareerak\FrontendBundle\Entity\MembershipType $mtype)
    {
        $this->mtype = $mtype;
    }

    /**
     * Get mtype
     *
     * @return Kareerak\FrontendBundle\Entity\MembershipType 
     */
    public function getMtype()
    {
        return $this->mtype;
    }
}