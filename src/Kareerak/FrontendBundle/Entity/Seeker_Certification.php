<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Seeker_Certification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\Seeker_CertificationRepository")
 */
class Seeker_Certification
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
     * @var integer $certification_id
     *
     * @ORM\Column(name="certification_id", type="integer")
     */
    private $certification_id;

    /**
     * @var string $grade
     *
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @var string $honours
     *
     * @ORM\Column(name="honours", type="string", length=255)
     */
    private $honours;


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
     * Set certification_id
     *
     * @param integer $certificationId
     */
    public function setCertificationId($certificationId)
    {
        $this->certification_id = $certificationId;
    }

    /**
     * Get certification_id
     *
     * @return integer 
     */
    public function getCertificationId()
    {
        return $this->certification_id;
    }

    /**
     * Set grade
     *
     * @param string $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set honours
     *
     * @param string $honours
     */
    public function setHonours($honours)
    {
        $this->honours = $honours;
    }

    /**
     * Get honours
     *
     * @return string 
     */
    public function getHonours()
    {
        return $this->honours;
    }
}