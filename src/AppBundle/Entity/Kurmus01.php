<?php

namespace AppBundle\Entity;

/**
 * Kurmus01
 */
class Kurmus01
{
    /**
     * @var integer
     */
    private $refnoMusteri;

    /**
     * @var string
     */
    private $aktif = 'True';

    /**
     * @var string
     */
    private $hesapTipi = 'M';

    /**
     * @var string
     */
    private $musteriAdi;

    /**
     * @var string
     */
    private $musteriTipi;

    /**
     * @var integer
     */
    private $islemTipi;

    /**
     * @var integer
     */
    private $fiyatNo;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var string
     */
    private $ticariUnvan;

    /**
     * @var boolean
     */
    private $bolgeNo;

    /**
     * @var string
     */
    private $postaKodu;

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
    private $fax;

    /**
     * @var string
     */
    private $gsm;

    /**
     * @var string
     */
    private $eMail;

    /**
     * @var string
     */
    private $eMail2;

    /**
     * @var string
     */
    private $vergiDairesi;

    /**
     * @var string
     */
    private $vergiNo;

    /**
     * @var \DateTime
     */
    private $sozlesmeBitisTarihi;

    /**
     * @var string
     */
    private $mailKontrol = 'H';

    /**
     * @var string
     */
    private $beklemeKontrol = 'H';

    /**
     * @var string
     */
    private $webUsername;

    /**
     * @var string
     */
    private $webPassword;

    /**
     * @var string
     */
    private $kopruKontrol = 'H';

    /**
     * @var float
     */
    private $iskontoorani;

    /**
     * @var string
     */
    private $gf = '0';

    /**
     * @var string
     */
    private $gfP = 'H';

    /**
     * @var string
     */
    private $kayitbildirimi = 'H';

    /**
     * @var float
     */
    private $pesinkopruucreti;

    /**
     * @var float
     */
    private $abonekopruucreti;

    /**
     * @var string
     */
    private $karaliste = 'H';

    /**
     * @var string
     */
    private $ekstralptal = 'False';

    /**
     * @var string
     */
    private $onaykodu;

    /**
     * @var string
     */
    private $f1Not;

    /**
     * @var string
     */
    private $smsKontrol = 'H';

    /**
     * @var integer
     */
    private $musteriYetkisi = '0';

    /**
     * @var \AppBundle\Entity\City
     */
    private $sehir;

    /**
     * @var \AppBundle\Entity\Kursmt01
     */
    private $semt;


    /**
     * Get refnoMusteri
     *
     * @return integer
     */
    public function getRefnoMusteri()
    {
        return $this->refnoMusteri;
    }

    /**
     * Set aktif
     *
     * @param string $aktif
     *
     * @return Kurmus01
     */
    public function setAktif($aktif)
    {
        $this->aktif = $aktif;

        return $this;
    }

    /**
     * Get aktif
     *
     * @return string
     */
    public function getAktif()
    {
        return $this->aktif;
    }

    /**
     * Set hesapTipi
     *
     * @param string $hesapTipi
     *
     * @return Kurmus01
     */
    public function setHesapTipi($hesapTipi)
    {
        $this->hesapTipi = $hesapTipi;

        return $this;
    }

    /**
     * Get hesapTipi
     *
     * @return string
     */
    public function getHesapTipi()
    {
        return $this->hesapTipi;
    }

    /**
     * Set musteriAdi
     *
     * @param string $musteriAdi
     *
     * @return Kurmus01
     */
    public function setMusteriAdi($musteriAdi)
    {
        $this->musteriAdi = $musteriAdi;

        return $this;
    }

    /**
     * Get musteriAdi
     *
     * @return string
     */
    public function getMusteriAdi()
    {
        return $this->musteriAdi;
    }

    /**
     * Set musteriTipi
     *
     * @param string $musteriTipi
     *
     * @return Kurmus01
     */
    public function setMusteriTipi($musteriTipi)
    {
        $this->musteriTipi = $musteriTipi;

        return $this;
    }

    /**
     * Get musteriTipi
     *
     * @return string
     */
    public function getMusteriTipi()
    {
        return $this->musteriTipi;
    }

    /**
     * Set islemTipi
     *
     * @param integer $islemTipi
     *
     * @return Kurmus01
     */
    public function setIslemTipi($islemTipi)
    {
        $this->islemTipi = $islemTipi;

        return $this;
    }

    /**
     * Get islemTipi
     *
     * @return integer
     */
    public function getIslemTipi()
    {
        return $this->islemTipi;
    }

    /**
     * Set fiyatNo
     *
     * @param integer $fiyatNo
     *
     * @return Kurmus01
     */
    public function setFiyatNo($fiyatNo)
    {
        $this->fiyatNo = $fiyatNo;

        return $this;
    }

