<?php

namespace AppBundle\Entity;

/**
 * Kurgtp01
 */
class Kurgtp01
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $gidisTipiNo;

    /**
     * @var string
     */
    private $gidisTipiAdi;

    /**
     * @var string
     */
    private $renk;

    /**
     * @var float
     */
    private $katsayi;

    /**
     * @var string
     */
    private $donus = 'H';

    /**
     * @var boolean
     */
    private $donusOrani;

    /**
     * @var string
     */
    private $ekspres = 'H';

    /**
     * @var integer
     */
    private $sureno;


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
     * Set gidisTipiNo
     *
     * @param integer $gidisTipiNo
     *
     * @return Kurgtp01
     */
    public function setGidisTipiNo($gidisTipiNo)
    {
        $this->gidisTipiNo = $gidisTipiNo;

        return $this;
    }

    /**
     * Get gidisTipiNo
     *
     * @return integer
     */
    public function getGidisTipiNo()
    {
        return $this->gidisTipiNo;
    }

    /**
     * Set gidisTipiAdi
     *
     * @param string $gidisTipiAdi
     *
     * @return Kurgtp01
     */
    public function setGidisTipiAdi($gidisTipiAdi)
    {
        $this->gidisTipiAdi = $gidisTipiAdi;

        return $this;
    }

    /**
     * Get gidisTipiAdi
     *
     * @return string
     */
    public function getGidisTipiAdi()
    {
        return $this->gidisTipiAdi;
    }

    /**
     * Set renk
     *
     * @param string $renk
     *
     * @return Kurgtp01
     */
    public function setRenk($renk)
    {
        $this->renk = $renk;

        return $this;
    }

    /**
     * Get renk
     *
     * @return string
     */
    public function getRenk()
    {
        return $this->renk;
    }

    /**
     * Set katsayi
     *
     * @param float $katsayi
     *
     * @return Kurgtp01
     */
    public function setKatsayi($katsayi)
    {
        $this->katsayi = $katsayi;

        return $this;
    }

    /**
     * Get katsayi
     *
     * @return float
     */
    public function getKatsayi()
    {
        return $this->katsayi;
    }

    /**
     * Set donus
     *
     * @param string $donus
     *
     * @return Kurgtp01
     */
    public function setDonus($donus)
    {
        $this->donus = $donus;

        return $this;
    }

    /**
     * Get donus
     *
     * @return string
     */
    public function getDonus()
    {
        return $this->donus;
    }

    /**
     * Set donusOrani
     *
     * @param boolean $donusOrani
     *
     * @return Kurgtp01
     */
    public function setDonusOrani($donusOrani)
    {
        $this->donusOrani = $donusOrani;

        return $this;
    }

    /**
     * Get donusOrani
     *
     * @return boolean
     */
    public function getDonusOrani()
    {
        return $this->donusOrani;
    }

    /**
     * Set ekspres
     *
     * @param string $ekspres
     *
     * @return Kurgtp01
     */
    public function setEkspres($ekspres)
    {
        $this->ekspres = $ekspres;

        return $this;
    }

    /**
     * Get ekspres
     *
     * @return string
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Set sureno
     *
     * @param integer $sureno
     *
     * @return Kurgtp01
     */
    public function setSureno($sureno)
    {
        $this->sureno = $sureno;

        return $this;
    }

    /**
     * Get sureno
     *
     * @return integer
     */
    public function getSureno()
    {
        return $this->sureno;
    }
}

