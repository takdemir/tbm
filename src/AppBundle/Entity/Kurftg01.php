<?php

namespace AppBundle\Entity;

/**
 * Kurftg01
 */
class Kurftg01
{
    /**
     * @var integer
     */
    private $fiyatNo;

    /**
     * @var string
     */
    private $fiyatTanimi;

    /**
     * @var float
     */
    private $beklemeAboneTutariDk;

    /**
     * @var float
     */
    private $beklemePesinTutariDk;

    /**
     * @var float
     */
    private $ucretsizAgirlikKgDm3;

    /**
     * @var float
     */
    private $agirlikAboneTutariKgDm3;

    /**
     * @var float
     */
    private $agirlikPesinTutariKgDm3;

    /**
     * @var float
     */
    private $minAboneDonusluTutari;

    /**
     * @var float
     */
    private $minPesinDonusluTutari;

    /**
     * @var float
     */
    private $p0101;

    /**
     * @var float
     */
    private $p0102;

    /**
     * @var float
     */
    private $p0103;

    /**
     * @var float
     */
    private $p0104;

    /**
     * @var float
     */
    private $p0105;

    /**
     * @var float
     */
    private $p0106;

    /**
     * @var float
     */
    private $p0107;

    /**
     * @var float
     */
    private $p0108;

    /**
     * @var float
     */
    private $p0201;

    /**
     * @var float
     */
    private $p0202;

    /**
     * @var float
     */
    private $p0203;

    /**
     * @var float
     */
    private $p0204;

    /**
     * @var float
     */
    private $p0205;

    /**
     * @var float
     */
    private $p0206;

    /**
     * @var float
     */
    private $p0207;

    /**
     * @var float
     */
    private $p0208;

    /**
     * @var float
     */
    private $p0301;

    /**
     * @var float
     */
    private $p0302;

    /**
     * @var float
     */
    private $p0303;

    /**
     * @var float
     */
    private $p0304;

    /**
     * @var float
     */
    private $p0305;

    /**
     * @var float
     */
    private $p0306;

    /**
     * @var float
     */
    private $p0307;

    /**
     * @var float
     */
    private $p0308;

    /**
     * @var float
     */
    private $p0401;

    /**
     * @var float
     */
    private $p0402;

    /**
     * @var float
     */
    private $p0403;

    /**
     * @var float
     */
    private $p0404;

    /**
     * @var float
     */
    private $p0405;

    /**
     * @var float
     */
    private $p0406;

    /**
     * @var float
     */
    private $p0407;

    /**
     * @var float
     */
    private $p0408;

    /**
     * @var float
     */
    private $p0501;

    /**
     * @var float
     */
    private $p0502;

    /**
     * @var float
     */
    private $p0503;

    /**
     * @var float
     */
    private $p0504;

    /**
     * @var float
     */
    private $p0505;

    /**
     * @var float
     */
    private $p0506;

    /**
     * @var float
     */
    private $p0507;

    /**
     * @var float
     */
    private $p0508;

    /**
     * @var float
     */
    private $p0601;

    /**
     * @var float
     */
    private $p0602;

    /**
     * @var float
     */
    private $p0603;

    /**
     * @var float
     */
    private $p0604;

    /**
     * @var float
     */
    private $p0605;

    /**
     * @var float
     */
    private $p0606;

    /**
     * @var float
     */
    private $p0607;

    /**
     * @var float
     */
    private $p0608;

    /**
     * @var float
     */
    private $p0701;

    /**
     * @var float
     */
    private $p0702;

    /**
     * @var float
     */
    private $p0703;

    /**
     * @var float
     */
    private $p0704;

    /**
     * @var float
     */
    private $p0705;

    /**
     * @var float
     */
    private $p0706;

    /**
     * @var float
     */
    private $p0707;

    /**
     * @var float
     */
    private $p0708;

    /**
     * @var float
     */
    private $p0801;

    /**
     * @var float
     */
    private $p0802;

    /**
     * @var float
     */
    private $p0803;

    /**
     * @var float
     */
    private $p0804;

    /**
     * @var float
     */
    private $p0805;

    /**
     * @var float
     */
    private $p0806;

    /**
     * @var float
     */
    private $p0807;

    /**
     * @var float
     */
    private $p0808;

    /**
     * @var float
     */
    private $a0101;

    /**
     * @var float
     */
    private $a0102;

    /**
     * @var float
     */
    private $a0103;

    /**
     * @var float
     */
    private $a0104;

    /**
     * @var float
     */
    private $a0105;

    /**
     * @var float
     */
    private $a0106;

    /**
     * @var float
     */
    private $a0107;

    /**
     * @var float
     */
    private $a0108;

    /**
     * @var float
     */
    private $a0201;

    /**
     * @var float
     */
    private $a0202;

    /**
     * @var float
     */
    private $a0203;

    /**
     * @var float
     */
    private $a0204;

    /**
     * @var float
     */
    private $a0205;

    /**
     * @var float
     */
    private $a0206;

    /**
     * @var float
     */
    private $a0207;

    /**
     * @var float
     */
    private $a0208;

    /**
     * @var float
     */
    private $a0301;

    /**
     * @var float
     */
    private $a0302;

    /**
     * @var float
     */
    private $a0303;

    /**
     * @var float
     */
    private $a0304;

    /**
     * @var float
     */
    private $a0305;

    /**
     * @var float
     */
    private $a0306;

    /**
     * @var float
     */
    private $a0307;

    /**
     * @var float
     */
    private $a0308;

    /**
     * @var float
     */
    private $a0401;

    /**
     * @var float
     */
    private $a0402;

    /**
     * @var float
     */
    private $a0403;

    /**
     * @var float
     */
    private $a0404;

    /**
     * @var float
     */
    private $a0405;

    /**
     * @var float
     */
    private $a0406;

    /**
     * @var float
     */
    private $a0407;

    /**
     * @var float
     */
    private $a0408;

    /**
     * @var float
     */
    private $a0501;

    /**
     * @var float
     */
    private $a0502;

    /**
     * @var float
     */
    private $a0503;

    /**
     * @var float
     */
    private $a0504;

    /**
     * @var float
     */
    private $a0505;

    /**
     * @var float
     */
    private $a0506;

    /**
     * @var float
     */
    private $a0507;

    /**
     * @var float
     */
    private $a0508;

    /**
     * @var float
     */
    private $a0601;

    /**
     * @var float
     */
    private $a0602;

    /**
     * @var float
     */
    private $a0603;

    /**
     * @var float
     */
    private $a0604;

    /**
     * @var float
     */
    private $a0605;

    /**
     * @var float
     */
    private $a0606;

    /**
     * @var float
     */
    private $a0607;

    /**
     * @var float
     */
    private $a0608;

    /**
     * @var float
     */
    private $a0701;

    /**
     * @var float
     */
    private $a0702;

    /**
     * @var float
     */
    private $a0703;

    /**
     * @var float
     */
    private $a0704;

    /**
     * @var float
     */
    private $a0705;

    /**
     * @var float
     */
    private $a0706;

    /**
     * @var float
     */
    private $a0707;

    /**
     * @var float
     */
    private $a0708;

    /**
     * @var float
     */
    private $a0801;

    /**
     * @var float
     */
    private $a0802;

    /**
     * @var float
     */
    private $a0803;

    /**
     * @var float
     */
    private $a0804;

    /**
     * @var float
     */
    private $a0805;

    /**
     * @var float
     */
    private $a0806;

    /**
     * @var float
     */
    private $a0807;

    /**
     * @var float
     */
    private $a0808 = '0';

    /**
     * @var float
     */
    private $p0109 = '0';

    /**
     * @var float
     */
    private $p01010 = '0';

    /**
     * @var float
     */
    private $p01011 = '0';

    /**
     * @var float
     */
    private $p0209 = '0';

    /**
     * @var float
     */
    private $p02010 = '0';

    /**
     * @var float
     */
    private $p02011 = '0';

    /**
     * @var float
     */
    private $p0309 = '0';

    /**
     * @var float
     */
    private $p03010 = '0';

    /**
     * @var float
     */
    private $p03011 = '0';

    /**
     * @var float
     */
    private $p0409 = '0';

    /**
     * @var float
     */
    private $p04010 = '0';

    /**
     * @var float
     */
    private $p04011 = '0';

    /**
     * @var float
     */
    private $p0509 = '0';

    /**
     * @var float
     */
    private $p05010 = '0';

    /**
     * @var float
     */
    private $p05011 = '0';

    /**
     * @var float
     */
    private $p0609 = '0';

    /**
     * @var float
     */
    private $p06010 = '0';

    /**
     * @var float
     */
    private $p06011 = '0';

    /**
     * @var float
     */
    private $p0709 = '0';

    /**
     * @var float
     */
    private $p07010 = '0';

    /**
     * @var float
     */
    private $p07011 = '0';

    /**
     * @var float
     */
    private $p0809 = '0';

    /**
     * @var float
     */
    private $p08010 = '0';

    /**
     * @var float
     */
    private $p08011 = '0';

    /**
     * @var float
     */
    private $p0901 = '0';

    /**
     * @var float
     */
    private $p0902 = '0';

    /**
     * @var float
     */
    private $p0903 = '0';

    /**
     * @var float
     */
    private $p0904 = '0';

    /**
     * @var float
     */
    private $p0905 = '0';

    /**
     * @var float
     */
    private $p0906 = '0';

    /**
     * @var float
     */
    private $p0907 = '0';

    /**
     * @var float
     */
    private $p0908 = '0';

    /**
     * @var float
     */
    private $p0909 = '0';

    /**
     * @var float
     */
    private $p09010 = '0';

    /**
     * @var float
     */
    private $p09011 = '0';

    /**
     * @var float
     */
    private $p01001 = '0';

    /**
     * @var float
     */
    private $p01002 = '0';

    /**
     * @var float
     */
    private $p01003 = '0';

    /**
     * @var float
     */
    private $p01004 = '0';

    /**
     * @var float
     */
    private $p01005 = '0';

    /**
     * @var float
     */
    private $p01006 = '0';

    /**
     * @var float
     */
    private $p01007 = '0';

    /**
     * @var float
     */
    private $p01008 = '0';

    /**
     * @var float
     */
    private $p01009 = '0';

    /**
     * @var float
     */
    private $p010010 = '0';

    /**
     * @var float
     */
    private $p010011 = '0';

    /**
     * @var float
     */
    private $p01101 = '0';

    /**
     * @var float
     */
    private $p01102 = '0';

    /**
     * @var float
     */
    private $p01103 = '0';

    /**
     * @var float
     */
    private $p01104 = '0';

    /**
     * @var float
     */
    private $p01105 = '0';

    /**
     * @var float
     */
    private $p01106 = '0';

    /**
     * @var float
     */
    private $p01107 = '0';

    /**
     * @var float
     */
    private $p01108 = '0';

    /**
     * @var float
     */
    private $p01109 = '0';

    /**
     * @var float
     */
    private $p011010 = '0';

    /**
     * @var float
     */
    private $p011011 = '0';

    /**
     * @var float
     */
    private $a0109 = '0';

    /**
     * @var float
     */
    private $a01010 = '0';

    /**
     * @var float
     */
    private $a01011 = '0';

    /**
     * @var float
     */
    private $a0209 = '0';

    /**
     * @var float
     */
    private $a02010 = '0';

    /**
     * @var float
     */
    private $a02011 = '0';

    /**
     * @var float
     */
    private $a0309 = '0';

    /**
     * @var float
     */
    private $a03010 = '0';

    /**
     * @var float
     */
    private $a03011 = '0';

    /**
     * @var float
     */
    private $a0409 = '0';

    /**
     * @var float
     */
    private $a04010 = '0';

    /**
     * @var float
     */
    private $a04011 = '0';

    /**
     * @var float
     */
    private $a0509 = '0';

    /**
     * @var float
     */
    private $a05010 = '0';

    /**
     * @var float
     */
    private $a05011 = '0';

    /**
     * @var float
     */
    private $a0609 = '0';

    /**
     * @var float
     */
    private $a06010 = '0';

    /**
     * @var float
     */
    private $a06011 = '0';

