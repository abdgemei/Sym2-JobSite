<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Employer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\EmployerRepository")
 */
class Employer
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer $number_of_employees
     *
     * @ORM\Column(name="number_of_employees", type="integer")
     */
    private $number_of_employees;

    /**
     * @var string $weekends
     *
     * @ORM\Column(name="weekends", type="string", length=255)
     */
    private $weekends;

    /**
     * @var string $working_hours
     *
     * @ORM\Column(name="working_hours", type="string", length=255)
     */
    private $working_hours;

    /**
     * @var integer $account_id
     *
     * @ORM\Column(name="account_id", type="integer")
     */
    private $account_id;

    /**
     * @var integer $logo_attachment_id
     *
     * @ORM\Column(name="logo_attachment_id", type="integer")
     */
    private $logo_attachment_id;


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
     * Set number_of_employees
     *
     * @param integer $numberOfEmployees
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->number_of_employees = $numberOfEmployees;
    }

    /**
     * Get number_of_employees
     *
     * @return integer 
     */
    public function getNumberOfEmployees()
    {
        return $this->number_of_employees;
    }

    /**
     * Set weekends
     *
     * @param string $weekends
     */
    public function setWeekends($weekends)
    {
        $this->weekends = $weekends;
    }

    /**
     * Get weekends
     *
     * @return string 
     */
    public function getWeekends()
    {
        return $this->weekends;
    }

    /**
     * Set working_hours
     *
     * @param string $workingHours
     */
    public function setWorkingHours($workingHours)
    {
        $this->working_hours = $workingHours;
    }

    /**
     * Get working_hours
     *
     * @return string 
     */
    public function getWorkingHours()
    {
        return $this->working_hours;
    }

    /**
     * Set account_id
     *
     * @param integer $accountId
     */
    public function setAccountId($accountId)
    {
        $this->account_id = $accountId;
    }

    /**
     * Get account_id
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Set logo_attachment_id
     *
     * @param integer $logoAttachmentId
     */
    public function setLogoAttachmentId($logoAttachmentId)
    {
        $this->logo_attachment_id = $logoAttachmentId;
    }

    /**
     * Get logo_attachment_id
     *
     * @return integer 
     */
    public function getLogoAttachmentId()
    {
        return $this->logo_attachment_id;
    }
}