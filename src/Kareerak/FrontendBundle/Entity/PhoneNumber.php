<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\PhoneNumber
 *
 * @ORM\Table(name="phone_number")
 * @ORM\Entity
 */
class PhoneNumber
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
     * @var string $number
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
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
}