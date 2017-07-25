<?php

namespace AppBundle\Entity;

/**
 * Operator
 */
class Operator
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $kadi;

    /**
     * @var string
     */
    private $sifre;

    /**
     * @var string
     */
    private $adisoyadi;

    /**
     * @var string
     */
    private $telefon1;

    /**
     * @var string
     */
    private $telefon2;

    /**
     * @var string
     */
    private $telefon3;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var string
     */
    private $semt;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $cikistarihi;

    /**
     * @var string
     */
    private $kayitver;

    /**
     * @var string
     */
    private $fiyathesapla;

    /**
     * @var string
     */
    private $ayarlar;

    /**
     * @var string
     */
    private $kurmusekle;

    /**
     * @var string
     */
    private $arsiv;


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
     * Set kadi
     *
     * @param string $kadi
     *
     * @return Operator
     */
    public function setKadi($kadi)
    {
        $this->kadi = $kadi;

        return $this;
    }

    /**
     * Get kadi
     *
     * @return string
     */
    public function getKadi()
    {
        return $this->kadi;
    }

    /**
     * Set sifre
     *
     * @param string $sifre
     *
     * @return Operator
     */
    public function setSifre($sifre)
    {
        $this->sifre = $sifre;

        return $this;
    }

    /**
     * Get sifre
     *
     * @return string
     */
    public function getSifre()
    {
        return $this->sifre;
    }

    /**
     * Set adisoyadi
     *
     * @param string $adisoyadi
     *
     * @return Operator
     */
    public function setAdisoyadi($adisoyadi)
    {
        $this->adisoyadi = $adisoyadi;

        return $this;
    }

    /**
     * Get adisoyadi
     *
     * @return string
     */
    public function getAdisoyadi()
    {
        return $this->adisoyadi;
    }

    /**
     * Set telefon1
     *
     * @param string $telefon1
     *
     * @return Operator
     */
    public function setTelefon1($telefon1)
    {
        $this->telefon1 = $telefon1;

        return $this;
    }

    /**
     * Get telefon1
     *
     * @return string
     */
    public function getTelefon1()
    {
        return $this->telefon1;
    }

    /**
     * Set telefon2
     *
     * @param string $telefon2
     *
     * @return Operator
     */
    public function setTelefon2($telefon2)
    {
        $this->telefon2 = $telefon2;

        return $this;
    }

    /**
     * Get telefon2
     *
     * @return string
     */
    public function getTelefon2()
    {
        return $this->telefon2;
    }

    /**
     * Set telefon3
     *
     * @param string $telefon3
     *
     * @return Operator
     */
    public function setTelefon3($telefon3)
    {
        $this->telefon3 = $telefon3;

        return $this;
    }

    /**
     * Get telefon3
     *
     * @return string
     */
    public function getTelefon3()
    {
        return $this->telefon3;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return Operator
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set semt
     *
     * @param string $semt
     *
     * @return Operator
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
     * Set email
     *
     * @param string $email
     *
     * @return Operator
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
     * Set cikistarihi
     *
     * @param \DateTime $cikistarihi
     *
     * @return Operator
     */
    public function setCikistarihi($cikistarihi)
    {
        $this->cikistarihi = $cikistarihi;

        return $this;
    }

    /**
     * Get cikistarihi
     *
     * @return \DateTime
     */
    public function getCikistarihi()
    {
        return $this->cikistarihi;
    }

    /**
     * Set kayitver
     *
     * @param string $kayitver
     *
     * @return Operator
     */
    public function setKayitver($kayitver)
    {
        $this->kayitver = $kayitver;

        return $this;
    }

    /**
     * Get kayitver
     *
     * @return string
     */
    public function getKayitver()
    {
        return $this->kayitver;
    }

    /**
     * Set fiyathesapla
     *
     * @param string $fiyathesapla
     *
     * @return Operator
     */
    public function setFiyathesapla($fiyathesapla)
    {
        $this->fiyathesapla = $fiyathesapla;

        return $this;
    }

    /**
     * Get fiyathesapla
     *
     * @return string
     */
    public function getFiyathesapla()
    {
        return $this->fiyathesapla;
    }

    /**
     * Set ayarlar
     *
     * @param string $ayarlar
     *
     * @return Operator
     */
    public function setAyarlar($ayarlar)
    {
        $this->ayarlar = $ayarlar;

        return $this;
    }

    /**
     * Get ayarlar
     *
     * @return string
     */
    public function getAyarlar()
    {
        return $this->ayarlar;
    }

    /**
     * Set kurmusekle
     *
     * @param string $kurmusekle
     *
     * @return Operator
     */
    public function setKurmusekle($kurmusekle)
    {
        $this->kurmusekle = $kurmusekle;

        return $this;
    }

    /**
     * Get kurmusekle
     *
     * @return string
     */
    public function getKurmusekle()
    {
        return $this->kurmusekle;
    }

    /**
     * Set arsiv
     *
     * @param string $arsiv
     *
     * @return Operator
     */
    public function setArsiv($arsiv)
    {
        $this->arsiv = $arsiv;

        return $this;
    }

    /**
     * Get arsiv
     *
     * @return string
     */
    public function getArsiv()
    {
        return $this->arsiv;
    }
}