    /**
     * @var float
     */
    private $a0709 = '0';

    /**
     * @var float
     */
    private $a07010 = '0';

    /**
     * @var float
     */
    private $a07011 = '0';

    /**
     * @var float
     */
    private $a0809 = '0';

    /**
     * @var float
     */
    private $a08010 = '0';

    /**
     * @var float
     */
    private $a08011 = '0';

    /**
     * @var float
     */
    private $a0901 = '0';

    /**
     * @var float
     */
    private $a0902 = '0';

    /**
     * @var float
     */
    private $a0903 = '0';

    /**
     * @var float
     */
    private $a0904 = '0';

    /**
     * @var float
     */
    private $a0905 = '0';

    /**
     * @var float
     */
    private $a0906 = '0';

    /**
     * @var float
     */
    private $a0907 = '0';

    /**
     * @var float
     */
    private $a0908 = '0';

    /**
     * @var float
     */
    private $a0909 = '0';

    /**
     * @var float
     */
    private $a09010 = '0';

    /**
     * @var float
     */
    private $a09011 = '0';

    /**
     * @var float
     */
    private $a01001 = '0';

    /**
     * @var float
     */
    private $a01002 = '0';

    /**
     * @var float
     */
    private $a01003 = '0';

    /**
     * @var float
     */
    private $a01004 = '0';

    /**
     * @var float
     */
    private $a01005 = '0';

    /**
     * @var float
     */
    private $a01006 = '0';

    /**
     * @var float
     */
    private $a01007 = '0';

    /**
     * @var float
     */
    private $a01008 = '0';

    /**
     * @var float
     */
    private $a01009 = '0';

    /**
     * @var float
     */
    private $a010010 = '0';

    /**
     * @var float
     */
    private $a010011 = '0';

    /**
     * @var float
     */
    private $a01101 = '0';

    /**
     * @var float
     */
    private $a01102 = '0';

    /**
     * @var float
     */
    private $a01103 = '0';

    /**
     * @var float
     */
    private $a01104 = '0';

    /**
     * @var float
     */
    private $a01105 = '0';

    /**
     * @var float
     */
    private $a01106 = '0';

    /**
     * @var float
     */
    private $a01107 = '0';

    /**
     * @var float
     */
    private $a01108 = '0';

    /**
     * @var float
     */
    private $a01109 = '0';

    /**
     * @var float
     */
    private $a011010 = '0';

    /**
     * @var float
     */
    private $a011011 = '0';


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
     * Set fiyatTanimi
     *
     * @param string $fiyatTanimi
     *
     * @return Kurftg01
     */
    public function setFiyatTanimi($fiyatTanimi)
    {
        $this->fiyatTanimi = $fiyatTanimi;

        return $this;
    }

    /**
     * Get fiyatTanimi
     *
     * @return string
     */
    public function getFiyatTanimi()
    {
        return $this->fiyatTanimi;
    }

    /**
     * Set beklemeAboneTutariDk
     *
     * @param float $beklemeAboneTutariDk
     *
     * @return Kurftg01
     */
    public function setBeklemeAboneTutariDk($beklemeAboneTutariDk)
    {
        $this->beklemeAboneTutariDk = $beklemeAboneTutariDk;

        return $this;
    }

    /**
     * Get beklemeAboneTutariDk
     *
     * @return float
     */
    public function getBeklemeAboneTutariDk()
    {
        return $this->beklemeAboneTutariDk;
    }

    /**
     * Set beklemePesinTutariDk
     *
     * @param float $beklemePesinTutariDk
     *
     * @return Kurftg01
     */
    public function setBeklemePesinTutariDk($beklemePesinTutariDk)
    {
        $this->beklemePesinTutariDk = $beklemePesinTutariDk;

        return $this;
    }

    /**
     * Get beklemePesinTutariDk
     *
     * @return float
     */
    public function getBeklemePesinTutariDk()
    {
        return $this->beklemePesinTutariDk;
    }

    /**
     * Set ucretsizAgirlikKgDm3
     *
     * @param float $ucretsizAgirlikKgDm3
     *
     * @return Kurftg01
     */
    public function setUcretsizAgirlikKgDm3($ucretsizAgirlikKgDm3)
    {
        $this->ucretsizAgirlikKgDm3 = $ucretsizAgirlikKgDm3;

        return $this;
    }

    /**
     * Get ucretsizAgirlikKgDm3
     *
     * @return float
     */
    public function getUcretsizAgirlikKgDm3()
    {
        return $this->ucretsizAgirlikKgDm3;
    }

    /**
     * Set agirlikAboneTutariKgDm3
     *
     * @param float $agirlikAboneTutariKgDm3
     *
     * @return Kurftg01
     */
    public function setAgirlikAboneTutariKgDm3($agirlikAboneTutariKgDm3)
    {
        $this->agirlikAboneTutariKgDm3 = $agirlikAboneTutariKgDm3;

        return $this;
    }

    /**
     * Get agirlikAboneTutariKgDm3
     *
     * @return float
     */
    public function getAgirlikAboneTutariKgDm3()
    {
        return $this->agirlikAboneTutariKgDm3;
    }

    /**
     * Set agirlikPesinTutariKgDm3
     *
     * @param float $agirlikPesinTutariKgDm3
     *
     * @return Kurftg01
     */
    public function setAgirlikPesinTutariKgDm3($agirlikPesinTutariKgDm3)
    {
        $this->agirlikPesinTutariKgDm3 = $agirlikPesinTutariKgDm3;

        return $this;
    }

    /**
     * Get agirlikPesinTutariKgDm3
     *
     * @return float
     */
    public function getAgirlikPesinTutariKgDm3()
    {
        return $this->agirlikPesinTutariKgDm3;
    }

    /**
     * Set minAboneDonusluTutari
     *
     * @param float $minAboneDonusluTutari
     *
     * @return Kurftg01
     */
    public function setMinAboneDonusluTutari($minAboneDonusluTutari)
    {
        $this->minAboneDonusluTutari = $minAboneDonusluTutari;

        return $this;
    }

    /**
     * Get minAboneDonusluTutari
     *
     * @return float
     */
    public function getMinAboneDonusluTutari()
    {
        return $this->minAboneDonusluTutari;
    }

    /**
     * Set minPesinDonusluTutari
     *
     * @param float $minPesinDonusluTutari
     *
     * @return Kurftg01
     */
    public function setMinPesinDonusluTutari($minPesinDonusluTutari)
    {
        $this->minPesinDonusluTutari = $minPesinDonusluTutari;

        return $this;
    }

    /**
     * Get minPesinDonusluTutari
     *
     * @return float
     */
    public function getMinPesinDonusluTutari()
    {
        return $this->minPesinDonusluTutari;
    }

    /**
     * Set p0101
     *
     * @param float $p0101
     *
     * @return Kurftg01
     */
    public function setP0101($p0101)
    {
        $this->p0101 = $p0101;

        return $this;
    }

    /**
     * Get p0101
     *
     * @return float
     */
    public function getP0101()
    {
        return $this->p0101;
    }

    /**
     * Set p0102
     *
     * @param float $p0102
     *
     * @return Kurftg01
     */
    public function setP0102($p0102)
    {
        $this->p0102 = $p0102;

        return $this;
    }

    /**
     * Get p0102
     *
     * @return float
     */
    public function getP0102()
    {
        return $this->p0102;
    }

    /**
     * Set p0103
     *
     * @param float $p0103
     *
     * @return Kurftg01
     */
    public function setP0103($p0103)
    {
        $this->p0103 = $p0103;

        return $this;
    }

    /**
     * Get p0103
     *
     * @return float
     */
    public function getP0103()
    {
        return $this->p0103;
    }

    /**
     * Set p0104
     *
     * @param float $p0104
     *
     * @return Kurftg01
     */
    public function setP0104($p0104)
    {
        $this->p0104 = $p0104;

        return $this;
    }

    /**
     * Get p0104
     *
     * @return float
     */
    public function getP0104()
    {
        return $this->p0104;
    }

    /**
     * Set p0105
     *
     * @param float $p0105
     *
     * @return Kurftg01
     */
    public function setP0105($p0105)
    {
        $this->p0105 = $p0105;

        return $this;
    }

    /**
     * Get p0105
     *
     * @return float
     */
    public function getP0105()
    {
        return $this->p0105;
    }

    /**
     * Set p0106
     *
     * @param float $p0106
     *
     * @return Kurftg01
     */
    public function setP0106($p0106)
    {
        $this->p0106 = $p0106;

        return $this;
    }

    /**
     * Get p0106
     *
     * @return float
     */
    public function getP0106()
    {
        return $this->p0106;
    }

    /**
     * Set p0107
     *
     * @param float $p0107
     *
     * @return Kurftg01
     */
    public function setP0107($p0107)
    {
        $this->p0107 = $p0107;

        return $this;
    }

    /**
     * Get p0107
     *
     * @return float
     */
    public function getP0107()
    {
        return $this->p0107;
    }

    /**
     * Set p0108
     *
     * @param float $p0108
     *
     * @return Kurftg01
     */
    public function setP0108($p0108)
    {
        $this->p0108 = $p0108;

        return $this;
    }

    /**
     * Get p0108
     *
     * @return float
     */
    public function getP0108()
    {
        return $this->p0108;
    }

    /**
     * Set p0201
     *
     * @param float $p0201
     *
     * @return Kurftg01
     */
    public function setP0201($p0201)
    {
        $this->p0201 = $p0201;

        return $this;
    }

    /**
     * Get p0201
     *
     * @return float
     */
    public function getP0201()
    {
        return $this->p0201;
    }

    /**
     * Set p0202
     *
     * @param float $p0202
     *
     * @return Kurftg01
     */
    public function setP0202($p0202)
    {
        $this->p0202 = $p0202;

        return $this;
    }

    /**
     * Get p0202
     *
     * @return float
     */
    public function getP0202()
    {
        return $this->p0202;
    }

    /**
     * Set p0203
     *
     * @param float $p0203
     *
     * @return Kurftg01
     */
    public function setP0203($p0203)
    {
        $this->p0203 = $p0203;

        return $this;
    }

    /**
     * Get p0203
     *
     * @return float
     */
    public function getP0203()
    {
        return $this->p0203;
    }

    /**
     * Set p0204
     *
     * @param float $p0204
     *
     * @return Kurftg01
     */
    public function setP0204($p0204)
    {
        $this->p0204 = $p0204;

        return $this;
    }

    /**
     * Get p0204
     *
     * @return float
     */
    public function getP0204()
    {
        return $this->p0204;
    }

    /**
     * Set p0205
     *
     * @param float $p0205
     *
     * @return Kurftg01
     */
    public function setP0205($p0205)
    {
        $this->p0205 = $p0205;

        return $this;
    }

    /**
     * Get p0205
     *
     * @return float
     */
    public function getP0205()
    {
        return $this->p0205;
    }

    /**
     * Set p0206
     *
     * @param float $p0206
     *
     * @return Kurftg01
     */
    public function setP0206($p0206)
    {
        $this->p0206 = $p0206;

        return $this;
    }

    /**
     * Get p0206
     *
     * @return float
     */
    public function getP0206()
    {
        return $this->p0206;
    }

    /**
     * Set p0207
     *
     * @param float $p0207
     *
     * @return Kurftg01
     */
    public function setP0207($p0207)
    {
        $this->p0207 = $p0207;

        return $this;
    }

    /**
     * Get p0207
     *
     * @return float
     */
    public function getP0207()
    {
        return $this->p0207;
    }

    /**
     * Set p0208
     *
     * @param float $p0208
     *
     * @return Kurftg01
     */
    public function setP0208($p0208)
    {
        $this->p0208 = $p0208;

        return $this;
    }

    /**
     * Get p0208
     *
     * @return float
     */
    public function getP0208()
    {
        return $this->p0208;
    }

    /**
     * Set p0301
     *
     * @param float $p0301
     *
     * @return Kurftg01
     */
    public function setP0301($p0301)
    {
        $this->p0301 = $p0301;

        return $this;
    }

    /**
     * Get p0301
     *
     * @return float
     */
    public function getP0301()
    {
        return $this->p0301;
    }

