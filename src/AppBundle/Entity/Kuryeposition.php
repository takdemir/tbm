<?php

namespace AppBundle\Entity;

/**
 * Kuryeposition
 */
class Kuryeposition
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kuryeid;

    /**
     * @var integer
     */
    private $kuryeno;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var \DateTime
     */
    private $cdate;

    /**
     * @var string
     */
    private $timestamp;


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
     * Set kuryeid
     *
     * @param integer $kuryeid
     *
     * @return Kuryeposition
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
     * Set kuryeno
     *
     * @param integer $kuryeno
     *
     * @return Kuryeposition
     */
    public function setKuryeno($kuryeno)
    {
        $this->kuryeno = $kuryeno;

        return $this;
    }

    /**
     * Get kuryeno
     *
     * @return integer
     */
    public function getKuryeno()
    {
        return $this->kuryeno;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Kuryeposition
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Kuryeposition
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     *
     * @return Kuryeposition
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

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return Kuryeposition
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}

