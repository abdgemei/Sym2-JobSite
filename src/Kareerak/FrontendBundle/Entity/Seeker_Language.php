<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Seeker_Language
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\Seeker_LanguageRepository")
 */
class Seeker_Language
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
     * @var integer $seeker_id
     *
     * @ORM\Column(name="seeker_id", type="integer")
     */
    private $seeker_id;

    /**
     * @var integer $language_id
     *
     * @ORM\Column(name="language_id", type="integer")
     */
    private $language_id;

    /**
     * @var string $competency_level
     *
     * @ORM\Column(name="competency_level", type="string", length=255)
     */
    private $competency_level;


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
     * Set seeker_id
     *
     * @param integer $seekerId
     */
    public function setSeekerId($seekerId)
    {
        $this->seeker_id = $seekerId;
    }

    /**
     * Get seeker_id
     *
     * @return integer 
     */
    public function getSeekerId()
    {
        return $this->seeker_id;
    }

    /**
     * Set language_id
     *
     * @param integer $languageId
     */
    public function setLanguageId($languageId)
    {
        $this->language_id = $languageId;
    }

    /**
     * Get language_id
     *
     * @return integer 
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * Set competency_level
     *
     * @param string $competencyLevel
     */
    public function setCompetencyLevel($competencyLevel)
    {
        $this->competency_level = $competencyLevel;
    }

    /**
     * Get competency_level
     *
     * @return string 
     */
    public function getCompetencyLevel()
    {
        return $this->competency_level;
    }
}