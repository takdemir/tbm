<?php

namespace AppBundle\Entity;

/**
 * Kursmt01
 */
class Kursmt01
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $semt;

    /**
     * @var integer
     */
    private $sehir;

    /**
     * @var integer
     */
    private $bolgeNo;

    /**
     * @var integer
     */
    private $e;

    /**
     * @var float
     */
    private $ekstraAboneFiyatFarki;

    /**
     * @var float
     */
    private $ekstraPesinFiyatFarki;

    /**
     * @var integer
     */
    private $avrupaAnadolu;


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
     * Set semt
     *
     * @param string $semt
     *
     * @return Kursmt01
     */
    public function setSemt($semt)
    {
        $this->semt = $semt;

        return $this;
    }

    /**
     * Get semt
     *
     * @return string
     */
    public function getSemt()
    {
        return $this->semt;
    }

    /**
     * Set sehir
     *
     * @param integer $sehir
     *
     * @return Kursmt01
     */
    public function setSehir($sehir)
    {
        $this->sehir = $sehir;

        return $this;
    }

    /**
     * Get sehir
     *
     * @return integer
     */
    public function getSehir()
    {
        return $this->sehir;
    }

    /**
     * Set bolgeNo
     *
     * @param integer $bolgeNo
     *
     * @return Kursmt01
     */
    public function setBolgeNo($bolgeNo)
    {
        $this->bolgeNo = $bolgeNo;

        return $this;
    }

    /**
     * Get bolgeNo
     *
     * @return integer
     */
    public function getBolgeNo()
    {
        return $this->bolgeNo;
    }

    /**
     * Set e
     *
     * @param integer $e
     *
     * @return Kursmt01
     */
    public function setE($e)
    {
        $this->e = $e;

        return $this;
    }

    /**
     * Get e
     *
     * @return integer
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * Set ekstraAboneFiyatFarki
     *
     * @param float $ekstraAboneFiyatFarki
     *
     * @return Kursmt01
     */
    public function setEkstraAboneFiyatFarki($ekstraAboneFiyatFarki)
    {
        $this->ekstraAboneFiyatFarki = $ekstraAboneFiyatFarki;

        return $this;
    }

    /**
     * Get ekstraAboneFiyatFarki
     *
     * @return float
     */
    public function getEkstraAboneFiyatFarki()
    {
        return $this->ekstraAboneFiyatFarki;
    }

    /**
     * Set ekstraPesinFiyatFarki
     *
     * @param float $ekstraPesinFiyatFarki
     *
     * @return Kursmt01
     */
    public function setEkstraPesinFiyatFarki($ekstraPesinFiyatFarki)
    {
        $this->ekstraPesinFiyatFarki = $ekstraPesinFiyatFarki;

        return $this;
    }

    /**
     * Get ekstraPesinFiyatFarki
     *
     * @return float
     */
    public function getEkstraPesinFiyatFarki()
    {
        return $this->ekstraPesinFiyatFarki;
    }

    /**
     * Set avrupaAnadolu
     *
     * @param integer $avrupaAnadolu
     *
     * @return Kursmt01
     */
    public function setAvrupaAnadolu($avrupaAnadolu)
    {
        $this->avrupaAnadolu = $avrupaAnadolu;

        return $this;
    }

    /**
     * Get avrupaAnadolu
     *
     * @return integer
     */
    public function getAvrupaAnadolu()
    {
        return $this->avrupaAnadolu;
    }
}

