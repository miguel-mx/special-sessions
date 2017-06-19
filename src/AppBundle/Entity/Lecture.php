<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lecture
 *
 * @ORM\Table(name="lecture")
 * @ORM\Entity
 */
class Lecture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer", nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    /**
     * @var integer
     *
     * @ORM\Column(name="conference_participant", type="integer", nullable=true)
     */
    private $conferenceParticipant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="record_date", type="datetime", nullable=true)
     */
    private $recordDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="canceled", type="integer", nullable=false)
     */
    private $canceled;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Lecture
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Lecture
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set area
     *
     * @param integer $area
     * @return Lecture
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Lecture
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set conferenceParticipant
     *
     * @param integer $conferenceParticipant
     * @return Lecture
     */
    public function setConferenceParticipant($conferenceParticipant)
    {
        $this->conferenceParticipant = $conferenceParticipant;

        return $this;
    }

    /**
     * Get conferenceParticipant
     *
     * @return integer 
     */
    public function getConferenceParticipant()
    {
        return $this->conferenceParticipant;
    }

    /**
     * Set recordDate
     *
     * @param \DateTime $recordDate
     * @return Lecture
     */
    public function setRecordDate($recordDate)
    {
        $this->recordDate = $recordDate;

        return $this;
    }

    /**
     * Get recordDate
     *
     * @return \DateTime 
     */
    public function getRecordDate()
    {
        return $this->recordDate;
    }

    /**
     * Set canceled
     *
     * @param integer $canceled
     * @return Lecture
     */
    public function setCanceled($canceled)
    {
        $this->canceled = $canceled;

        return $this;
    }

    /**
     * Get canceled
     *
     * @return integer 
     */
    public function getCanceled()
    {
        return $this->canceled;
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
}