    /**
     * Set p0302
     *
     * @param float $p0302
     *
     * @return Kurftg01
     */
    public function setP0302($p0302)
    {
        $this->p0302 = $p0302;

        return $this;
    }

    /**
     * Get p0302
     *
     * @return float
     */
    public function getP0302()
    {
        return $this->p0302;
    }

    /**
     * Set p0303
     *
     * @param float $p0303
     *
     * @return Kurftg01
     */
    public function setP0303($p0303)
    {
        $this->p0303 = $p0303;

        return $this;
    }

    /**
     * Get p0303
     *
     * @return float
     */
    public function getP0303()
    {
        return $this->p0303;
    }

    /**
     * Set p0304
     *
     * @param float $p0304
     *
     * @return Kurftg01
     */
    public function setP0304($p0304)
    {
        $this->p0304 = $p0304;

        return $this;
    }

    /**
     * Get p0304
     *
     * @return float
     */
    public function getP0304()
    {
        return $this->p0304;
    }

    /**
     * Set p0305
     *
     * @param float $p0305
     *
     * @return Kurftg01
     */
    public function setP0305($p0305)
    {
        $this->p0305 = $p0305;

        return $this;
    }

    /**
     * Get p0305
     *
     * @return float
     */
    public function getP0305()
    {
        return $this->p0305;
    }

    /**
     * Set p0306
     *
     * @param float $p0306
     *
     * @return Kurftg01
     */
    public function setP0306($p0306)
    {
        $this->p0306 = $p0306;

        return $this;
    }

    /**
     * Get p0306
     *
     * @return float
     */
    public function getP0306()
    {
        return $this->p0306;
    }

    /**
     * Set p0307
     *
     * @param float $p0307
     *
     * @return Kurftg01
     */
    public function setP0307($p0307)
    {
        $this->p0307 = $p0307;

        return $this;
    }

    /**
     * Get p0307
     *
     * @return float
     */
    public function getP0307()
    {
        return $this->p0307;
    }

    /**
     * Set p0308
     *
     * @param float $p0308
     *
     * @return Kurftg01
     */
    public function setP0308($p0308)
    {
        $this->p0308 = $p0308;

        return $this;
    }

    /**
     * Get p0308
     *
     * @return float
     */
    public function getP0308()
    {
        return $this->p0308;
    }

    /**
     * Set p0401
     *
     * @param float $p0401
     *
     * @return Kurftg01
     */
    public function setP0401($p0401)
    {
        $this->p0401 = $p0401;

        return $this;
    }

    /**
     * Get p0401
     *
     * @return float
     */
    public function getP0401()
    {
        return $this->p0401;
    }

    /**
     * Set p0402
     *
     * @param float $p0402
     *
     * @return Kurftg01
     */
    public function setP0402($p0402)
    {
        $this->p0402 = $p0402;

        return $this;
    }

    /**
     * Get p0402
     *
     * @return float
     */
    public function getP0402()
    {
        return $this->p0402;
    }

    /**
     * Set p0403
     *
     * @param float $p0403
     *
     * @return Kurftg01
     */
    public function setP0403($p0403)
    {
        $this->p0403 = $p0403;

        return $this;
    }

    /**
     * Get p0403
     *
     * @return float
     */
    public function getP0403()
    {
        return $this->p0403;
    }

    /**
     * Set p0404
     *
     * @param float $p0404
     *
     * @return Kurftg01
     */
    public function setP0404($p0404)
    {
        $this->p0404 = $p0404;

        return $this;
    }

    /**
     * Get p0404
     *
     * @return float
     */
    public function getP0404()
    {
        return $this->p0404;
    }

    /**
     * Set p0405
     *
     * @param float $p0405
     *
     * @return Kurftg01
     */
    public function setP0405($p0405)
    {
        $this->p0405 = $p0405;

        return $this;
    }

    /**
     * Get p0405
     *
     * @return float
     */
    public function getP0405()
    {
        return $this->p0405;
    }

    /**
     * Set p0406
     *
     * @param float $p0406
     *
     * @return Kurftg01
     */
    public function setP0406($p0406)
    {
        $this->p0406 = $p0406;

        return $this;
    }

    /**
     * Get p0406
     *
     * @return float
     */
    public function getP0406()
    {
        return $this->p0406;
    }

    /**
     * Set p0407
     *
     * @param float $p0407
     *
     * @return Kurftg01
     */
    public function setP0407($p0407)
    {
        $this->p0407 = $p0407;

        return $this;
    }

    /**
     * Get p0407
     *
     * @return float
     */
    public function getP0407()
    {
        return $this->p0407;
    }

    /**
     * Set p0408
     *
     * @param float $p0408
     *
     * @return Kurftg01
     */
    public function setP0408($p0408)
    {
        $this->p0408 = $p0408;

        return $this;
    }

    /**
     * Get p0408
     *
     * @return float
     */
    public function getP0408()
    {
        return $this->p0408;
    }

    /**
     * Set p0501
     *
     * @param float $p0501
     *
     * @return Kurftg01
     */
    public function setP0501($p0501)
    {
        $this->p0501 = $p0501;

        return $this;
    }

    /**
     * Get p0501
     *
     * @return float
     */
    public function getP0501()
    {
        return $this->p0501;
    }

    /**
     * Set p0502
     *
     * @param float $p0502
     *
     * @return Kurftg01
     */
    public function setP0502($p0502)
    {
        $this->p0502 = $p0502;

        return $this;
    }

    /**
     * Get p0502
     *
     * @return float
     */
    public function getP0502()
    {
        return $this->p0502;
    }

    /**
     * Set p0503
     *
     * @param float $p0503
     *
     * @return Kurftg01
     */
    public function setP0503($p0503)
    {
        $this->p0503 = $p0503;

        return $this;
    }

    /**
     * Get p0503
     *
     * @return float
     */
    public function getP0503()
    {
        return $this->p0503;
    }

    /**
     * Set p0504
     *
     * @param float $p0504
     *
     * @return Kurftg01
     */
    public function setP0504($p0504)
    {
        $this->p0504 = $p0504;

        return $this;
    }

    /**
     * Get p0504
     *
     * @return float
     */
    public function getP0504()
    {
        return $this->p0504;
    }

    /**
     * Set p0505
     *
     * @param float $p0505
     *
     * @return Kurftg01
     */
    public function setP0505($p0505)
    {
        $this->p0505 = $p0505;

        return $this;
    }

    /**
     * Get p0505
     *
     * @return float
     */
    public function getP0505()
    {
        return $this->p0505;
    }

    /**
     * Set p0506
     *
     * @param float $p0506
     *
     * @return Kurftg01
     */
    public function setP0506($p0506)
    {
        $this->p0506 = $p0506;

        return $this;
    }

    /**
     * Get p0506
     *
     * @return float
     */
    public function getP0506()
    {
        return $this->p0506;
    }

    /**
     * Set p0507
     *
     * @param float $p0507
     *
     * @return Kurftg01
     */
    public function setP0507($p0507)
    {
        $this->p0507 = $p0507;

        return $this;
    }

    /**
     * Get p0507
     *
     * @return float
     */
    public function getP0507()
    {
        return $this->p0507;
    }

    /**
     * Set p0508
     *
     * @param float $p0508
     *
     * @return Kurftg01
     */
    public function setP0508($p0508)
    {
        $this->p0508 = $p0508;

        return $this;
    }

    /**
     * Get p0508
     *
     * @return float
     */
    public function getP0508()
    {
        return $this->p0508;
    }

    /**
     * Set p0601
     *
     * @param float $p0601
     *
     * @return Kurftg01
     */
    public function setP0601($p0601)
    {
        $this->p0601 = $p0601;

        return $this;
    }

    /**
     * Get p0601
     *
     * @return float
     */
    public function getP0601()
    {
        return $this->p0601;
    }

    /**
     * Set p0602
     *
     * @param float $p0602
     *
     * @return Kurftg01
     */
    public function setP0602($p0602)
    {
        $this->p0602 = $p0602;

        return $this;
    }

    /**
     * Get p0602
     *
     * @return float
     */
    public function getP0602()
    {
        return $this->p0602;
    }

    /**
     * Set p0603
     *
     * @param float $p0603
     *
     * @return Kurftg01
     */
    public function setP0603($p0603)
    {
        $this->p0603 = $p0603;

        return $this;
    }

    /**
     * Get p0603
     *
     * @return float
     */
    public function getP0603()
    {
        return $this->p0603;
    }

    /**
     * Set p0604
     *
     * @param float $p0604
     *
     * @return Kurftg01
     */
    public function setP0604($p0604)
    {
        $this->p0604 = $p0604;

        return $this;
    }

    /**
     * Get p0604
     *
     * @return float
     */
    public function getP0604()
    {
        return $this->p0604;
    }

    /**
     * Set p0605
     *
     * @param float $p0605
     *
     * @return Kurftg01
     */
    public function setP0605($p0605)
    {
        $this->p0605 = $p0605;

        return $this;
    }

    /**
     * Get p0605
     *
     * @return float
     */
    public function getP0605()
    {
        return $this->p0605;
    }

    /**
     * Set p0606
     *
     * @param float $p0606
     *
     * @return Kurftg01
     */
    public function setP0606($p0606)
    {
        $this->p0606 = $p0606;

        return $this;
    }

    /**
     * Get p0606
     *
     * @return float
     */
    public function getP0606()
    {
        return $this->p0606;
    }

    /**
     * Set p0607
     *
     * @param float $p0607
     *
     * @return Kurftg01
     */
    public function setP0607($p0607)
    {
        $this->p0607 = $p0607;

        return $this;
    }

    /**
     * Get p0607
     *
     * @return float
     */
    public function getP0607()
    {
        return $this->p0607;
    }

    /**
     * Set p0608
     *
     * @param float $p0608
     *
     * @return Kurftg01
     */
    public function setP0608($p0608)
    {
        $this->p0608 = $p0608;

        return $this;
    }

    /**
     * Get p0608
     *
     * @return float
     */
    public function getP0608()
    {
        return $this->p0608;
    }

    /**
     * Set p0701
     *
     * @param float $p0701
     *
     * @return Kurftg01
     */
    public function setP0701($p0701)
    {
        $this->p0701 = $p0701;

        return $this;
    }

    /**
     * Get p0701
     *
     * @return float
     */
    public function getP0701()
    {
        return $this->p0701;
    }

    /**
     * Set p0702
     *
     * @param float $p0702
     *
     * @return Kurftg01
     */
    public function setP0702($p0702)
    {
        $this->p0702 = $p0702;

        return $this;
    }

    /**
     * Get p0702
     *
     * @return float
     */
    public function getP0702()
    {
        return $this->p0702;
    }

    /**
     * Set p0703
     *
     * @param float $p0703
     *
     * @return Kurftg01
     */
    public function setP0703($p0703)
    {
        $this->p0703 = $p0703;

        return $this;
    }

    /**
     * Get p0703
     *
     * @return float
     */
    public function getP0703()
    {
        return $this->p0703;
    }

    /**
     * Set p0704
     *
     * @param float $p0704
     *
     * @return Kurftg01
     */
    public function setP0704($p0704)
    {
        $this->p0704 = $p0704;

        return $this;
    }

    /**
     * Get p0704
     *
     * @return float
     */
    public function getP0704()
    {
        return $this->p0704;
    }

    /**
     * Set p0705
     *
     * @param float $p0705
     *
     * @return Kurftg01
     */
    public function setP0705($p0705)
    {
        $this->p0705 = $p0705;

        return $this;
    }

    /**
     * Get p0705
     *
     * @return float
     */
    public function getP0705()
    {
        return $this->p0705;
    }

    /**
     * Set p0706
     *
     * @param float $p0706
     *
     * @return Kurftg01
     */
    public function setP0706($p0706)
    {
        $this->p0706 = $p0706;

        return $this;
    }

    /**
     * Get p0706
     *
     * @return float
     */
    public function getP0706()
    {
        return $this->p0706;
    }

    /**
     * Set p0707
     *
     * @param float $p0707
     *
     * @return Kurftg01
     */
    public function setP0707($p0707)
    {
        $this->p0707 = $p0707;

        return $this;
    }

