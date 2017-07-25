<?php

namespace AppBundle\Entity;

/**
 * Kursanalpostarih
 */
class Kursanalpostarih
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kurharid;

    /**
     * @var string
     */
    private $refnoMusteri;

    /**
     * @var string
     */
    private $islem;

    /**
     * @var string
     */
    private $para;

    /**
     * @var string
     */
    private $sonCari;

    /**
     * @var \DateTime
     */
    private $tarih;


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
     * Set kurharid
     *
     * @param integer $kurharid
     *
     * @return Kursanalpostarih
     */
    public function setKurharid($kurharid)
    {
        $this->kurharid = $kurharid;

        return $this;
    }

    /**
     * Get kurharid
     *
     * @return integer
     */
    public function getKurharid()
    {
        return $this->kurharid;
    }

    /**
     * Set refnoMusteri
     *
     * @param string $refnoMusteri
     *
     * @return Kursanalpostarih
     */
    public function setRefnoMusteri($refnoMusteri)
    {
        $this->refnoMusteri = $refnoMusteri;

        return $this;
    }

    /**
     * Get refnoMusteri
     *
     * @return string
     */
    public function getRefnoMusteri()
    {
        return $this->refnoMusteri;
    }

    /**
     * Set islem
     *
     * @param string $islem
     *
     * @return Kursanalpostarih
     */
    public function setIslem($islem)
    {
        $this->islem = $islem;

        return $this;
    }

    /**
     * Get islem
     *
     * @return string
     */
    public function getIslem()
    {
        return $this->islem;
    }

    /**
     * Set para
     *
     * @param string $para
     *
     * @return Kursanalpostarih
     */
    public function setPara($para)
    {
        $this->para = $para;

        return $this;
    }

    /**
     * Get para
     *
     * @return string
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set sonCari
     *
     * @param string $sonCari
     *
     * @return Kursanalpostarih
     */
    public function setSonCari($sonCari)
    {
        $this->sonCari = $sonCari;

        return $this;
    }

    /**
     * Get sonCari
     *
     * @return string
     */
    public function getSonCari()
    {
        return $this->sonCari;
    }

    /**
     * Set tarih
     *
     * @param \DateTime $tarih
     *
     * @return Kursanalpostarih
     */
    public function setTarih($tarih)
    {
        $this->tarih = $tarih;

        return $this;
    }

    /**
     * Get tarih
     *
     * @return \DateTime
     */
    public function getTarih()
    {
        return $this->tarih;
    }
}

