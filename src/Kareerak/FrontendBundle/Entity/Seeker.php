<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Seeker
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\SeekerRepository")
 */
class Seeker
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
     * @var string $first_name
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $first_name;

    /**
     * @var string $last_name
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $last_name;

    /**
     * @var string $website
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string $blog
     *
     * @ORM\Column(name="blog", type="string", length=255)
     */
    private $blog;

    /**
     * @var string $facebook
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string $twitter
     *
     * @ORM\Column(name="twitter", type="string", length=255)
     */
    private $twitter;

    /**
     * @var string $linked_in
     *
     * @ORM\Column(name="linked_in", type="string", length=255)
     */
    private $linked_in;

    /**
     * @var date $date_of_birth
     *
     * @ORM\Column(name="date_of_birth", type="date")
     */
    private $date_of_birth;

    /**
     * @var string $gender
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string $marital_status
     *
     * @ORM\Column(name="marital_status", type="string", length=255)
     */
    private $marital_status;

    /**
     * @var string $military_status
     *
     * @ORM\Column(name="military_status", type="string", length=255)
     */
    private $military_status;

    /**
     * @var integer $account_id
     *
     * @ORM\Column(name="account_id", type="integer")
     */
    private $account_id;

    /**
     * @var integer $avatar_attachment_id
     *
     * @ORM\Column(name="avatar_attachment_id", type="integer")
     */
    private $avatar_attachment_id;

    /**
     * @var integer $primary_cv_attachment_id
     *
     * @ORM\Column(name="primary_cv_attachment_id", type="integer")
     */
    private $primary_cv_attachment_id;


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
     * Set first_name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set website
     *
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set blog
     *
     * @param string $blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;
    }

    /**
     * Get blog
     *
     * @return string 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linked_in
     *
     * @param string $linkedIn
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linked_in = $linkedIn;
    }

    /**
     * Get linked_in
     *
     * @return string 
     */
    public function getLinkedIn()
    {
        return $this->linked_in;
    }

    /**
     * Set date_of_birth
     *
     * @param date $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->date_of_birth = $dateOfBirth;
    }

    /**
     * Get date_of_birth
     *
     * @return date 
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set marital_status
     *
     * @param string $maritalStatus
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->marital_status = $maritalStatus;
    }

    /**
     * Get marital_status
     *
     * @return string 
     */
    public function getMaritalStatus()
    {
        return $this->marital_status;
    }

    /**
     * Set military_status
     *
     * @param string $militaryStatus
     */
    public function setMilitaryStatus($militaryStatus)
    {
        $this->military_status = $militaryStatus;
    }

    /**
     * Get military_status
     *
     * @return string 
     */
    public function getMilitaryStatus()
    {
        return $this->military_status;
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
     * Set avatar_attachment_id
     *
     * @param integer $avatarAttachmentId
     */
    public function setAvatarAttachmentId($avatarAttachmentId)
    {
        $this->avatar_attachment_id = $avatarAttachmentId;
    }

    /**
     * Get avatar_attachment_id
     *
     * @return integer 
     */
    public function getAvatarAttachmentId()
    {
        return $this->avatar_attachment_id;
    }

    /**
     * Set primary_cv_attachment_id
     *
     * @param integer $primaryCvAttachmentId
     */
    public function setPrimaryCvAttachmentId($primaryCvAttachmentId)
    {
        $this->primary_cv_attachment_id = $primaryCvAttachmentId;
    }

    /**
     * Get primary_cv_attachment_id
     *
     * @return integer 
     */
    public function getPrimaryCvAttachmentId()
    {
        return $this->primary_cv_attachment_id;
    }
}