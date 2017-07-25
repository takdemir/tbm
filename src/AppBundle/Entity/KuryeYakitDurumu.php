<?php

namespace AppBundle\Entity;

/**
 * KuryeYakitDurumu
 */
class KuryeYakitDurumu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $yakit = '0';

    /**
     * @var \DateTime
     */
    private $tarih;

    /**
     * @var \AppBundle\Entity\Kurye01
     */
    private $kurye;


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
     * Set yakit
     *
     * @param float $yakit
     *
     * @return KuryeYakitDurumu
     */
    public function setYakit($yakit)
    {
        $this->yakit = $yakit;

        return $this;
    }

    /**
     * Get yakit
     *
     * @return float
     */
    public function getYakit()
    {
        return $this->yakit;
    }

    /**
     * Set tarih
     *
     * @param \DateTime $tarih
     *
     * @return KuryeYakitDurumu
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
     * Set kurye
     *
     * @param \AppBundle\Entity\Kurye01 $kurye
     *
     * @return KuryeYakitDurumu
     */
    public function setKurye(\AppBundle\Entity\Kurye01 $kurye = null)
    {
        $this->kurye = $kurye;

        return $this;
    }

    /**
     * Get kurye
     *
     * @return \AppBundle\Entity\Kurye01
     */
    public function getKurye()
    {
        return $this->kurye;
    }
}