    /**
     * Get p0707
     *
     * @return float
     */
    public function getP0707()
    {
        return $this->p0707;
    }

    /**
     * Set p0708
     *
     * @param float $p0708
     *
     * @return Kurftg01
     */
    public function setP0708($p0708)
    {
        $this->p0708 = $p0708;

        return $this;
    }

    /**
     * Get p0708
     *
     * @return float
     */
    public function getP0708()
    {
        return $this->p0708;
    }

    /**
     * Set p0801
     *
     * @param float $p0801
     *
     * @return Kurftg01
     */
    public function setP0801($p0801)
    {
        $this->p0801 = $p0801;

        return $this;
    }

    /**
     * Get p0801
     *
     * @return float
     */
    public function getP0801()
    {
        return $this->p0801;
    }

    /**
     * Set p0802
     *
     * @param float $p0802
     *
     * @return Kurftg01
     */
    public function setP0802($p0802)
    {
        $this->p0802 = $p0802;

        return $this;
    }

    /**
     * Get p0802
     *
     * @return float
     */
    public function getP0802()
    {
        return $this->p0802;
    }

    /**
     * Set p0803
     *
     * @param float $p0803
     *
     * @return Kurftg01
     */
    public function setP0803($p0803)
    {
        $this->p0803 = $p0803;

        return $this;
    }

    /**
     * Get p0803
     *
     * @return float
     */
    public function getP0803()
    {
        return $this->p0803;
    }

    /**
     * Set p0804
     *
     * @param float $p0804
     *
     * @return Kurftg01
     */
    public function setP0804($p0804)
    {
        $this->p0804 = $p0804;

        return $this;
    }

    /**
     * Get p0804
     *
     * @return float
     */
    public function getP0804()
    {
        return $this->p0804;
    }

    /**
     * Set p0805
     *
     * @param float $p0805
     *
     * @return Kurftg01
     */
    public function setP0805($p0805)
    {
        $this->p0805 = $p0805;

        return $this;
    }

    /**
     * Get p0805
     *
     * @return float
     */
    public function getP0805()
    {
        return $this->p0805;
    }

    /**
     * Set p0806
     *
     * @param float $p0806
     *
     * @return Kurftg01
     */
    public function setP0806($p0806)
    {
        $this->p0806 = $p0806;

        return $this;
    }

    /**
     * Get p0806
     *
     * @return float
     */
    public function getP0806()
    {
        return $this->p0806;
    }

    /**
     * Set p0807
     *
     * @param float $p0807
     *
     * @return Kurftg01
     */
    public function setP0807($p0807)
    {
        $this->p0807 = $p0807;

        return $this;
    }

    /**
     * Get p0807
     *
     * @return float
     */
    public function getP0807()
    {
        return $this->p0807;
    }

    /**
     * Set p0808
     *
     * @param float $p0808
     *
     * @return Kurftg01
     */
    public function setP0808($p0808)
    {
        $this->p0808 = $p0808;

        return $this;
    }

    /**
     * Get p0808
     *
     * @return float
     */
    public function getP0808()
    {
        return $this->p0808;
    }

    /**
     * Set a0101
     *
     * @param float $a0101
     *
     * @return Kurftg01
     */
    public function setA0101($a0101)
    {
        $this->a0101 = $a0101;

        return $this;
    }

    /**
     * Get a0101
     *
     * @return float
     */
    public function getA0101()
    {
        return $this->a0101;
    }

    /**
     * Set a0102
     *
     * @param float $a0102
     *
     * @return Kurftg01
     */
    public function setA0102($a0102)
    {
        $this->a0102 = $a0102;

        return $this;
    }

    /**
     * Get a0102
     *
     * @return float
     */
    public function getA0102()
    {
        return $this->a0102;
    }

    /**
     * Set a0103
     *
     * @param float $a0103
     *
     * @return Kurftg01
     */
    public function setA0103($a0103)
    {
        $this->a0103 = $a0103;

        return $this;
    }

    /**
     * Get a0103
     *
     * @return float
     */
    public function getA0103()
    {
        return $this->a0103;
    }

    /**
     * Set a0104
     *
     * @param float $a0104
     *
     * @return Kurftg01
     */
    public function setA0104($a0104)
    {
        $this->a0104 = $a0104;

        return $this;
    }

    /**
     * Get a0104
     *
     * @return float
     */
    public function getA0104()
    {
        return $this->a0104;
    }

    /**
     * Set a0105
     *
     * @param float $a0105
     *
     * @return Kurftg01
     */
    public function setA0105($a0105)
    {
        $this->a0105 = $a0105;

        return $this;
    }

    /**
     * Get a0105
     *
     * @return float
     */
    public function getA0105()
    {
        return $this->a0105;
    }

    /**
     * Set a0106
     *
     * @param float $a0106
     *
     * @return Kurftg01
     */
    public function setA0106($a0106)
    {
        $this->a0106 = $a0106;

        return $this;
    }

    /**
     * Get a0106
     *
     * @return float
     */
    public function getA0106()
    {
        return $this->a0106;
    }

    /**
     * Set a0107
     *
     * @param float $a0107
     *
     * @return Kurftg01
     */
    public function setA0107($a0107)
    {
        $this->a0107 = $a0107;

        return $this;
    }

    /**
     * Get a0107
     *
     * @return float
     */
    public function getA0107()
    {
        return $this->a0107;
    }

    /**
     * Set a0108
     *
     * @param float $a0108
     *
     * @return Kurftg01
     */
    public function setA0108($a0108)
    {
        $this->a0108 = $a0108;

        return $this;
    }

    /**
     * Get a0108
     *
     * @return float
     */
    public function getA0108()
    {
        return $this->a0108;
    }

    /**
     * Set a0201
     *
     * @param float $a0201
     *
     * @return Kurftg01
     */
    public function setA0201($a0201)
    {
        $this->a0201 = $a0201;

        return $this;
    }

    /**
     * Get a0201
     *
     * @return float
     */
    public function getA0201()
    {
        return $this->a0201;
    }

    /**
     * Set a0202
     *
     * @param float $a0202
     *
     * @return Kurftg01
     */
    public function setA0202($a0202)
    {
        $this->a0202 = $a0202;

        return $this;
    }

    /**
     * Get a0202
     *
     * @return float
     */
    public function getA0202()
    {
        return $this->a0202;
    }

    /**
     * Set a0203
     *
     * @param float $a0203
     *
     * @return Kurftg01
     */
    public function setA0203($a0203)
    {
        $this->a0203 = $a0203;

        return $this;
    }

    /**
     * Get a0203
     *
     * @return float
     */
    public function getA0203()
    {
        return $this->a0203;
    }

    /**
     * Set a0204
     *
     * @param float $a0204
     *
     * @return Kurftg01
     */
    public function setA0204($a0204)
    {
        $this->a0204 = $a0204;

        return $this;
    }

    /**
     * Get a0204
     *
     * @return float
     */
    public function getA0204()
    {
        return $this->a0204;
    }

    /**
     * Set a0205
     *
     * @param float $a0205
     *
     * @return Kurftg01
     */
    public function setA0205($a0205)
    {
        $this->a0205 = $a0205;

        return $this;
    }

    /**
     * Get a0205
     *
     * @return float
     */
    public function getA0205()
    {
        return $this->a0205;
    }

    /**
     * Set a0206
     *
     * @param float $a0206
     *
     * @return Kurftg01
     */
    public function setA0206($a0206)
    {
        $this->a0206 = $a0206;

        return $this;
    }

    /**
     * Get a0206
     *
     * @return float
     */
    public function getA0206()
    {
        return $this->a0206;
    }

    /**
     * Set a0207
     *
     * @param float $a0207
     *
     * @return Kurftg01
     */
    public function setA0207($a0207)
    {
        $this->a0207 = $a0207;

        return $this;
    }

    /**
     * Get a0207
     *
     * @return float
     */
    public function getA0207()
    {
        return $this->a0207;
    }

    /**
     * Set a0208
     *
     * @param float $a0208
     *
     * @return Kurftg01
     */
    public function setA0208($a0208)
    {
        $this->a0208 = $a0208;

        return $this;
    }

    /**
     * Get a0208
     *
     * @return float
     */
    public function getA0208()
    {
        return $this->a0208;
    }

    /**
     * Set a0301
     *
     * @param float $a0301
     *
     * @return Kurftg01
     */
    public function setA0301($a0301)
    {
        $this->a0301 = $a0301;

        return $this;
    }

    /**
     * Get a0301
     *
     * @return float
     */
    public function getA0301()
    {
        return $this->a0301;
    }

    /**
     * Set a0302
     *
     * @param float $a0302
     *
     * @return Kurftg01
     */
    public function setA0302($a0302)
    {
        $this->a0302 = $a0302;

        return $this;
    }

    /**
     * Get a0302
     *
     * @return float
     */
    public function getA0302()
    {
        return $this->a0302;
    }

    /**
     * Set a0303
     *
     * @param float $a0303
     *
     * @return Kurftg01
     */
    public function setA0303($a0303)
    {
        $this->a0303 = $a0303;

        return $this;
    }

    /**
     * Get a0303
     *
     * @return float
     */
    public function getA0303()
    {
        return $this->a0303;
    }

    /**
     * Set a0304
     *
     * @param float $a0304
     *
     * @return Kurftg01
     */
    public function setA0304($a0304)
    {
        $this->a0304 = $a0304;

        return $this;
    }

    /**
     * Get a0304
     *
     * @return float
     */
    public function getA0304()
    {
        return $this->a0304;
    }

    /**
     * Set a0305
     *
     * @param float $a0305
     *
     * @return Kurftg01
     */
    public function setA0305($a0305)
    {
        $this->a0305 = $a0305;

        return $this;
    }

    /**
     * Get a0305
     *
     * @return float
     */
    public function getA0305()
    {
        return $this->a0305;
    }

    /**
     * Set a0306
     *
     * @param float $a0306
     *
     * @return Kurftg01
     */
    public function setA0306($a0306)
    {
        $this->a0306 = $a0306;

        return $this;
    }

    /**
     * Get a0306
     *
     * @return float
     */
    public function getA0306()
    {
        return $this->a0306;
    }

    /**
     * Set a0307
     *
     * @param float $a0307
     *
     * @return Kurftg01
     */
    public function setA0307($a0307)
    {
        $this->a0307 = $a0307;

        return $this;
    }

    /**
     * Get a0307
     *
     * @return float
     */
    public function getA0307()
    {
        return $this->a0307;
    }

    /**
     * Set a0308
     *
     * @param float $a0308
     *
     * @return Kurftg01
     */
    public function setA0308($a0308)
    {
        $this->a0308 = $a0308;

        return $this;
    }

    /**
     * Get a0308
     *
     * @return float
     */
    public function getA0308()
    {
        return $this->a0308;
    }

    /**
     * Set a0401
     *
     * @param float $a0401
     *
     * @return Kurftg01
     */
    public function setA0401($a0401)
    {
        $this->a0401 = $a0401;

        return $this;
    }

    /**
     * Get a0401
     *
     * @return float
     */
    public function getA0401()
    {
        return $this->a0401;
    }

    /**
     * Set a0402
     *
     * @param float $a0402
     *
     * @return Kurftg01
     */
    public function setA0402($a0402)
    {
        $this->a0402 = $a0402;

        return $this;
    }

    /**
     * Get a0402
     *
     * @return float
     */
    public function getA0402()
    {
        return $this->a0402;
    }

    /**
     * Set a0403
     *
     * @param float $a0403
     *
     * @return Kurftg01
     */
    public function setA0403($a0403)
    {
        $this->a0403 = $a0403;

        return $this;
    }

    /**
     * Get a0403
     *
     * @return float
     */
    public function getA0403()
    {
        return $this->a0403;
    }

    /**
     * Set a0404
     *
     * @param float $a0404
     *
     * @return Kurftg01
     */
    public function setA0404($a0404)
    {
        $this->a0404 = $a0404;

        return $this;
    }

    /**
     * Get a0404
     *
     * @return float
     */
    public function getA0404()
    {
        return $this->a0404;
    }

