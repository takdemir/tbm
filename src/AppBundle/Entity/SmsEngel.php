<?php

namespace AppBundle\Entity;

/**
 * SmsEngel
 */
class SmsEngel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $baslangic;

    /**
     * @var string
     */
    private $bitis;

    /**
     * @var string
     */
    private $telefon;


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
     * Set baslangic
     *
     * @param string $baslangic
     *
     * @return SmsEngel
     */
    public function setBaslangic($baslangic)
    {
        $this->baslangic = $baslangic;

        return $this;
    }

    /**
     * Get baslangic
     *
     * @return string
     */
    public function getBaslangic()
    {
        return $this->baslangic;
    }

    /**
     * Set bitis
     *
     * @param string $bitis
     *
     * @return SmsEngel
     */
    public function setBitis($bitis)
    {
        $this->bitis = $bitis;

        return $this;
    }

    /**
     * Get bitis
     *
     * @return string
     */
    public function getBitis()
    {
        return $this->bitis;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     *
     * @return SmsEngel
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
}

