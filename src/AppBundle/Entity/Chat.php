<?php

namespace AppBundle\Entity;

/**
 * Chat
 */
class Chat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessionid;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $owner;

    /**
     * @var \AppBundle\Entity\Admin
     */
    private $mustemid;

    /**
     * @var \AppBundle\Entity\Kurmus01
     */
    private $refnomusteri;


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
     * Set sessionid
     *
     * @param string $sessionid
     *
     * @return Chat
     */
    public function setSessionid($sessionid)
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * Get sessionid
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Chat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return Chat
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set mustemid
     *
     * @param \AppBundle\Entity\Admin $mustemid
     *
     * @return Chat
     */
    public function setMustemid(\AppBundle\Entity\Admin $mustemid = null)
    {
        $this->mustemid = $mustemid;

        return $this;
    }

    /**
     * Get mustemid
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getMustemid()
    {
        return $this->mustemid;
    }

    /**
     * Set refnomusteri
     *
     * @param \AppBundle\Entity\Kurmus01 $refnomusteri
     *
     * @return Chat
     */
    public function setRefnomusteri(\AppBundle\Entity\Kurmus01 $refnomusteri = null)
    {
        $this->refnomusteri = $refnomusteri;

        return $this;
    }

    /**
     * Get refnomusteri
     *
     * @return \AppBundle\Entity\Kurmus01
     */
    public function getRefnomusteri()
    {
        return $this->refnomusteri;
    }
}

