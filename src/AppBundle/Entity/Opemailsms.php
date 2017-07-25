<?php

namespace AppBundle\Entity;

/**
 * Opemailsms
 */
class Opemailsms
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email = 'E';

    /**
     * @var string
     */
    private $sms = 'E';


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
     * Set email
     *
     * @param string $email
     *
     * @return Opemailsms
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sms
     *
     * @param string $sms
     *
     * @return Opemailsms
     */
    public function setSms($sms)
    {
        $this->sms = $sms;

        return $this;
    }

    /**
     * Get sms
     *
     * @return string
     */
    public function getSms()
    {
        return $this->sms;
    }
}

