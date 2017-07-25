<?php

namespace AppBundle\Entity;

/**
 * Gcm
 */
class Gcm
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $regid;

    /**
     * @var integer
     */
    private $kuryeid;

    /**
     * @var string
     */
    private $email;


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
     * Set regid
     *
     * @param string $regid
     *
     * @return Gcm
     */
    public function setRegid($regid)
    {
        $this->regid = $regid;

        return $this;
    }

    /**
     * Get regid
     *
     * @return string
     */
    public function getRegid()
    {
        return $this->regid;
    }

    /**
     * Set kuryeid
     *
     * @param integer $kuryeid
     *
     * @return Gcm
     */
    public function setKuryeid($kuryeid)
    {
        $this->kuryeid = $kuryeid;

        return $this;
    }

    /**
     * Get kuryeid
     *
     * @return integer
     */
    public function getKuryeid()
    {
        return $this->kuryeid;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Gcm
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
}

