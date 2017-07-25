<?php

namespace AppBundle\Entity;

/**
 * Excel
 */
class Excel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kgf = '1';

    /**
     * @var integer
     */
    private $gidistipi = '1';

    /**
     * @var integer
     */
    private $alimsaati = '1';

    /**
     * @var integer
     */
    private $teslimsaati = '1';

    /**
     * @var integer
     */
    private $islemtipi = '1';

    /**
     * @var integer
     */
    private $odemeyapan = '1';

    /**
     * @var integer
     */
    private $kuryenu = '1';


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
     * Set kgf
     *
     * @param integer $kgf
     *
     * @return Excel
     */
    public function setKgf($kgf)
    {
        $this->kgf = $kgf;

        return $this;
    }

    /**
     * Get kgf
     *
     * @return integer
     */
    public function getKgf()
    {
        return $this->kgf;
    }

    /**
     * Set gidistipi
     *
     * @param integer $gidistipi
     *
     * @return Excel
     */
    public function setGidistipi($gidistipi)
    {
        $this->gidistipi = $gidistipi;

        return $this;
    }

    /**
     * Get gidistipi
     *
     * @return integer
     */
    public function getGidistipi()
    {
        return $this->gidistipi;
    }

    /**
     * Set alimsaati
     *
     * @param integer $alimsaati
     *
     * @return Excel
     */
    public function setAlimsaati($alimsaati)
    {
        $this->alimsaati = $alimsaati;

        return $this;
    }

    /**
     * Get alimsaati
     *
     * @return integer
     */
    public function getAlimsaati()
    {
        return $this->alimsaati;
    }

    /**
     * Set teslimsaati
     *
     * @param integer $teslimsaati
     *
     * @return Excel
     */
    public function setTeslimsaati($teslimsaati)
    {
        $this->teslimsaati = $teslimsaati;

        return $this;
    }

    /**
     * Get teslimsaati
     *
     * @return integer
     */
    public function getTeslimsaati()
    {
        return $this->teslimsaati;
    }

    /**
     * Set islemtipi
     *
     * @param integer $islemtipi
     *
     * @return Excel
     */
    public function setIslemtipi($islemtipi)
    {
        $this->islemtipi = $islemtipi;

        return $this;
    }

    /**
     * Get islemtipi
     *
     * @return integer
     */
    public function getIslemtipi()
    {
        return $this->islemtipi;
    }

    /**
     * Set odemeyapan
     *
     * @param integer $odemeyapan
     *
     * @return Excel
     */
    public function setOdemeyapan($odemeyapan)
    {
        $this->odemeyapan = $odemeyapan;

        return $this;
    }

    /**
     * Get odemeyapan
     *
     * @return integer
     */
    public function getOdemeyapan()
    {
        return $this->odemeyapan;
    }

    /**
     * Set kuryenu
     *
     * @param integer $kuryenu
     *
     * @return Excel
     */
    public function setKuryenu($kuryenu)
    {
        $this->kuryenu = $kuryenu;

        return $this;
    }

    /**
     * Get kuryenu
     *
     * @return integer
     */
    public function getKuryenu()
    {
        return $this->kuryenu;
    }
}

