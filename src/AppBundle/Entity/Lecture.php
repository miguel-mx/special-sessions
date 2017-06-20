<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lecture
 *
 * @ORM\Table(name="lecture", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="area", columns={"area"}), @ORM\Index(name="conference", columns={"conference_participant"})})
 * @ORM\Entity
 */
class Lecture
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

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
     * @var \AppBundle\Entity\Areas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Areas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area", referencedColumnName="id")
     * })
     */
    private $area;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \AppBundle\Entity\ConferenceParticipant
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ConferenceParticipant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="conference_participant", referencedColumnName="id")
     * })
     */
    private $conferenceParticipant;



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

    /**
     * Set area
     *
     * @param \AppBundle\Entity\Areas $area
     * @return Lecture
     */
    public function setArea(\AppBundle\Entity\Areas $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \AppBundle\Entity\Areas 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set iduser
     *
     * @param \AppBundle\Entity\User $iduser
     * @return Lecture
     */
    public function setIduser(\AppBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \AppBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set conferenceParticipant
     *
     * @param \AppBundle\Entity\ConferenceParticipant $conferenceParticipant
     * @return Lecture
     */
    public function setConferenceParticipant(\AppBundle\Entity\ConferenceParticipant $conferenceParticipant = null)
    {
        $this->conferenceParticipant = $conferenceParticipant;

        return $this;
    }

    /**
     * Get conferenceParticipant
     *
     * @return \AppBundle\Entity\ConferenceParticipant 
     */
    public function getConferenceParticipant()
    {
        return $this->conferenceParticipant;
    }
}
