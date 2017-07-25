<?php

namespace AppBundle\Entity;

/**
 * Kurye01
 */
class Kurye01
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kuryeNo;

    /**
     * @var string
     */
    private $kuryeAdi;

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
    private $telefon1;

    /**
     * @var string
     */
    private $gsm;

    /**
     * @var string
     */
    private $eMail;

    /**
     * @var \DateTime
     */
    private $girisTarihi;

    /**
     * @var \DateTime
     */
    private $cikisTarihi;

    /**
     * @var float
     */
    private $borc = '0';

    /**
     * @var float
     */
    private $alacak = '0';

    /**
     * @var string
     */
    private $personeltipi = 'D';

    /**
     * @var integer
     */
    private $durumu = '7';

    /**
     * @var \DateTime
     */
    private $sonIsGunu;

    /**
     * @var string
     */
    private $webUsername;

    /**
     * @var string
     */
    private $webPassword;


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
     * Set kuryeNo
     *
     * @param integer $kuryeNo
     *
     * @return Kurye01
     */
    public function setKuryeNo($kuryeNo)
    {
        $this->kuryeNo = $kuryeNo;

        return $this;
    }

    /**
     * Get kuryeNo
     *
     * @return integer
     */
    public function getKuryeNo()
    {
        return $this->kuryeNo;
    }

    /**
     * Set kuryeAdi
     *
     * @param string $kuryeAdi
     *
     * @return Kurye01
     */
    public function setKuryeAdi($kuryeAdi)
    {
        $this->kuryeAdi = $kuryeAdi;

        return $this;
    }

    /**
     * Get kuryeAdi
     *
     * @return string
     */
    public function getKuryeAdi()
    {
        return $this->kuryeAdi;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return Kurye01
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
     * @return Kurye01
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
     * Set telefon1
     *
     * @param string $telefon1
     *
     * @return Kurye01
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
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Kurye01
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return Kurye01
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set girisTarihi
     *
     * @param \DateTime $girisTarihi
     *
     * @return Kurye01
     */
    public function setGirisTarihi($girisTarihi)
    {
        $this->girisTarihi = $girisTarihi;

        return $this;
    }

    /**
     * Get girisTarihi
     *
     * @return \DateTime
     */
    public function getGirisTarihi()
    {
        return $this->girisTarihi;
    }

    /**
     * Set cikisTarihi
     *
     * @param \DateTime $cikisTarihi
     *
     * @return Kurye01
     */
    public function setCikisTarihi($cikisTarihi)
    {
        $this->cikisTarihi = $cikisTarihi;

        return $this;
    }

    /**
     * Get cikisTarihi
     *
     * @return \DateTime
     */
    public function getCikisTarihi()
    {
        return $this->cikisTarihi;
    }

    /**
     * Set borc
     *
     * @param float $borc
     *
     * @return Kurye01
     */
    public function setBorc($borc)
    {
        $this->borc = $borc;

        return $this;
    }

    /**
     * Get borc
     *
     * @return float
     */
    public function getBorc()
    {
        return $this->borc;
    }

    /**
     * Set alacak
     *
     * @param float $alacak
     *
     * @return Kurye01
     */
    public function setAlacak($alacak)
    {
        $this->alacak = $alacak;

        return $this;
    }

    /**
     * Get alacak
     *
     * @return float
     */
    public function getAlacak()
    {
        return $this->alacak;
    }

    /**
     * Set personeltipi
     *
     * @param string $personeltipi
     *
     * @return Kurye01
     */
    public function setPersoneltipi($personeltipi)
    {
        $this->personeltipi = $personeltipi;

        return $this;
    }

    /**
     * Get personeltipi
     *
     * @return string
     */
    public function getPersoneltipi()
    {
        return $this->personeltipi;
    }

    /**
     * Set durumu
     *
     * @param integer $durumu
     *
     * @return Kurye01
     */
    public function setDurumu($durumu)
    {
        $this->durumu = $durumu;

        return $this;
    }

    /**
     * Get durumu
     *
     * @return integer
     */
    public function getDurumu()
    {
        return $this->durumu;
    }

    /**
     * Set sonIsGunu
     *
     * @param \DateTime $sonIsGunu
     *
     * @return Kurye01
     */
    public function setSonIsGunu($sonIsGunu)
    {
        $this->sonIsGunu = $sonIsGunu;

        return $this;
    }

    /**
     * Get sonIsGunu
     *
     * @return \DateTime
     */
    public function getSonIsGunu()
    {
        return $this->sonIsGunu;
    }

    /**
     * Set webUsername
     *
     * @param string $webUsername
     *
     * @return Kurye01
     */
    public function setWebUsername($webUsername)
    {
        $this->webUsername = $webUsername;

        return $this;
    }

    /**
     * Get webUsername
     *
     * @return string
     */
    public function getWebUsername()
    {
        return $this->webUsername;
    }

    /**
     * Set webPassword
     *
     * @param string $webPassword
     *
     * @return Kurye01
     */
    public function setWebPassword($webPassword)
    {
        $this->webPassword = $webPassword;

        return $this;
    }

    /**
     * Get webPassword
     *
     * @return string
     */
    public function getWebPassword()
    {
        return $this->webPassword;
    }
}

