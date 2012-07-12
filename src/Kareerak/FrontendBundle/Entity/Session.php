<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string $sessionId
     *
     * @ORM\Column(name="session_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var text $sessionValue
     *
     * @ORM\Column(name="session_value", type="text", nullable=true)
     */
    private $sessionValue;

    /**
     * @var integer $sessionTime
     *
     * @ORM\Column(name="session_time", type="integer", nullable=true)
     */
    private $sessionTime;



    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionValue
     *
     * @param text $sessionValue
     */
    public function setSessionValue($sessionValue)
    {
        $this->sessionValue = $sessionValue;
    }

    /**
     * Get sessionValue
     *
     * @return text 
     */
    public function getSessionValue()
    {
        return $this->sessionValue;
    }

    /**
     * Set sessionTime
     *
     * @param integer $sessionTime
     */
    public function setSessionTime($sessionTime)
    {
        $this->sessionTime = $sessionTime;
    }

    /**
     * Get sessionTime
     *
     * @return integer 
     */
    public function getSessionTime()
    {
        return $this->sessionTime;
    }
}