    /**
     * Set a0405
     *
     * @param float $a0405
     *
     * @return Kurftg01
     */
    public function setA0405($a0405)
    {
        $this->a0405 = $a0405;

        return $this;
    }

    /**
     * Get a0405
     *
     * @return float
     */
    public function getA0405()
    {
        return $this->a0405;
    }

    /**
     * Set a0406
     *
     * @param float $a0406
     *
     * @return Kurftg01
     */
    public function setA0406($a0406)
    {
        $this->a0406 = $a0406;

        return $this;
    }

    /**
     * Get a0406
     *
     * @return float
     */
    public function getA0406()
    {
        return $this->a0406;
    }

    /**
     * Set a0407
     *
     * @param float $a0407
     *
     * @return Kurftg01
     */
    public function setA0407($a0407)
    {
        $this->a0407 = $a0407;

        return $this;
    }

    /**
     * Get a0407
     *
     * @return float
     */
    public function getA0407()
    {
        return $this->a0407;
    }

    /**
     * Set a0408
     *
     * @param float $a0408
     *
     * @return Kurftg01
     */
    public function setA0408($a0408)
    {
        $this->a0408 = $a0408;

        return $this;
    }

    /**
     * Get a0408
     *
     * @return float
     */
    public function getA0408()
    {
        return $this->a0408;
    }

    /**
     * Set a0501
     *
     * @param float $a0501
     *
     * @return Kurftg01
     */
    public function setA0501($a0501)
    {
        $this->a0501 = $a0501;

        return $this;
    }

    /**
     * Get a0501
     *
     * @return float
     */
    public function getA0501()
    {
        return $this->a0501;
    }

    /**
     * Set a0502
     *
     * @param float $a0502
     *
     * @return Kurftg01
     */
    public function setA0502($a0502)
    {
        $this->a0502 = $a0502;

        return $this;
    }

    /**
     * Get a0502
     *
     * @return float
     */
    public function getA0502()
    {
        return $this->a0502;
    }

    /**
     * Set a0503
     *
     * @param float $a0503
     *
     * @return Kurftg01
     */
    public function setA0503($a0503)
    {
        $this->a0503 = $a0503;

        return $this;
    }

    /**
     * Get a0503
     *
     * @return float
     */
    public function getA0503()
    {
        return $this->a0503;
    }

    /**
     * Set a0504
     *
     * @param float $a0504
     *
     * @return Kurftg01
     */
    public function setA0504($a0504)
    {
        $this->a0504 = $a0504;

        return $this;
    }

    /**
     * Get a0504
     *
     * @return float
     */
    public function getA0504()
    {
        return $this->a0504;
    }

    /**
     * Set a0505
     *
     * @param float $a0505
     *
     * @return Kurftg01
     */
    public function setA0505($a0505)
    {
        $this->a0505 = $a0505;

        return $this;
    }

    /**
     * Get a0505
     *
     * @return float
     */
    public function getA0505()
    {
        return $this->a0505;
    }

    /**
     * Set a0506
     *
     * @param float $a0506
     *
     * @return Kurftg01
     */
    public function setA0506($a0506)
    {
        $this->a0506 = $a0506;

        return $this;
    }

    /**
     * Get a0506
     *
     * @return float
     */
    public function getA0506()
    {
        return $this->a0506;
    }

    /**
     * Set a0507
     *
     * @param float $a0507
     *
     * @return Kurftg01
     */
    public function setA0507($a0507)
    {
        $this->a0507 = $a0507;

        return $this;
    }

    /**
     * Get a0507
     *
     * @return float
     */
    public function getA0507()
    {
        return $this->a0507;
    }

    /**
     * Set a0508
     *
     * @param float $a0508
     *
     * @return Kurftg01
     */
    public function setA0508($a0508)
    {
        $this->a0508 = $a0508;

        return $this;
    }

    /**
     * Get a0508
     *
     * @return float
     */
    public function getA0508()
    {
        return $this->a0508;
    }

    /**
     * Set a0601
     *
     * @param float $a0601
     *
     * @return Kurftg01
     */
    public function setA0601($a0601)
    {
        $this->a0601 = $a0601;

        return $this;
    }

    /**
     * Get a0601
     *
     * @return float
     */
    public function getA0601()
    {
        return $this->a0601;
    }

    /**
     * Set a0602
     *
     * @param float $a0602
     *
     * @return Kurftg01
     */
    public function setA0602($a0602)
    {
        $this->a0602 = $a0602;

        return $this;
    }

    /**
     * Get a0602
     *
     * @return float
     */
    public function getA0602()
    {
        return $this->a0602;
    }

    /**
     * Set a0603
     *
     * @param float $a0603
     *
     * @return Kurftg01
     */
    public function setA0603($a0603)
    {
        $this->a0603 = $a0603;

        return $this;
    }

    /**
     * Get a0603
     *
     * @return float
     */
    public function getA0603()
    {
        return $this->a0603;
    }

    /**
     * Set a0604
     *
     * @param float $a0604
     *
     * @return Kurftg01
     */
    public function setA0604($a0604)
    {
        $this->a0604 = $a0604;

        return $this;
    }

    /**
     * Get a0604
     *
     * @return float
     */
    public function getA0604()
    {
        return $this->a0604;
    }

    /**
     * Set a0605
     *
     * @param float $a0605
     *
     * @return Kurftg01
     */
    public function setA0605($a0605)
    {
        $this->a0605 = $a0605;

        return $this;
    }

    /**
     * Get a0605
     *
     * @return float
     */
    public function getA0605()
    {
        return $this->a0605;
    }

    /**
     * Set a0606
     *
     * @param float $a0606
     *
     * @return Kurftg01
     */
    public function setA0606($a0606)
    {
        $this->a0606 = $a0606;

        return $this;
    }

    /**
     * Get a0606
     *
     * @return float
     */
    public function getA0606()
    {
        return $this->a0606;
    }

    /**
     * Set a0607
     *
     * @param float $a0607
     *
     * @return Kurftg01
     */
    public function setA0607($a0607)
    {
        $this->a0607 = $a0607;

        return $this;
    }

    /**
     * Get a0607
     *
     * @return float
     */
    public function getA0607()
    {
        return $this->a0607;
    }

    /**
     * Set a0608
     *
     * @param float $a0608
     *
     * @return Kurftg01
     */
    public function setA0608($a0608)
    {
        $this->a0608 = $a0608;

        return $this;
    }

    /**
     * Get a0608
     *
     * @return float
     */
    public function getA0608()
    {
        return $this->a0608;
    }

    /**
     * Set a0701
     *
     * @param float $a0701
     *
     * @return Kurftg01
     */
    public function setA0701($a0701)
    {
        $this->a0701 = $a0701;

        return $this;
    }

    /**
     * Get a0701
     *
     * @return float
     */
    public function getA0701()
    {
        return $this->a0701;
    }

    /**
     * Set a0702
     *
     * @param float $a0702
     *
     * @return Kurftg01
     */
    public function setA0702($a0702)
    {
        $this->a0702 = $a0702;

        return $this;
    }

    /**
     * Get a0702
     *
     * @return float
     */
    public function getA0702()
    {
        return $this->a0702;
    }

    /**
     * Set a0703
     *
     * @param float $a0703
     *
     * @return Kurftg01
     */
    public function setA0703($a0703)
    {
        $this->a0703 = $a0703;

        return $this;
    }

    /**
     * Get a0703
     *
     * @return float
     */
    public function getA0703()
    {
        return $this->a0703;
    }

    /**
     * Set a0704
     *
     * @param float $a0704
     *
     * @return Kurftg01
     */
    public function setA0704($a0704)
    {
        $this->a0704 = $a0704;

        return $this;
    }

    /**
     * Get a0704
     *
     * @return float
     */
    public function getA0704()
    {
        return $this->a0704;
    }

    /**
     * Set a0705
     *
     * @param float $a0705
     *
     * @return Kurftg01
     */
    public function setA0705($a0705)
    {
        $this->a0705 = $a0705;

        return $this;
    }

    /**
     * Get a0705
     *
     * @return float
     */
    public function getA0705()
    {
        return $this->a0705;
    }

    /**
     * Set a0706
     *
     * @param float $a0706
     *
     * @return Kurftg01
     */
    public function setA0706($a0706)
    {
        $this->a0706 = $a0706;

        return $this;
    }

    /**
     * Get a0706
     *
     * @return float
     */
    public function getA0706()
    {
        return $this->a0706;
    }

    /**
     * Set a0707
     *
     * @param float $a0707
     *
     * @return Kurftg01
     */
    public function setA0707($a0707)
    {
        $this->a0707 = $a0707;

        return $this;
    }

    /**
     * Get a0707
     *
     * @return float
     */
    public function getA0707()
    {
        return $this->a0707;
    }

    /**
     * Set a0708
     *
     * @param float $a0708
     *
     * @return Kurftg01
     */
    public function setA0708($a0708)
    {
        $this->a0708 = $a0708;

        return $this;
    }

    /**
     * Get a0708
     *
     * @return float
     */
    public function getA0708()
    {
        return $this->a0708;
    }

    /**
     * Set a0801
     *
     * @param float $a0801
     *
     * @return Kurftg01
     */
    public function setA0801($a0801)
    {
        $this->a0801 = $a0801;

        return $this;
    }

    /**
     * Get a0801
     *
     * @return float
     */
    public function getA0801()
    {
        return $this->a0801;
    }

    /**
     * Set a0802
     *
     * @param float $a0802
     *
     * @return Kurftg01
     */
    public function setA0802($a0802)
    {
        $this->a0802 = $a0802;

        return $this;
    }

    /**
     * Get a0802
     *
     * @return float
     */
    public function getA0802()
    {
        return $this->a0802;
    }

    /**
     * Set a0803
     *
     * @param float $a0803
     *
     * @return Kurftg01
     */
    public function setA0803($a0803)
    {
        $this->a0803 = $a0803;

        return $this;
    }

    /**
     * Get a0803
     *
     * @return float
     */
    public function getA0803()
    {
        return $this->a0803;
    }

    /**
     * Set a0804
     *
     * @param float $a0804
     *
     * @return Kurftg01
     */
    public function setA0804($a0804)
    {
        $this->a0804 = $a0804;

        return $this;
    }

    /**
     * Get a0804
     *
     * @return float
     */
    public function getA0804()
    {
        return $this->a0804;
    }

    /**
     * Set a0805
     *
     * @param float $a0805
     *
     * @return Kurftg01
     */
    public function setA0805($a0805)
    {
        $this->a0805 = $a0805;

        return $this;
    }

    /**
     * Get a0805
     *
     * @return float
     */
    public function getA0805()
    {
        return $this->a0805;
    }

    /**
     * Set a0806
     *
     * @param float $a0806
     *
     * @return Kurftg01
     */
    public function setA0806($a0806)
    {
        $this->a0806 = $a0806;

        return $this;
    }

    /**
     * Get a0806
     *
     * @return float
     */
    public function getA0806()
    {
        return $this->a0806;
    }

    /**
     * Set a0807
     *
     * @param float $a0807
     *
     * @return Kurftg01
     */
    public function setA0807($a0807)
    {
        $this->a0807 = $a0807;

        return $this;
    }

    /**
     * Get a0807
     *
     * @return float
     */
    public function getA0807()
    {
        return $this->a0807;
    }

    /**
     * Set a0808
     *
     * @param float $a0808
     *
     * @return Kurftg01
     */
    public function setA0808($a0808)
    {
        $this->a0808 = $a0808;

        return $this;
    }

    /**
     * Get a0808
     *
     * @return float
     */
    public function getA0808()
    {
        return $this->a0808;
    }

    /**
     * Set p0109
     *
     * @param float $p0109
     *
     * @return Kurftg01
     */
    public function setP0109($p0109)
    {
        $this->p0109 = $p0109;

        return $this;
    }

    /**
     * Get p0109
     *
     * @return float
     */
    public function getP0109()
    {
        return $this->p0109;
    }

    /**
     * Set p01010
     *
     * @param float $p01010
     *
     * @return Kurftg01
     */
    public function setP01010($p01010)
    {
        $this->p01010 = $p01010;

        return $this;
    }

