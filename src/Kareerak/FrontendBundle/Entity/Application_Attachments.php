<?php

namespace Kareerak\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kareerak\FrontendBundle\Entity\Application_Attachments
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kareerak\FrontendBundle\Entity\Application_AttachmentsRepository")
 */
class Application_Attachments
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
     * @var integer $application_id
     *
     * @ORM\Column(name="application_id", type="integer")
     */
    private $application_id;

    /**
     * @var integer $attachment_id
     *
     * @ORM\Column(name="attachment_id", type="integer")
     */
    private $attachment_id;


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
     * Set application_id
     *
     * @param integer $applicationId
     */
    public function setApplicationId($applicationId)
    {
        $this->application_id = $applicationId;
    }

    /**
     * Get application_id
     *
     * @return integer 
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Set attachment_id
     *
     * @param integer $attachmentId
     */
    public function setAttachmentId($attachmentId)
    {
        $this->attachment_id = $attachmentId;
    }

    /**
     * Get attachment_id
     *
     * @return integer 
     */
    public function getAttachmentId()
    {
        return $this->attachment_id;
    }
}