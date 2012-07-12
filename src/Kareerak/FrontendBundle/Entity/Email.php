<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity
 */
class Email
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
     * @var string $emailAddress
     *
     * @ORM\Column(name="email_address", type="string", length=255, nullable=true)
     */
    private $emailAddress;

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
     * Set emailAddress
     *
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
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