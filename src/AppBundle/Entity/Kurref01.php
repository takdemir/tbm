<?php

namespace AppBundle\Entity;

/**
 * Kurref01
 */
class Kurref01
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kayitSayisi;

    /**
     * @var float
     */
    private $kopruucreti = '2';

    /**
     * @var integer
     */
    private $kayitDegistimi = '0';

    /**
     * @var integer
     */
    private $kuryeDurumDegisikligi;


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
     * Set kayitSayisi
     *
     * @param integer $kayitSayisi
     *
     * @return Kurref01
     */
    public function setKayitSayisi($kayitSayisi)
    {
        $this->kayitSayisi = $kayitSayisi;

        return $this;
    }

    /**
     * Get kayitSayisi
     *
     * @return integer
     */
    public function getKayitSayisi()
    {
        return $this->kayitSayisi;
    }

    /**
     * Set kopruucreti
     *
     * @param float $kopruucreti
     *
     * @return Kurref01
     */
    public function setKopruucreti($kopruucreti)
    {
        $this->kopruucreti = $kopruucreti;

        return $this;
    }

    /**
     * Get kopruucreti
     *
     * @return float
     */
    public function getKopruucreti()
    {
        return $this->kopruucreti;
    }

    /**
     * Set kayitDegistimi
     *
     * @param integer $kayitDegistimi
     *
     * @return Kurref01
     */
    public function setKayitDegistimi($kayitDegistimi)
    {
        $this->kayitDegistimi = $kayitDegistimi;

        return $this;
    }

    /**
     * Get kayitDegistimi
     *
     * @return integer
     */
    public function getKayitDegistimi()
    {
        return $this->kayitDegistimi;
    }

    /**
     * Set kuryeDurumDegisikligi
     *
     * @param integer $kuryeDurumDegisikligi
     *
     * @return Kurref01
     */
    public function setKuryeDurumDegisikligi($kuryeDurumDegisikligi)
    {
        $this->kuryeDurumDegisikligi = $kuryeDurumDegisikligi;

        return $this;
    }

    /**
     * Get kuryeDurumDegisikligi
     *
     * @return integer
     */
    public function getKuryeDurumDegisikligi()
    {
        return $this->kuryeDurumDegisikligi;
    }
}

