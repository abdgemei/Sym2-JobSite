<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Industry_Skill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\Industry_SkillRepository")
 */
class Industry_Skill
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
     * @var integer $skill_id
     *
     * @ORM\Column(name="skill_id", type="integer")
     */
    private $skill_id;

    /**
     * @var integer $industry_id
     *
     * @ORM\Column(name="industry_id", type="integer")
     */
    private $industry_id;


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
     * Set skill_id
     *
     * @param integer $skillId
     */
    public function setSkillId($skillId)
    {
        $this->skill_id = $skillId;
    }

    /**
     * Get skill_id
     *
     * @return integer 
     */
    public function getSkillId()
    {
        return $this->skill_id;
    }

    /**
     * Set industry_id
     *
     * @param integer $industryId
     */
    public function setIndustryId($industryId)
    {
        $this->industry_id = $industryId;
    }

    /**
     * Get industry_id
     *
     * @return integer 
     */
    public function getIndustryId()
    {
        return $this->industry_id;
    }
}