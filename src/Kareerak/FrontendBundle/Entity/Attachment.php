<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Attachment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\AttachmentRepository")
 */
class Attachment
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string $file_path
     *
     * @ORM\Column(name="file_path", type="string", length=255)
     */
    private $file_path;

    /**
     * @var bigint $upload_timestamp
     *
     * @ORM\Column(name="upload_timestamp", type="bigint")
     */
    private $upload_timestamp;

    /**
     * @var string $mimetype
     *
     * @ORM\Column(name="mimetype", type="string", length=255)
     */
    private $mimetype;

    /**
     * @var integer $seeker_id
     *
     * @ORM\Column(name="seeker_id", type="integer")
     */
    private $seeker_id;


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
     * Set file_path
     *
     * @param string $filePath
     */
    public function setFilePath($filePath)
    {
        $this->file_path = $filePath;
    }

    /**
     * Get file_path
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->file_path;
    }

    /**
     * Set upload_timestamp
     *
     * @param bigint $uploadTimestamp
     */
    public function setUploadTimestamp($uploadTimestamp)
    {
        $this->upload_timestamp = $uploadTimestamp;
    }

    /**
     * Get upload_timestamp
     *
     * @return bigint 
     */
    public function getUploadTimestamp()
    {
        return $this->upload_timestamp;
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
}