    /**
     * Get p01010
     *
     * @return float
     */
    public function getP01010()
    {
        return $this->p01010;
    }

    /**
     * Set p01011
     *
     * @param float $p01011
     *
     * @return Kurftg01
     */
    public function setP01011($p01011)
    {
        $this->p01011 = $p01011;

        return $this;
    }

    /**
     * Get p01011
     *
     * @return float
     */
    public function getP01011()
    {
        return $this->p01011;
    }

    /**
     * Set p0209
     *
     * @param float $p0209
     *
     * @return Kurftg01
     */
    public function setP0209($p0209)
    {
        $this->p0209 = $p0209;

        return $this;
    }

    /**
     * Get p0209
     *
     * @return float
     */
    public function getP0209()
    {
        return $this->p0209;
    }

    /**
     * Set p02010
     *
     * @param float $p02010
     *
     * @return Kurftg01
     */
    public function setP02010($p02010)
    {
        $this->p02010 = $p02010;

        return $this;
    }

    /**
     * Get p02010
     *
     * @return float
     */
    public function getP02010()
    {
        return $this->p02010;
    }

    /**
     * Set p02011
     *
     * @param float $p02011
     *
     * @return Kurftg01
     */
    public function setP02011($p02011)
    {
        $this->p02011 = $p02011;

        return $this;
    }

    /**
     * Get p02011
     *
     * @return float
     */
    public function getP02011()
    {
        return $this->p02011;
    }

    /**
     * Set p0309
     *
     * @param float $p0309
     *
     * @return Kurftg01
     */
    public function setP0309($p0309)
    {
        $this->p0309 = $p0309;

        return $this;
    }

    /**
     * Get p0309
     *
     * @return float
     */
    public function getP0309()
    {
        return $this->p0309;
    }

    /**
     * Set p03010
     *
     * @param float $p03010
     *
     * @return Kurftg01
     */
    public function setP03010($p03010)
    {
        $this->p03010 = $p03010;

        return $this;
    }

    /**
     * Get p03010
     *
     * @return float
     */
    public function getP03010()
    {
        return $this->p03010;
    }

    /**
     * Set p03011
     *
     * @param float $p03011
     *
     * @return Kurftg01
     */
    public function setP03011($p03011)
    {
        $this->p03011 = $p03011;

        return $this;
    }

    /**
     * Get p03011
     *
     * @return float
     */
    public function getP03011()
    {
        return $this->p03011;
    }

    /**
     * Set p0409
     *
     * @param float $p0409
     *
     * @return Kurftg01
     */
    public function setP0409($p0409)
    {
        $this->p0409 = $p0409;

        return $this;
    }

    /**
     * Get p0409
     *
     * @return float
     */
    public function getP0409()
    {
        return $this->p0409;
    }

    /**
     * Set p04010
     *
     * @param float $p04010
     *
     * @return Kurftg01
     */
    public function setP04010($p04010)
    {
        $this->p04010 = $p04010;

        return $this;
    }

    /**
     * Get p04010
     *
     * @return float
     */
    public function getP04010()
    {
        return $this->p04010;
    }

    /**
     * Set p04011
     *
     * @param float $p04011
     *
     * @return Kurftg01
     */
    public function setP04011($p04011)
    {
        $this->p04011 = $p04011;

        return $this;
    }

    /**
     * Get p04011
     *
     * @return float
     */
    public function getP04011()
    {
        return $this->p04011;
    }

    /**
     * Set p0509
     *
     * @param float $p0509
     *
     * @return Kurftg01
     */
    public function setP0509($p0509)
    {
        $this->p0509 = $p0509;

        return $this;
    }

    /**
     * Get p0509
     *
     * @return float
     */
    public function getP0509()
    {
        return $this->p0509;
    }

    /**
     * Set p05010
     *
     * @param float $p05010
     *
     * @return Kurftg01
     */
    public function setP05010($p05010)
    {
        $this->p05010 = $p05010;

        return $this;
    }

    /**
     * Get p05010
     *
     * @return float
     */
    public function getP05010()
    {
        return $this->p05010;
    }

    /**
     * Set p05011
     *
     * @param float $p05011
     *
     * @return Kurftg01
     */
    public function setP05011($p05011)
    {
        $this->p05011 = $p05011;

        return $this;
    }

    /**
     * Get p05011
     *
     * @return float
     */
    public function getP05011()
    {
        return $this->p05011;
    }

    /**
     * Set p0609
     *
     * @param float $p0609
     *
     * @return Kurftg01
     */
    public function setP0609($p0609)
    {
        $this->p0609 = $p0609;

        return $this;
    }

    /**
     * Get p0609
     *
     * @return float
     */
    public function getP0609()
    {
        return $this->p0609;
    }

    /**
     * Set p06010
     *
     * @param float $p06010
     *
     * @return Kurftg01
     */
    public function setP06010($p06010)
    {
        $this->p06010 = $p06010;

        return $this;
    }

    /**
     * Get p06010
     *
     * @return float
     */
    public function getP06010()
    {
        return $this->p06010;
    }

    /**
     * Set p06011
     *
     * @param float $p06011
     *
     * @return Kurftg01
     */
    public function setP06011($p06011)
    {
        $this->p06011 = $p06011;

        return $this;
    }

    /**
     * Get p06011
     *
     * @return float
     */
    public function getP06011()
    {
        return $this->p06011;
    }

    /**
     * Set p0709
     *
     * @param float $p0709
     *
     * @return Kurftg01
     */
    public function setP0709($p0709)
    {
        $this->p0709 = $p0709;

        return $this;
    }

    /**
     * Get p0709
     *
     * @return float
     */
    public function getP0709()
    {
        return $this->p0709;
    }

    /**
     * Set p07010
     *
     * @param float $p07010
     *
     * @return Kurftg01
     */
    public function setP07010($p07010)
    {
        $this->p07010 = $p07010;

        return $this;
    }

    /**
     * Get p07010
     *
     * @return float
     */
    public function getP07010()
    {
        return $this->p07010;
    }

    /**
     * Set p07011
     *
     * @param float $p07011
     *
     * @return Kurftg01
     */
    public function setP07011($p07011)
    {
        $this->p07011 = $p07011;

        return $this;
    }

    /**
     * Get p07011
     *
     * @return float
     */
    public function getP07011()
    {
        return $this->p07011;
    }

    /**
     * Set p0809
     *
     * @param float $p0809
     *
     * @return Kurftg01
     */
    public function setP0809($p0809)
    {
        $this->p0809 = $p0809;

        return $this;
    }

    /**
     * Get p0809
     *
     * @return float
     */
    public function getP0809()
    {
        return $this->p0809;
    }

    /**
     * Set p08010
     *
     * @param float $p08010
     *
     * @return Kurftg01
     */
    public function setP08010($p08010)
    {
        $this->p08010 = $p08010;

        return $this;
    }

    /**
     * Get p08010
     *
     * @return float
     */
    public function getP08010()
    {
        return $this->p08010;
    }

    /**
     * Set p08011
     *
     * @param float $p08011
     *
     * @return Kurftg01
     */
    public function setP08011($p08011)
    {
        $this->p08011 = $p08011;

        return $this;
    }

    /**
     * Get p08011
     *
     * @return float
     */
    public function getP08011()
    {
        return $this->p08011;
    }

    /**
     * Set p0901
     *
     * @param float $p0901
     *
     * @return Kurftg01
     */
    public function setP0901($p0901)
    {
        $this->p0901 = $p0901;

        return $this;
    }

    /**
     * Get p0901
     *
     * @return float
     */
    public function getP0901()
    {
        return $this->p0901;
    }

    /**
     * Set p0902
     *
     * @param float $p0902
     *
     * @return Kurftg01
     */
    public function setP0902($p0902)
    {
        $this->p0902 = $p0902;

        return $this;
    }

    /**
     * Get p0902
     *
     * @return float
     */
    public function getP0902()
    {
        return $this->p0902;
    }

    /**
     * Set p0903
     *
     * @param float $p0903
     *
     * @return Kurftg01
     */
    public function setP0903($p0903)
    {
        $this->p0903 = $p0903;

        return $this;
    }

    /**
     * Get p0903
     *
     * @return float
     */
    public function getP0903()
    {
        return $this->p0903;
    }

    /**
     * Set p0904
     *
     * @param float $p0904
     *
     * @return Kurftg01
     */
    public function setP0904($p0904)
    {
        $this->p0904 = $p0904;

        return $this;
    }

    /**
     * Get p0904
     *
     * @return float
     */
    public function getP0904()
    {
        return $this->p0904;
    }

    /**
     * Set p0905
     *
     * @param float $p0905
     *
     * @return Kurftg01
     */
    public function setP0905($p0905)
    {
        $this->p0905 = $p0905;

        return $this;
    }

    /**
     * Get p0905
     *
     * @return float
     */
    public function getP0905()
    {
        return $this->p0905;
    }

    /**
     * Set p0906
     *
     * @param float $p0906
     *
     * @return Kurftg01
     */
    public function setP0906($p0906)
    {
        $this->p0906 = $p0906;

        return $this;
    }

    /**
     * Get p0906
     *
     * @return float
     */
    public function getP0906()
    {
        return $this->p0906;
    }

    /**
     * Set p0907
     *
     * @param float $p0907
     *
     * @return Kurftg01
     */
    public function setP0907($p0907)
    {
        $this->p0907 = $p0907;

        return $this;
    }

    /**
     * Get p0907
     *
     * @return float
     */
    public function getP0907()
    {
        return $this->p0907;
    }

    /**
     * Set p0908
     *
     * @param float $p0908
     *
     * @return Kurftg01
     */
    public function setP0908($p0908)
    {
        $this->p0908 = $p0908;

        return $this;
    }

    /**
     * Get p0908
     *
     * @return float
     */
    public function getP0908()
    {
        return $this->p0908;
    }

    /**
     * Set p0909
     *
     * @param float $p0909
     *
     * @return Kurftg01
     */
    public function setP0909($p0909)
    {
        $this->p0909 = $p0909;

        return $this;
    }

    /**
     * Get p0909
     *
     * @return float
     */
    public function getP0909()
    {
        return $this->p0909;
    }

    /**
     * Set p09010
     *
     * @param float $p09010
     *
     * @return Kurftg01
     */
    public function setP09010($p09010)
    {
        $this->p09010 = $p09010;

        return $this;
    }

    /**
     * Get p09010
     *
     * @return float
     */
    public function getP09010()
    {
        return $this->p09010;
    }

    /**
     * Set p09011
     *
     * @param float $p09011
     *
     * @return Kurftg01
     */
    public function setP09011($p09011)
    {
        $this->p09011 = $p09011;

        return $this;
    }

    /**
     * Get p09011
     *
     * @return float
     */
    public function getP09011()
    {
        return $this->p09011;
    }

    /**
     * Set p01001
     *
     * @param float $p01001
     *
     * @return Kurftg01
     */
    public function setP01001($p01001)
    {
        $this->p01001 = $p01001;

        return $this;
    }

    /**
     * Get p01001
     *
     * @return float
     */
    public function getP01001()
    {
        return $this->p01001;
    }

    /**
     * Set p01002
     *
     * @param float $p01002
     *
     * @return Kurftg01
     */
    public function setP01002($p01002)
    {
        $this->p01002 = $p01002;

        return $this;
    }

    /**
     * Get p01002
     *
     * @return float
     */
    public function getP01002()
    {
        return $this->p01002;
    }

    /**
     * Set p01003
     *
     * @param float $p01003
     *
     * @return Kurftg01
     */
    public function setP01003($p01003)
    {
        $this->p01003 = $p01003;

        return $this;
    }

    /**
     * Get p01003
     *
     * @return float
     */
    public function getP01003()
    {
        return $this->p01003;
    }

    /**
     * Set p01004
     *
     * @param float $p01004
     *
     * @return Kurftg01
     */
    public function setP01004($p01004)
    {
        $this->p01004 = $p01004;

        return $this;
    }

    /**
     * Get p01004
     *
     * @return float
     */
    public function getP01004()
    {
        return $this->p01004;
    }

