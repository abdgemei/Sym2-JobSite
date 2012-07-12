<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Seeker
 *
 * @ORM\Table(name="seeker")
 * @ORM\Entity
 */
class Seeker
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
     * @var string $fname
     *
     * @ORM\Column(name="fname", type="string", length=255, nullable=true)
     */
    private $fname;

    /**
     * @var string $lname
     *
     * @ORM\Column(name="lname", type="string", length=255, nullable=true)
     */
    private $lname;

    /**
     * @var string $addressLine1
     *
     * @ORM\Column(name="address_line_1", type="string", length=255, nullable=true)
     */
    private $addressLine1;

    /**
     * @var string $addressLine2
     *
     * @ORM\Column(name="address_line_2", type="string", length=255, nullable=true)
     */
    private $addressLine2;

    /**
     * @var string $website
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string $blog
     *
     * @ORM\Column(name="blog", type="string", length=255, nullable=true)
     */
    private $blog;

    /**
     * @var string $facebookUri
     *
     * @ORM\Column(name="facebook_uri", type="string", length=255, nullable=true)
     */
    private $facebookUri;

    /**
     * @var string $twitterUri
     *
     * @ORM\Column(name="twitter_uri", type="string", length=255, nullable=true)
     */
    private $twitterUri;

    /**
     * @var string $linkedinUri
     *
     * @ORM\Column(name="linkedin_uri", type="string", length=255, nullable=true)
     */
    private $linkedinUri;

    /**
     * @var date $dob
     *
     * @ORM\Column(name="dob", type="date", nullable=true)
     */
    private $dob;

    /**
     * @var string $gender
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var string $maritalStatus
     *
     * @ORM\Column(name="marital_status", type="string", length=255, nullable=true)
     */
    private $maritalStatus;

    /**
     * @var Certification
     *
     * @ORM\ManyToMany(targetEntity="Certification", inversedBy="seeker")
     * @ORM\JoinTable(name="seeker_certification",
     *   joinColumns={
     *     @ORM\JoinColumn(name="seeker_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="certification_id", referencedColumnName="id")
     *   }
     * )
     */
    private $certification;

    /**
     * @var Language
     *
     * @ORM\ManyToMany(targetEntity="Language", mappedBy="seeker")
     */
    private $language;

    /**
     * @var Skill
     *
     * @ORM\ManyToMany(targetEntity="Skill", inversedBy="seeker")
     * @ORM\JoinTable(name="seeker_skill",
     *   joinColumns={
     *     @ORM\JoinColumn(name="seeker_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="skill_id", referencedColumnName="id")
     *   }
     * )
     */
    private $skill;

    /**
     * @var Account
     *
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var Attachment
     *
     * @ORM\ManyToOne(targetEntity="Attachment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="att_cv_id", referencedColumnName="id")
     * })
     */
    private $attCv;

    /**
     * @var Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var Area
     *
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * })
     */
    private $area;

    public function __construct()
    {
        $this->certification = new \Doctrine\Common\Collections\ArrayCollection();
    $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    $this->skill = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fname
     *
     * @param string $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
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
     * Set facebookUri
     *
     * @param string $facebookUri
     */
    public function setFacebookUri($facebookUri)
    {
        $this->facebookUri = $facebookUri;
    }

    /**
     * Get facebookUri
     *
     * @return string 
     */
    public function getFacebookUri()
    {
        return $this->facebookUri;
    }

    /**
     * Set twitterUri
     *
     * @param string $twitterUri
     */
    public function setTwitterUri($twitterUri)
    {
        $this->twitterUri = $twitterUri;
    }

    /**
     * Get twitterUri
     *
     * @return string 
     */
    public function getTwitterUri()
    {
        return $this->twitterUri;
    }

    /**
     * Set linkedinUri
     *
     * @param string $linkedinUri
     */
    public function setLinkedinUri($linkedinUri)
    {
        $this->linkedinUri = $linkedinUri;
    }

    /**
     * Get linkedinUri
     *
     * @return string 
     */
    public function getLinkedinUri()
    {
        return $this->linkedinUri;
    }

    /**
     * Set dob
     *
     * @param date $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * Get dob
     *
     * @return date 
     */
    public function getDob()
    {
        return $this->dob;
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
     * Set maritalStatus
     *
     * @param string $maritalStatus
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * Get maritalStatus
     *
     * @return string 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Add certification
     *
     * @param Kareerak\FrontendBundle\Entity\Certification $certification
     */
    public function addCertification(\Kareerak\FrontendBundle\Entity\Certification $certification)
    {
        $this->certification[] = $certification;
    }

    /**
     * Get certification
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Add language
     *
     * @param Kareerak\FrontendBundle\Entity\Language $language
     */
    public function addLanguage(\Kareerak\FrontendBundle\Entity\Language $language)
    {
        $this->language[] = $language;
    }

    /**
     * Get language
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Add skill
     *
     * @param Kareerak\FrontendBundle\Entity\Skill $skill
     */
    public function addSkill(\Kareerak\FrontendBundle\Entity\Skill $skill)
    {
        $this->skill[] = $skill;
    }

    /**
     * Get skill
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set account
     *
     * @param Kareerak\FrontendBundle\Entity\Account $account
     */
    public function setAccount(\Kareerak\FrontendBundle\Entity\Account $account)
    {
        $this->account = $account;
    }

    /**
     * Get account
     *
     * @return Kareerak\FrontendBundle\Entity\Account 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set attCv
     *
     * @param Kareerak\FrontendBundle\Entity\Attachment $attCv
     */
    public function setAttCv(\Kareerak\FrontendBundle\Entity\Attachment $attCv)
    {
        $this->attCv = $attCv;
    }

    /**
     * Get attCv
     *
     * @return Kareerak\FrontendBundle\Entity\Attachment 
     */
    public function getAttCv()
    {
        return $this->attCv;
    }

    /**
     * Set country
     *
     * @param Kareerak\FrontendBundle\Entity\Country $country
     */
    public function setCountry(\Kareerak\FrontendBundle\Entity\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Kareerak\FrontendBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param Kareerak\FrontendBundle\Entity\City $city
     */
    public function setCity(\Kareerak\FrontendBundle\Entity\City $city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return Kareerak\FrontendBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set area
     *
     * @param Kareerak\FrontendBundle\Entity\Area $area
     */
    public function setArea(\Kareerak\FrontendBundle\Entity\Area $area)
    {
        $this->area = $area;
    }

    /**
     * Get area
     *
     * @return Kareerak\FrontendBundle\Entity\Area 
     */
    public function getArea()
    {
        return $this->area;
    }
}