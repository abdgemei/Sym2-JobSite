<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Attachment
 *
 * @ORM\Table(name="attachment")
 * @ORM\Entity
 */
class Attachment
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string $fileName
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=false)
     */
    private $fileName;

    /**
     * @var string $filePath
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var datetime $dateUploaded
     *
     * @ORM\Column(name="date_uploaded", type="datetime", nullable=false)
     */
    private $dateUploaded;

    /**
     * @var string $mimetype
     *
     * @ORM\Column(name="mimetype", type="string", length=255, nullable=true)
     */
    private $mimetype;

    /**
     * @var Application
     *
     * @ORM\ManyToMany(targetEntity="Application", mappedBy="attachment")
     */
    private $application;

    /**
     * @var Seeker
     *
     * @ORM\ManyToOne(targetEntity="Seeker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seeker_id", referencedColumnName="id")
     * })
     */
    private $seeker;

    public function __construct()
    {
        $this->application = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set dateUploaded
     *
     * @param datetime $dateUploaded
     */
    public function setDateUploaded($dateUploaded)
    {
        $this->dateUploaded = $dateUploaded;
    }

    /**
     * Get dateUploaded
     *
     * @return datetime 
     */
    public function getDateUploaded()
    {
        return $this->dateUploaded;
    }

    /**
     * Set mimetype
     *
     * @param string $mimetype
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;
    }

    /**
     * Get mimetype
     *
     * @return string 
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Add application
     *
     * @param Kareerak\FrontendBundle\Entity\Application $application
     */
    public function addApplication(\Kareerak\FrontendBundle\Entity\Application $application)
    {
        $this->application[] = $application;
    }

    /**
     * Get application
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set seeker
     *
     * @param Kareerak\FrontendBundle\Entity\Seeker $seeker
     */
    public function setSeeker(\Kareerak\FrontendBundle\Entity\Seeker $seeker)
    {
        $this->seeker = $seeker;
    }

    /**
     * Get seeker
     *
     * @return Kareerak\FrontendBundle\Entity\Seeker 
     */
    public function getSeeker()
    {
        return $this->seeker;
    }
}