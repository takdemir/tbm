<?php

namespace AppBundle\Entity;

/**
 * Mustem
 */
class Mustem
{
    /**
     * @var integer
     */
    private $mustemid;

    /**
     * @var string
     */
    private $adisoyadi;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var string
     */
    private $email;

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
    private $kayitver;

    /**
     * @var string
     */
    private $fiyathesapla;

    /**
     * @var string
     */
    private $kurmusekle;

    /**
     * @var string
     */
    private $arsiv;

    /**
     * @var string
     */
    private $chat;

    /**
     * @var string
     */
    private $ayarlar;

    /**
     * @var \DateTime
     */
    private $cikistarihi;


    /**
     * Get mustemid
     *
     * @return integer
     */
    public function getMustemid()
    {
        return $this->mustemid;
    }

    /**
     * Set adisoyadi
     *
     * @param string $adisoyadi
     *
     * @return Mustem
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
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Mustem
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Mustem
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
     * Set kadi
     *
     * @param string $kadi
     *
     * @return Mustem
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
     * @return Mustem
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
     * Set kayitver
     *
     * @param string $kayitver
     *
     * @return Mustem
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
     * @return Mustem
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
     * Set kurmusekle
     *
     * @param string $kurmusekle
     *
     * @return Mustem
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
     * @return Mustem
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

    /**
     * Set chat
     *
     * @param string $chat
     *
     * @return Mustem
     */
    public function setChat($chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return string
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set ayarlar
     *
     * @param string $ayarlar
     *
     * @return Mustem
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
     * Set cikistarihi
     *
     * @param \DateTime $cikistarihi
     *
     * @return Mustem
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
}