    /**
     * Set p01005
     *
     * @param float $p01005
     *
     * @return Kurftg01
     */
    public function setP01005($p01005)
    {
        $this->p01005 = $p01005;

        return $this;
    }

    /**
     * Get p01005
     *
     * @return float
     */
    public function getP01005()
    {
        return $this->p01005;
    }

    /**
     * Set p01006
     *
     * @param float $p01006
     *
     * @return Kurftg01
     */
    public function setP01006($p01006)
    {
        $this->p01006 = $p01006;

        return $this;
    }

    /**
     * Get p01006
     *
     * @return float
     */
    public function getP01006()
    {
        return $this->p01006;
    }

    /**
     * Set p01007
     *
     * @param float $p01007
     *
     * @return Kurftg01
     */
    public function setP01007($p01007)
    {
        $this->p01007 = $p01007;

        return $this;
    }

    /**
     * Get p01007
     *
     * @return float
     */
    public function getP01007()
    {
        return $this->p01007;
    }

    /**
     * Set p01008
     *
     * @param float $p01008
     *
     * @return Kurftg01
     */
    public function setP01008($p01008)
    {
        $this->p01008 = $p01008;

        return $this;
    }

    /**
     * Get p01008
     *
     * @return float
     */
    public function getP01008()
    {
        return $this->p01008;
    }

    /**
     * Set p01009
     *
     * @param float $p01009
     *
     * @return Kurftg01
     */
    public function setP01009($p01009)
    {
        $this->p01009 = $p01009;

        return $this;
    }

    /**
     * Get p01009
     *
     * @return float
     */
    public function getP01009()
    {
        return $this->p01009;
    }

    /**
     * Set p010010
     *
     * @param float $p010010
     *
     * @return Kurftg01
     */
    public function setP010010($p010010)
    {
        $this->p010010 = $p010010;

        return $this;
    }

    /**
     * Get p010010
     *
     * @return float
     */
    public function getP010010()
    {
        return $this->p010010;
    }

    /**
     * Set p010011
     *
     * @param float $p010011
     *
     * @return Kurftg01
     */
    public function setP010011($p010011)
    {
        $this->p010011 = $p010011;

        return $this;
    }

    /**
     * Get p010011
     *
     * @return float
     */
    public function getP010011()
    {
        return $this->p010011;
    }

    /**
     * Set p01101
     *
     * @param float $p01101
     *
     * @return Kurftg01
     */
    public function setP01101($p01101)
    {
        $this->p01101 = $p01101;

        return $this;
    }

    /**
     * Get p01101
     *
     * @return float
     */
    public function getP01101()
    {
        return $this->p01101;
    }

    /**
     * Set p01102
     *
     * @param float $p01102
     *
     * @return Kurftg01
     */
    public function setP01102($p01102)
    {
        $this->p01102 = $p01102;

        return $this;
    }

    /**
     * Get p01102
     *
     * @return float
     */
    public function getP01102()
    {
        return $this->p01102;
    }

    /**
     * Set p01103
     *
     * @param float $p01103
     *
     * @return Kurftg01
     */
    public function setP01103($p01103)
    {
        $this->p01103 = $p01103;

        return $this;
    }

    /**
     * Get p01103
     *
     * @return float
     */
    public function getP01103()
    {
        return $this->p01103;
    }

    /**
     * Set p01104
     *
     * @param float $p01104
     *
     * @return Kurftg01
     */
    public function setP01104($p01104)
    {
        $this->p01104 = $p01104;

        return $this;
    }

    /**
     * Get p01104
     *
     * @return float
     */
    public function getP01104()
    {
        return $this->p01104;
    }

    /**
     * Set p01105
     *
     * @param float $p01105
     *
     * @return Kurftg01
     */
    public function setP01105($p01105)
    {
        $this->p01105 = $p01105;

        return $this;
    }

    /**
     * Get p01105
     *
     * @return float
     */
    public function getP01105()
    {
        return $this->p01105;
    }

    /**
     * Set p01106
     *
     * @param float $p01106
     *
     * @return Kurftg01
     */
    public function setP01106($p01106)
    {
        $this->p01106 = $p01106;

        return $this;
    }

    /**
     * Get p01106
     *
     * @return float
     */
    public function getP01106()
    {
        return $this->p01106;
    }

    /**
     * Set p01107
     *
     * @param float $p01107
     *
     * @return Kurftg01
     */
    public function setP01107($p01107)
    {
        $this->p01107 = $p01107;

        return $this;
    }

    /**
     * Get p01107
     *
     * @return float
     */
    public function getP01107()
    {
        return $this->p01107;
    }

    /**
     * Set p01108
     *
     * @param float $p01108
     *
     * @return Kurftg01
     */
    public function setP01108($p01108)
    {
        $this->p01108 = $p01108;

        return $this;
    }

    /**
     * Get p01108
     *
     * @return float
     */
    public function getP01108()
    {
        return $this->p01108;
    }

    /**
     * Set p01109
     *
     * @param float $p01109
     *
     * @return Kurftg01
     */
    public function setP01109($p01109)
    {
        $this->p01109 = $p01109;

        return $this;
    }

    /**
     * Get p01109
     *
     * @return float
     */
    public function getP01109()
    {
        return $this->p01109;
    }

    /**
     * Set p011010
     *
     * @param float $p011010
     *
     * @return Kurftg01
     */
    public function setP011010($p011010)
    {
        $this->p011010 = $p011010;

        return $this;
    }

    /**
     * Get p011010
     *
     * @return float
     */
    public function getP011010()
    {
        return $this->p011010;
    }

    /**
     * Set p011011
     *
     * @param float $p011011
     *
     * @return Kurftg01
     */
    public function setP011011($p011011)
    {
        $this->p011011 = $p011011;

        return $this;
    }

    /**
     * Get p011011
     *
     * @return float
     */
    public function getP011011()
    {
        return $this->p011011;
    }

    /**
     * Set a0109
     *
     * @param float $a0109
     *
     * @return Kurftg01
     */
    public function setA0109($a0109)
    {
        $this->a0109 = $a0109;

        return $this;
    }

    /**
     * Get a0109
     *
     * @return float
     */
    public function getA0109()
    {
        return $this->a0109;
    }

    /**
     * Set a01010
     *
     * @param float $a01010
     *
     * @return Kurftg01
     */
    public function setA01010($a01010)
    {
        $this->a01010 = $a01010;

        return $this;
    }

    /**
     * Get a01010
     *
     * @return float
     */
    public function getA01010()
    {
        return $this->a01010;
    }

    /**
     * Set a01011
     *
     * @param float $a01011
     *
     * @return Kurftg01
     */
    public function setA01011($a01011)
    {
        $this->a01011 = $a01011;

        return $this;
    }

    /**
     * Get a01011
     *
     * @return float
     */
    public function getA01011()
    {
        return $this->a01011;
    }

    /**
     * Set a0209
     *
     * @param float $a0209
     *
     * @return Kurftg01
     */
    public function setA0209($a0209)
    {
        $this->a0209 = $a0209;

        return $this;
    }

    /**
     * Get a0209
     *
     * @return float
     */
    public function getA0209()
    {
        return $this->a0209;
    }

    /**
     * Set a02010
     *
     * @param float $a02010
     *
     * @return Kurftg01
     */
    public function setA02010($a02010)
    {
        $this->a02010 = $a02010;

        return $this;
    }

    /**
     * Get a02010
     *
     * @return float
     */
    public function getA02010()
    {
        return $this->a02010;
    }

    /**
     * Set a02011
     *
     * @param float $a02011
     *
     * @return Kurftg01
     */
    public function setA02011($a02011)
    {
        $this->a02011 = $a02011;

        return $this;
    }

    /**
     * Get a02011
     *
     * @return float
     */
    public function getA02011()
    {
        return $this->a02011;
    }

    /**
     * Set a0309
     *
     * @param float $a0309
     *
     * @return Kurftg01
     */
    public function setA0309($a0309)
    {
        $this->a0309 = $a0309;

        return $this;
    }

    /**
     * Get a0309
     *
     * @return float
     */
    public function getA0309()
    {
        return $this->a0309;
    }

    /**
     * Set a03010
     *
     * @param float $a03010
     *
     * @return Kurftg01
     */
    public function setA03010($a03010)
    {
        $this->a03010 = $a03010;

        return $this;
    }

    /**
     * Get a03010
     *
     * @return float
     */
    public function getA03010()
    {
        return $this->a03010;
    }

    /**
     * Set a03011
     *
     * @param float $a03011
     *
     * @return Kurftg01
     */
    public function setA03011($a03011)
    {
        $this->a03011 = $a03011;

        return $this;
    }

    /**
     * Get a03011
     *
     * @return float
     */
    public function getA03011()
    {
        return $this->a03011;
    }

    /**
     * Set a0409
     *
     * @param float $a0409
     *
     * @return Kurftg01
     */
    public function setA0409($a0409)
    {
        $this->a0409 = $a0409;

        return $this;
    }

    /**
     * Get a0409
     *
     * @return float
     */
    public function getA0409()
    {
        return $this->a0409;
    }

    /**
     * Set a04010
     *
     * @param float $a04010
     *
     * @return Kurftg01
     */
    public function setA04010($a04010)
    {
        $this->a04010 = $a04010;

        return $this;
    }

    /**
     * Get a04010
     *
     * @return float
     */
    public function getA04010()
    {
        return $this->a04010;
    }

    /**
     * Set a04011
     *
     * @param float $a04011
     *
     * @return Kurftg01
     */
    public function setA04011($a04011)
    {
        $this->a04011 = $a04011;

        return $this;
    }

    /**
     * Get a04011
     *
     * @return float
     */
    public function getA04011()
    {
        return $this->a04011;
    }

    /**
     * Set a0509
     *
     * @param float $a0509
     *
     * @return Kurftg01
     */
    public function setA0509($a0509)
    {
        $this->a0509 = $a0509;

        return $this;
    }

    /**
     * Get a0509
     *
     * @return float
     */
    public function getA0509()
    {
        return $this->a0509;
    }

    /**
     * Set a05010
     *
     * @param float $a05010
     *
     * @return Kurftg01
     */
    public function setA05010($a05010)
    {
        $this->a05010 = $a05010;

        return $this;
    }

    /**
     * Get a05010
     *
     * @return float
     */
    public function getA05010()
    {
        return $this->a05010;
    }

    /**
     * Set a05011
     *
     * @param float $a05011
     *
     * @return Kurftg01
     */
    public function setA05011($a05011)
    {
        $this->a05011 = $a05011;

        return $this;
    }

    /**
     * Get a05011
     *
     * @return float
     */
    public function getA05011()
    {
        return $this->a05011;
    }

    /**
     * Set a0609
     *
     * @param float $a0609
     *
     * @return Kurftg01
     */
    public function setA0609($a0609)
    {
        $this->a0609 = $a0609;

        return $this;
    }

    /**
     * Get a0609
     *
     * @return float
     */
    public function getA0609()
    {
        return $this->a0609;
    }

    /**
     * Set a06010
     *
     * @param float $a06010
     *
     * @return Kurftg01
     */
    public function setA06010($a06010)
    {
        $this->a06010 = $a06010;

        return $this;
    }

    /**
     * Get a06010
     *
     * @return float
     */
    public function getA06010()
    {
        return $this->a06010;
    }

    /**
     * Set a06011
     *
     * @param float $a06011
     *
     * @return Kurftg01
     */
    public function setA06011($a06011)
    {
        $this->a06011 = $a06011;

        return $this;
    }

    /**
     * Get a06011
     *
     * @return float
     */
    public function getA06011()
    {
        return $this->a06011;
    }

    /**
     * Set a0709
     *
     * @param float $a0709
     *
     * @return Kurftg01
     */
    public function setA0709($a0709)
    {
        $this->a0709 = $a0709;

        return $this;
    }

    /**
     * Get a0709
     *
     * @return float
     */
    public function getA0709()
    {
        return $this->a0709;
    }

    /**
     * Set a07010
     *
     * @param float $a07010
     *
     * @return Kurftg01
     */
    public function setA07010($a07010)
    {
        $this->a07010 = $a07010;

        return $this;
    }

