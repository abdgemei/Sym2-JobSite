<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\AddressRepository")
 */
class Address
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
     * @var string $line_1
     *
     * @ORM\Column(name="line_1", type="string", length=255)
     */
    private $line_1;

    /**
     * @var string $line_2
     *
     * @ORM\Column(name="line_2", type="string", length=255)
     */
    private $line_2;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer $country_id
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $country_id;

    /**
     * @var integer $city_id
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $city_id;

    /**
     * @var integer $account_id
     *
     * @ORM\Column(name="account_id", type="integer")
     */
    private $account_id;


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
     * Set line_1
     *
     * @param string $line1
     */
    public function setLine1($line1)
    {
        $this->line_1 = $line1;
    }

    /**
     * Get line_1
     *
     * @return string 
     */
    public function getLine1()
    {
        return $this->line_1;
    }

    /**
     * Set line_2
     *
     * @param string $line2
     */
    public function setLine2($line2)
    {
        $this->line_2 = $line2;
    }

    /**
     * Get line_2
     *
     * @return string 
     */
    public function getLine2()
    {
        return $this->line_2;
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
     * Set country_id
     *
     * @param integer $countryId
     */
    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;
    }

    /**
     * Get country_id
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set city_id
     *
     * @param integer $cityId
     */
    public function setCityId($cityId)
    {
        $this->city_id = $cityId;
    }

    /**
     * Get city_id
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->city_id;
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
}