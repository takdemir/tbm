<?php

namespace AppBundle\Entity;

/**
 * Krapp
 */
class Krapp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $sirketid;

    /**
     * @var string
     */
    private $sirketip;


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
     * Set sirketid
     *
     * @param integer $sirketid
     *
     * @return Krapp
     */
    public function setSirketid($sirketid)
    {
        $this->sirketid = $sirketid;

        return $this;
    }

    /**
     * Get sirketid
     *
     * @return integer
     */
    public function getSirketid()
    {
        return $this->sirketid;
    }

    /**
     * Set sirketip
     *
     * @param string $sirketip
     *
     * @return Krapp
     */
    public function setSirketip($sirketip)
    {
        $this->sirketip = $sirketip;

        return $this;
    }

    /**
     * Get sirketip
     *
     * @return string
     */
    public function getSirketip()
    {
        return $this->sirketip;
    }
}

