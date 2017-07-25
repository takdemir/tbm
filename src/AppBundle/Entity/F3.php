<?php

namespace AppBundle\Entity;

/**
 * F3
 */
class F3
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $musteriadi;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $ceptel;

    /**
     * @var string
     */
    private $nots;

    /**
     * @var \AppBundle\Entity\Kurftg01
     */
    private $fiyatNo;

    /**
     * @var \AppBundle\Entity\Kurtip01
     */
    private $islemTipi;

    /**
     * @var \AppBundle\Entity\Kurmus01
     */
    private $musteriid;

    /**
     * @var \AppBundle\Entity\Kursmt01
     */
    private $semt;

    /**
     * @var \AppBundle\Entity\Kurmus02
     */
    private $yetkili;


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
     * Set musteriadi
     *
     * @param string $musteriadi
     *
     * @return F3
     */
    public function setMusteriadi($musteriadi)
    {
        $this->musteriadi = $musteriadi;

        return $this;
    }

    /**
     * Get musteriadi
     *
     * @return string
     */
    public function getMusteriadi()
    {
        return $this->musteriadi;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return F3
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
     * Set tel
     *
     * @param string $tel
     *
     * @return F3
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set ceptel
     *
     * @param string $ceptel
     *
     * @return F3
     */
    public function setCeptel($ceptel)
    {
        $this->ceptel = $ceptel;

        return $this;
    }

    /**
     * Get ceptel
     *
     * @return string
     */
    public function getCeptel()
    {
        return $this->ceptel;
    }

    /**
     * Set nots
     *
     * @param string $nots
     *
     * @return F3
     */
    public function setNots($nots)
    {
        $this->nots = $nots;

        return $this;
    }

    /**
     * Get nots
     *
     * @return string
     */
    public function getNots()
    {
        return $this->nots;
    }

    /**
     * Set fiyatNo
     *
     * @param \AppBundle\Entity\Kurftg01 $fiyatNo
     *
     * @return F3
     */
    public function setFiyatNo(\AppBundle\Entity\Kurftg01 $fiyatNo = null)
    {
        $this->fiyatNo = $fiyatNo;

        return $this;
    }

    /**
     * Get fiyatNo
     *
     * @return \AppBundle\Entity\Kurftg01
     */
    public function getFiyatNo()
    {
        return $this->fiyatNo;
    }

    /**
     * Set islemTipi
     *
     * @param \AppBundle\Entity\Kurtip01 $islemTipi
     *
     * @return F3
     */
    public function setIslemTipi(\AppBundle\Entity\Kurtip01 $islemTipi = null)
    {
        $this->islemTipi = $islemTipi;

        return $this;
    }

    /**
     * Get islemTipi
     *
     * @return \AppBundle\Entity\Kurtip01
     */
    public function getIslemTipi()
    {
        return $this->islemTipi;
    }

    /**
     * Set musteriid
     *
     * @param \AppBundle\Entity\Kurmus01 $musteriid
     *
     * @return F3
     */
    public function setMusteriid(\AppBundle\Entity\Kurmus01 $musteriid = null)
    {
        $this->musteriid = $musteriid;

        return $this;
    }

    /**
     * Get musteriid
     *
     * @return \AppBundle\Entity\Kurmus01
     */
    public function getMusteriid()
    {
        return $this->musteriid;
    }

    /**
     * Set semt
     *
     * @param \AppBundle\Entity\Kursmt01 $semt
     *
     * @return F3
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

    /**
     * Set yetkili
     *
     * @param \AppBundle\Entity\Kurmus02 $yetkili
     *
     * @return F3
     */
    public function setYetkili(\AppBundle\Entity\Kurmus02 $yetkili = null)
    {
        $this->yetkili = $yetkili;

        return $this;
    }

    /**
     * Get yetkili
     *
     * @return \AppBundle\Entity\Kurmus02
     */
    public function getYetkili()
    {
        return $this->yetkili;
    }
}

