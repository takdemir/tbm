<?php

namespace AppBundle\Entity;

/**
 * Adminmessage
 */
class Adminmessage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $statu = '0';

    /**
     * @var \DateTime
     */
    private $cdate;


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
     * Set message
     *
     * @param string $message
     *
     * @return Adminmessage
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
     * Set statu
     *
     * @param integer $statu
     *
     * @return Adminmessage
     */
    public function setStatu($statu)
    {
        $this->statu = $statu;

        return $this;
    }

    /**
     * Get statu
     *
     * @return integer
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     *
     * @return Adminmessage
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;

        return $this;
    }

    /**
     * Get cdate
     *
     * @return \DateTime
     */
    public function getCdate()
    {
        return $this->cdate;
    }
}

