<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Language
 *
 * @ORM\Table(name="language")
 * @ORM\Entity
 */
class Language
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
     * @var integer $speakingPopulation
     *
     * @ORM\Column(name="speaking_population", type="integer", nullable=true)
     */
    private $speakingPopulation;

    /**
     * @var Seeker
     *
     * @ORM\ManyToMany(targetEntity="Seeker", inversedBy="language")
     * @ORM\JoinTable(name="seeker_language",
     *   joinColumns={
     *     @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="seeker_id", referencedColumnName="id")
     *   }
     * )
     */
    private $seeker;

    public function __construct()
    {
        $this->seeker = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set speakingPopulation
     *
     * @param integer $speakingPopulation
     */
    public function setSpeakingPopulation($speakingPopulation)
    {
        $this->speakingPopulation = $speakingPopulation;
    }

    /**
     * Get speakingPopulation
     *
     * @return integer 
     */
    public function getSpeakingPopulation()
    {
        return $this->speakingPopulation;
    }

    /**
     * Add seeker
     *
     * @param Kareerak\FrontendBundle\Entity\Seeker $seeker
     */
    public function addSeeker(\Kareerak\FrontendBundle\Entity\Seeker $seeker)
    {
        $this->seeker[] = $seeker;
    }

    /**
     * Get seeker
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSeeker()
    {
        return $this->seeker;
    }
}