    /**
     * Get fiyatNo
     *
     * @return integer
     */
    public function getFiyatNo()
    {
        return $this->fiyatNo;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return Kurmus01
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
     * Set ticariUnvan
     *
     * @param string $ticariUnvan
     *
     * @return Kurmus01
     */
    public function setTicariUnvan($ticariUnvan)
    {
        $this->ticariUnvan = $ticariUnvan;

        return $this;
    }

    /**
     * Get ticariUnvan
     *
     * @return string
     */
    public function getTicariUnvan()
    {
        return $this->ticariUnvan;
    }

    /**
     * Set bolgeNo
     *
     * @param boolean $bolgeNo
     *
     * @return Kurmus01
     */
    public function setBolgeNo($bolgeNo)
    {
        $this->bolgeNo = $bolgeNo;

        return $this;
    }

    /**
     * Get bolgeNo
     *
     * @return boolean
     */
    public function getBolgeNo()
    {
        return $this->bolgeNo;
    }

    /**
     * Set postaKodu
     *
     * @param string $postaKodu
     *
     * @return Kurmus01
     */
    public function setPostaKodu($postaKodu)
    {
        $this->postaKodu = $postaKodu;

        return $this;
    }

    /**
     * Get postaKodu
     *
     * @return string
     */
    public function getPostaKodu()
    {
        return $this->postaKodu;
    }

    /**
     * Set telefon1
     *
     * @param string $telefon1
     *
     * @return Kurmus01
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
     * @return Kurmus01
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
     * @return Kurmus01
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
     * Set fax
     *
     * @param string $fax
     *
     * @return Kurmus01
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Kurmus01
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
     * @return Kurmus01
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
     * Set eMail2
     *
     * @param string $eMail2
     *
     * @return Kurmus01
     */
    public function setEMail2($eMail2)
    {
        $this->eMail2 = $eMail2;

        return $this;
    }

    /**
     * Get eMail2
     *
     * @return string
     */
    public function getEMail2()
    {
        return $this->eMail2;
    }

    /**
     * Set vergiDairesi
     *
     * @param string $vergiDairesi
     *
     * @return Kurmus01
     */
    public function setVergiDairesi($vergiDairesi)
    {
        $this->vergiDairesi = $vergiDairesi;

        return $this;
    }

    /**
     * Get vergiDairesi
     *
     * @return string
     */
    public function getVergiDairesi()
    {
        return $this->vergiDairesi;
    }

    /**
     * Set vergiNo
     *
     * @param string $vergiNo
     *
     * @return Kurmus01
     */
    public function setVergiNo($vergiNo)
    {
        $this->vergiNo = $vergiNo;

        return $this;
    }

    /**
     * Get vergiNo
     *
     * @return string
     */
    public function getVergiNo()
    {
        return $this->vergiNo;
    }

    /**
     * Set sozlesmeBitisTarihi
     *
     * @param \DateTime $sozlesmeBitisTarihi
     *
     * @return Kurmus01
     */
    public function setSozlesmeBitisTarihi($sozlesmeBitisTarihi)
    {
        $this->sozlesmeBitisTarihi = $sozlesmeBitisTarihi;

        return $this;
    }

    /**
     * Get sozlesmeBitisTarihi
     *
     * @return \DateTime
     */
    public function getSozlesmeBitisTarihi()
    {
        return $this->sozlesmeBitisTarihi;
    }

    /**
     * Set mailKontrol
     *
     * @param string $mailKontrol
     *
     * @return Kurmus01
     */
    public function setMailKontrol($mailKontrol)
    {
        $this->mailKontrol = $mailKontrol;

        return $this;
    }

    /**
     * Get mailKontrol
     *
     * @return string
     */
    public function getMailKontrol()
    {
        return $this->mailKontrol;
    }

    /**
     * Set beklemeKontrol
     *
     * @param string $beklemeKontrol
     *
     * @return Kurmus01
     */
    public function setBeklemeKontrol($beklemeKontrol)
    {
        $this->beklemeKontrol = $beklemeKontrol;

        return $this;
    }

    /**
     * Get beklemeKontrol
     *
     * @return string
     */
    public function getBeklemeKontrol()
    {
        return $this->beklemeKontrol;
    }

    /**
     * Set webUsername
     *
     * @param string $webUsername
     *
     * @return Kurmus01
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
     * @return Kurmus01
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

    /**
     * Set kopruKontrol
     *
     * @param string $kopruKontrol
     *
     * @return Kurmus01
     */
    public function setKopruKontrol($kopruKontrol)
    {
        $this->kopruKontrol = $kopruKontrol;

        return $this;
    }

    /**
     * Get kopruKontrol
     *
     * @return string
     */
    public function getKopruKontrol()
    {
        return $this->kopruKontrol;
    }

    /**
     * Set iskontoorani
     *
     * @param float $iskontoorani
     *
     * @return Kurmus01
     */
    public function setIskontoorani($iskontoorani)
    {
        $this->iskontoorani = $iskontoorani;

        return $this;
    }

    /**
     * Get iskontoorani
     *
     * @return float
     */
    public function getIskontoorani()
    {
        return $this->iskontoorani;
    }

    /**
     * Set gf
     *
     * @param string $gf
     *
     * @return Kurmus01
     */
    public function setGf($gf)
    {
        $this->gf = $gf;

        return $this;
    }

    /**
     * Get gf
     *
     * @return string
     */
    public function getGf()
    {
        return $this->gf;
    }

    /**
     * Set gfP
     *
     * @param string $gfP
     *
     * @return Kurmus01
     */
    public function setGfP($gfP)
    {
        $this->gfP = $gfP;

        return $this;
    }

    /**
     * Get gfP
     *
     * @return string
     */
    public function getGfP()
    {
        return $this->gfP;
    }

    /**
     * Set kayitbildirimi
     *
     * @param string $kayitbildirimi
     *
     * @return Kurmus01
     */
    public function setKayitbildirimi($kayitbildirimi)
    {
        $this->kayitbildirimi = $kayitbildirimi;

        return $this;
    }

    /**
     * Get kayitbildirimi
     *
     * @return string
     */
    public function getKayitbildirimi()
    {
        return $this->kayitbildirimi;
    }

    /**
     * Set pesinkopruucreti
     *
     * @param float $pesinkopruucreti
     *
     * @return Kurmus01
     */
    public function setPesinkopruucreti($pesinkopruucreti)
    {
        $this->pesinkopruucreti = $pesinkopruucreti;

        return $this;
    }

    /**
     * Get pesinkopruucreti
     *
     * @return float
     */
    public function getPesinkopruucreti()
    {
        return $this->pesinkopruucreti;
    }

    /**
     * Set abonekopruucreti
     *
     * @param float $abonekopruucreti
     *
     * @return Kurmus01
     */
    public function setAbonekopruucreti($abonekopruucreti)
    {
        $this->abonekopruucreti = $abonekopruucreti;

        return $this;
    }

    /**
     * Get abonekopruucreti
     *
     * @return float
     */
    public function getAbonekopruucreti()
    {
        return $this->abonekopruucreti;
    }

    /**
     * Set karaliste
     *
     * @param string $karaliste
     *
     * @return Kurmus01
     */
    public function setKaraliste($karaliste)
    {
        $this->karaliste = $karaliste;

        return $this;
    }

    /**
     * Get karaliste
     *
     * @return string
     */
    public function getKaraliste()
    {
        return $this->karaliste;
    }

    /**
     * Set ekstralptal
     *
     * @param string $ekstralptal
     *
     * @return Kurmus01
     */
    public function setEkstralptal($ekstralptal)
    {
        $this->ekstralptal = $ekstralptal;

        return $this;
    }

    /**
     * Get ekstralptal
     *
     * @return string
     */
    public function getEkstralptal()
    {
        return $this->ekstralptal;
    }

    /**
     * Set onaykodu
     *
     * @param string $onaykodu
     *
     * @return Kurmus01
     */
    public function setOnaykodu($onaykodu)
    {
        $this->onaykodu = $onaykodu;

        return $this;
    }

    /**
     * Get onaykodu
     *
     * @return string
     */
    public function getOnaykodu()
    {
        return $this->onaykodu;
    }

    /**
     * Set f1Not
     *
     * @param string $f1Not
     *
     * @return Kurmus01
     */
    public function setF1Not($f1Not)
    {
        $this->f1Not = $f1Not;

        return $this;
    }

    /**
     * Get f1Not
     *
     * @return string
     */
    public function getF1Not()
    {
        return $this->f1Not;
    }

    /**
     * Set smsKontrol
     *
     * @param string $smsKontrol
     *
     * @return Kurmus01
     */
    public function setSmsKontrol($smsKontrol)
    {
        $this->smsKontrol = $smsKontrol;

        return $this;
    }

    /**
     * Get smsKontrol
     *
     * @return string
     */
    public function getSmsKontrol()
    {
        return $this->smsKontrol;
    }

    /**
     * Set musteriYetkisi
     *
     * @param integer $musteriYetkisi
     *
     * @return Kurmus01
     */
    public function setMusteriYetkisi($musteriYetkisi)
    {
        $this->musteriYetkisi = $musteriYetkisi;

        return $this;
    }

    /**
     * Get musteriYetkisi
     *
     * @return integer
     */
    public function getMusteriYetkisi()
    {
        return $this->musteriYetkisi;
    }

    /**
     * Set sehir
     *
     * @param \AppBundle\Entity\City $sehir
     *
     * @return Kurmus01
     */
    public function setSehir(\AppBundle\Entity\City $sehir = null)
    {
        $this->sehir = $sehir;

        return $this;
    }

    /**
     * Get sehir
     *
     * @return \AppBundle\Entity\City
     */
    public function getSehir()
    {
        return $this->sehir;
    }

    /**
     * Set semt
     *
     * @param \AppBundle\Entity\Kursmt01 $semt
     *
     * @return Kurmus01
     */
    public function setSemt(\AppBundle\Entity\Kursmt01 $semt = null)
    {
        $this->semt = $semt;

        return $this;
    }

    /**
     * Get semt
     *
     * @return \AppBundle\Entity\Kursmt01
     */
    public function getSemt()
    {
        return $this->semt;
    }
}