    /**
     * Get a07010
     *
     * @return float
     */
    public function getA07010()
    {
        return $this->a07010;
    }

    /**
     * Set a07011
     *
     * @param float $a07011
     *
     * @return Kurftg01
     */
    public function setA07011($a07011)
    {
        $this->a07011 = $a07011;

        return $this;
    }

    /**
     * Get a07011
     *
     * @return float
     */
    public function getA07011()
    {
        return $this->a07011;
    }

    /**
     * Set a0809
     *
     * @param float $a0809
     *
     * @return Kurftg01
     */
    public function setA0809($a0809)
    {
        $this->a0809 = $a0809;

        return $this;
    }

    /**
     * Get a0809
     *
     * @return float
     */
    public function getA0809()
    {
        return $this->a0809;
    }

    /**
     * Set a08010
     *
     * @param float $a08010
     *
     * @return Kurftg01
     */
    public function setA08010($a08010)
    {
        $this->a08010 = $a08010;

        return $this;
    }

    /**
     * Get a08010
     *
     * @return float
     */
    public function getA08010()
    {
        return $this->a08010;
    }

    /**
     * Set a08011
     *
     * @param float $a08011
     *
     * @return Kurftg01
     */
    public function setA08011($a08011)
    {
        $this->a08011 = $a08011;

        return $this;
    }

    /**
     * Get a08011
     *
     * @return float
     */
    public function getA08011()
    {
        return $this->a08011;
    }

    /**
     * Set a0901
     *
     * @param float $a0901
     *
     * @return Kurftg01
     */
    public function setA0901($a0901)
    {
        $this->a0901 = $a0901;

        return $this;
    }

    /**
     * Get a0901
     *
     * @return float
     */
    public function getA0901()
    {
        return $this->a0901;
    }

    /**
     * Set a0902
     *
     * @param float $a0902
     *
     * @return Kurftg01
     */
    public function setA0902($a0902)
    {
        $this->a0902 = $a0902;

        return $this;
    }

    /**
     * Get a0902
     *
     * @return float
     */
    public function getA0902()
    {
        return $this->a0902;
    }

    /**
     * Set a0903
     *
     * @param float $a0903
     *
     * @return Kurftg01
     */
    public function setA0903($a0903)
    {
        $this->a0903 = $a0903;

        return $this;
    }

    /**
     * Get a0903
     *
     * @return float
     */
    public function getA0903()
    {
        return $this->a0903;
    }

    /**
     * Set a0904
     *
     * @param float $a0904
     *
     * @return Kurftg01
     */
    public function setA0904($a0904)
    {
        $this->a0904 = $a0904;

        return $this;
    }

    /**
     * Get a0904
     *
     * @return float
     */
    public function getA0904()
    {
        return $this->a0904;
    }

    /**
     * Set a0905
     *
     * @param float $a0905
     *
     * @return Kurftg01
     */
    public function setA0905($a0905)
    {
        $this->a0905 = $a0905;

        return $this;
    }

    /**
     * Get a0905
     *
     * @return float
     */
    public function getA0905()
    {
        return $this->a0905;
    }

    /**
     * Set a0906
     *
     * @param float $a0906
     *
     * @return Kurftg01
     */
    public function setA0906($a0906)
    {
        $this->a0906 = $a0906;

        return $this;
    }

    /**
     * Get a0906
     *
     * @return float
     */
    public function getA0906()
    {
        return $this->a0906;
    }

    /**
     * Set a0907
     *
     * @param float $a0907
     *
     * @return Kurftg01
     */
    public function setA0907($a0907)
    {
        $this->a0907 = $a0907;

        return $this;
    }

    /**
     * Get a0907
     *
     * @return float
     */
    public function getA0907()
    {
        return $this->a0907;
    }

    /**
     * Set a0908
     *
     * @param float $a0908
     *
     * @return Kurftg01
     */
    public function setA0908($a0908)
    {
        $this->a0908 = $a0908;

        return $this;
    }

    /**
     * Get a0908
     *
     * @return float
     */
    public function getA0908()
    {
        return $this->a0908;
    }

    /**
     * Set a0909
     *
     * @param float $a0909
     *
     * @return Kurftg01
     */
    public function setA0909($a0909)
    {
        $this->a0909 = $a0909;

        return $this;
    }

    /**
     * Get a0909
     *
     * @return float
     */
    public function getA0909()
    {
        return $this->a0909;
    }

    /**
     * Set a09010
     *
     * @param float $a09010
     *
     * @return Kurftg01
     */
    public function setA09010($a09010)
    {
        $this->a09010 = $a09010;

        return $this;
    }

    /**
     * Get a09010
     *
     * @return float
     */
    public function getA09010()
    {
        return $this->a09010;
    }

    /**
     * Set a09011
     *
     * @param float $a09011
     *
     * @return Kurftg01
     */
    public function setA09011($a09011)
    {
        $this->a09011 = $a09011;

        return $this;
    }

    /**
     * Get a09011
     *
     * @return float
     */
    public function getA09011()
    {
        return $this->a09011;
    }

    /**
     * Set a01001
     *
     * @param float $a01001
     *
     * @return Kurftg01
     */
    public function setA01001($a01001)
    {
        $this->a01001 = $a01001;

        return $this;
    }

    /**
     * Get a01001
     *
     * @return float
     */
    public function getA01001()
    {
        return $this->a01001;
    }

    /**
     * Set a01002
     *
     * @param float $a01002
     *
     * @return Kurftg01
     */
    public function setA01002($a01002)
    {
        $this->a01002 = $a01002;

        return $this;
    }

    /**
     * Get a01002
     *
     * @return float
     */
    public function getA01002()
    {
        return $this->a01002;
    }

    /**
     * Set a01003
     *
     * @param float $a01003
     *
     * @return Kurftg01
     */
    public function setA01003($a01003)
    {
        $this->a01003 = $a01003;

        return $this;
    }

    /**
     * Get a01003
     *
     * @return float
     */
    public function getA01003()
    {
        return $this->a01003;
    }

    /**
     * Set a01004
     *
     * @param float $a01004
     *
     * @return Kurftg01
     */
    public function setA01004($a01004)
    {
        $this->a01004 = $a01004;

        return $this;
    }

    /**
     * Get a01004
     *
     * @return float
     */
    public function getA01004()
    {
        return $this->a01004;
    }

    /**
     * Set a01005
     *
     * @param float $a01005
     *
     * @return Kurftg01
     */
    public function setA01005($a01005)
    {
        $this->a01005 = $a01005;

        return $this;
    }

    /**
     * Get a01005
     *
     * @return float
     */
    public function getA01005()
    {
        return $this->a01005;
    }

    /**
     * Set a01006
     *
     * @param float $a01006
     *
     * @return Kurftg01
     */
    public function setA01006($a01006)
    {
        $this->a01006 = $a01006;

        return $this;
    }

    /**
     * Get a01006
     *
     * @return float
     */
    public function getA01006()
    {
        return $this->a01006;
    }

    /**
     * Set a01007
     *
     * @param float $a01007
     *
     * @return Kurftg01
     */
    public function setA01007($a01007)
    {
        $this->a01007 = $a01007;

        return $this;
    }

    /**
     * Get a01007
     *
     * @return float
     */
    public function getA01007()
    {
        return $this->a01007;
    }

    /**
     * Set a01008
     *
     * @param float $a01008
     *
     * @return Kurftg01
     */
    public function setA01008($a01008)
    {
        $this->a01008 = $a01008;

        return $this;
    }

    /**
     * Get a01008
     *
     * @return float
     */
    public function getA01008()
    {
        return $this->a01008;
    }

    /**
     * Set a01009
     *
     * @param float $a01009
     *
     * @return Kurftg01
     */
    public function setA01009($a01009)
    {
        $this->a01009 = $a01009;

        return $this;
    }

    /**
     * Get a01009
     *
     * @return float
     */
    public function getA01009()
    {
        return $this->a01009;
    }

    /**
     * Set a010010
     *
     * @param float $a010010
     *
     * @return Kurftg01
     */
    public function setA010010($a010010)
    {
        $this->a010010 = $a010010;

        return $this;
    }

    /**
     * Get a010010
     *
     * @return float
     */
    public function getA010010()
    {
        return $this->a010010;
    }

    /**
     * Set a010011
     *
     * @param float $a010011
     *
     * @return Kurftg01
     */
    public function setA010011($a010011)
    {
        $this->a010011 = $a010011;

        return $this;
    }

    /**
     * Get a010011
     *
     * @return float
     */
    public function getA010011()
    {
        return $this->a010011;
    }

    /**
     * Set a01101
     *
     * @param float $a01101
     *
     * @return Kurftg01
     */
    public function setA01101($a01101)
    {
        $this->a01101 = $a01101;

        return $this;
    }

    /**
     * Get a01101
     *
     * @return float
     */
    public function getA01101()
    {
        return $this->a01101;
    }

    /**
     * Set a01102
     *
     * @param float $a01102
     *
     * @return Kurftg01
     */
    public function setA01102($a01102)
    {
        $this->a01102 = $a01102;

        return $this;
    }

    /**
     * Get a01102
     *
     * @return float
     */
    public function getA01102()
    {
        return $this->a01102;
    }

    /**
     * Set a01103
     *
     * @param float $a01103
     *
     * @return Kurftg01
     */
    public function setA01103($a01103)
    {
        $this->a01103 = $a01103;

        return $this;
    }

    /**
     * Get a01103
     *
     * @return float
     */
    public function getA01103()
    {
        return $this->a01103;
    }

    /**
     * Set a01104
     *
     * @param float $a01104
     *
     * @return Kurftg01
     */
    public function setA01104($a01104)
    {
        $this->a01104 = $a01104;

        return $this;
    }

    /**
     * Get a01104
     *
     * @return float
     */
    public function getA01104()
    {
        return $this->a01104;
    }

    /**
     * Set a01105
     *
     * @param float $a01105
     *
     * @return Kurftg01
     */
    public function setA01105($a01105)
    {
        $this->a01105 = $a01105;

        return $this;
    }

    /**
     * Get a01105
     *
     * @return float
     */
    public function getA01105()
    {
        return $this->a01105;
    }

    /**
     * Set a01106
     *
     * @param float $a01106
     *
     * @return Kurftg01
     */
    public function setA01106($a01106)
    {
        $this->a01106 = $a01106;

        return $this;
    }

    /**
     * Get a01106
     *
     * @return float
     */
    public function getA01106()
    {
        return $this->a01106;
    }

    /**
     * Set a01107
     *
     * @param float $a01107
     *
     * @return Kurftg01
     */
    public function setA01107($a01107)
    {
        $this->a01107 = $a01107;

        return $this;
    }

    /**
     * Get a01107
     *
     * @return float
     */
    public function getA01107()
    {
        return $this->a01107;
    }

    /**
     * Set a01108
     *
     * @param float $a01108
     *
     * @return Kurftg01
     */
    public function setA01108($a01108)
    {
        $this->a01108 = $a01108;

        return $this;
    }

    /**
     * Get a01108
     *
     * @return float
     */
    public function getA01108()
    {
        return $this->a01108;
    }

    /**
     * Set a01109
     *
     * @param float $a01109
     *
     * @return Kurftg01
     */
    public function setA01109($a01109)
    {
        $this->a01109 = $a01109;

        return $this;
    }

    /**
     * Get a01109
     *
     * @return float
     */
    public function getA01109()
    {
        return $this->a01109;
    }

    /**
     * Set a011010
     *
     * @param float $a011010
     *
     * @return Kurftg01
     */
    public function setA011010($a011010)
    {
        $this->a011010 = $a011010;

        return $this;
    }

    /**
     * Get a011010
     *
     * @return float
     */
    public function getA011010()
    {
        return $this->a011010;
    }

    /**
     * Set a011011
     *
     * @param float $a011011
     *
     * @return Kurftg01
     */
    public function setA011011($a011011)
    {
        $this->a011011 = $a011011;

        return $this;
    }

    /**
     * Get a011011
     *
     * @return float
     */
    public function getA011011()
    {
        return $this->a011011;
    }
}

