<?php

namespace AppBundle\Entity;

/**
 * Kursanalpos
 */
class Kursanalpos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cari;

    /**
     * @var integer
     */
    private $toplam;

    /**
     * @var \DateTime
     */
    private $tarih;

    /**
     * @var \AppBundle\Entity\Kurmus01
     */
    private $refnoMusteri;


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
     * Set cari
     *
     * @param string $cari
     *
     * @return Kursanalpos
     */
    public function setCari($cari)
    {
        $this->cari = $cari;

        return $this;
    }

    /**
     * Get cari
     *
     * @return string
     */
    public function getCari()
    {
        return $this->cari;
    }

    /**
     * Set toplam
     *
     * @param integer $toplam
     *
     * @return Kursanalpos
     */
    public function setToplam($toplam)
    {
        $this->toplam = $toplam;

        return $this;
    }

    /**
     * Get toplam
     *
     * @return integer
     */
    public function getToplam()
    {
        return $this->toplam;
    }

    /**
     * Set tarih
     *
     * @param \DateTime $tarih
     *
     * @return Kursanalpos
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

    /**
     * Set refnoMusteri
     *
     * @param \AppBundle\Entity\Kurmus01 $refnoMusteri
     *
     * @return Kursanalpos
     */
    public function setRefnoMusteri(\AppBundle\Entity\Kurmus01 $refnoMusteri = null)
    {
        $this->refnoMusteri = $refnoMusteri;

        return $this;
    }

    /**
     * Get refnoMusteri
     *
     * @return \AppBundle\Entity\Kurmus01
     */
    public function getRefnoMusteri()
    {
        return $this->refnoMusteri;
    }
}

