<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConferenceParticipant
 *
 * @ORM\Table(name="conference_participant")
 * @ORM\Entity
 */
class ConferenceParticipant
{
    /**
     * @var string
     *
     * @ORM\Column(name="conference_participant", type="string", length=50, nullable=true)
     */
    private $conferenceParticipant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set conferenceParticipant
     *
     * @param string $conferenceParticipant
     * @return ConferenceParticipant
     */
    public function setConferenceParticipant($conferenceParticipant)
    {
        $this->conferenceParticipant = $conferenceParticipant;

        return $this;
    }

    /**
     * Get conferenceParticipant
     *
     * @return string 
     */
    public function getConferenceParticipant()
    {
        return $this->conferenceParticipant;
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

    public function __toString()
    {
        return (string) $this->getConferenceParticipant();
    }
}
