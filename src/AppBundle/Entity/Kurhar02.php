<?php

namespace AppBundle\Entity;

/**
 * Kurhar02
 */
class Kurhar02
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $iptal = 'H';

    /**
     * @var integer
     */
    private $f2Fake = '0';

    /**
     * @var \DateTime
     */
    private $islemTarihi;

    /**
     * @var \DateTime
     */
    private $kayitTarihi;

    /**
     * @var string
     */
    private $masadaBeklemeSuresi;

    /**
     * @var \DateTime
     */
    private $isAlimSaati;

    /**
     * @var string
     */
    private $takas = 'H';

    /**
     * @var string
     */
    private $takasBilgisi;

    /**
     * @var \DateTime
     */
    private $okumaSaati;

    /**
     * @var \DateTime
     */
    private $alimSaati;

    /**
     * @var \DateTime
     */
    private $teslimSaati;

    /**
     * @var \DateTime
     */
    private $baslangicBeklemeSaati;

    /**
     * @var \DateTime
     */
    private $bitisBeklemeSaati;

    /**
     * @var \DateTime
     */
    private $istenenAlimSaati;

    /**
     * @var \DateTime
     */
    private $istenenTeslimSaati;

    /**
     * @var integer
     */
    private $odeme;

    /**
     * @var integer
     */
    private $toplamFiyat;

    /**
     * @var integer
     */
    private $tutar;

    /**
     * @var integer
     */
    private $beklemeTutari;

    /**
     * @var integer
     */
    private $gonderiAgirligi;

    /**
     * @var integer
     */
    private $agirlikTutari;

    /**
     * @var string
     */
    private $teslimAlan;

    /**
     * @var string
     */
    private $teslimEdilenFirma;

    /**
     * @var \DateTime
     */
    private $takasZamani;

    /**
     * @var string
     */
    private $beklemeKontrol = 'H';

    /**
     * @var string
     */
    private $mailKontrol = 'H';

    /**
     * @var integer
     */
    private $kgfno;

    /**
     * @var integer
     */
    private $beklemeSuresi;

    /**
     * @var string
     */
    private $odemeAlindi = 'H';

    /**
     * @var string
     */
    private $webUsername;

    /**
     * @var integer
     */
    private $siralama;

    /**
     * @var integer
     */
    private $eksure;

    /**
     * @var \DateTime
     */
    private $evrakHazirSaati;

    /**
     * @var integer
     */
    private $kuryeGordumu = '0';

    /**
     * @var string
     */
    private $kaydiAlan;

    /**
     * @var integer
     */
    private $isCustomer = '0';

    /**
     * @var integer
     */
    private $musteriIptalmi = '0';

    /**
     * @var \AppBundle\Entity\Kurye01
     */
    private $alinanKuryeNo;

    /**
     * @var \AppBundle\Entity\F1
     */
    private $f1;

    /**
     * @var \AppBundle\Entity\F2
     */
    private $f2;

    /**
     * @var \AppBundle\Entity\F3
     */
    private $f3;

    /**
     * @var \AppBundle\Entity\Kurgtp01
     */
    private $gidisTipiAdi;

    /**
     * @var \AppBundle\Entity\Kurtip01
     */
    private $islemTipi;

    /**
     * @var \AppBundle\Entity\Kurye01
     */
    private $kuryeNo;

    /**
     * @var \AppBundle\Entity\Kurye01
     */
    private $takasRefnoKurye;

    /**
     * @var \AppBundle\Entity\Kurye01
     */
    private $verilenKuryeNo;


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
     * Set iptal
     *
     * @param string $iptal
     *
     * @return Kurhar02
     */
    public function setIptal($iptal)
    {
        $this->iptal = $iptal;

        return $this;
    }

    /**
     * Get iptal
     *
     * @return string
     */
    public function getIptal()
    {
        return $this->iptal;
    }

    /**
     * Set f2Fake
     *
     * @param integer $f2Fake
     *
     * @return Kurhar02
     */
    public function setF2Fake($f2Fake)
    {
        $this->f2Fake = $f2Fake;

        return $this;
    }

    /**
     * Get f2Fake
     *
     * @return integer
     */
    public function getF2Fake()
    {
        return $this->f2Fake;
    }

    /**
     * Set islemTarihi
     *
     * @param \DateTime $islemTarihi
     *
     * @return Kurhar02
     */
    public function setIslemTarihi($islemTarihi)
    {
        $this->islemTarihi = $islemTarihi;

        return $this;
    }

    /**
     * Get islemTarihi
     *
     * @return \DateTime
     */
    public function getIslemTarihi()
    {
        return $this->islemTarihi;
    }

    /**
     * Set kayitTarihi
     *
     * @param \DateTime $kayitTarihi
     *
     * @return Kurhar02
     */
    public function setKayitTarihi($kayitTarihi)
    {
        $this->kayitTarihi = $kayitTarihi;

        return $this;
    }

    /**
     * Get kayitTarihi
     *
     * @return \DateTime
     */
    public function getKayitTarihi()
    {
        return $this->kayitTarihi;
    }

    /**
     * Set masadaBeklemeSuresi
     *
     * @param string $masadaBeklemeSuresi
     *
     * @return Kurhar02
     */
    public function setMasadaBeklemeSuresi($masadaBeklemeSuresi)
    {
        $this->masadaBeklemeSuresi = $masadaBeklemeSuresi;

        return $this;
    }

    /**
     * Get masadaBeklemeSuresi
     *
     * @return string
     */
    public function getMasadaBeklemeSuresi()
    {
        return $this->masadaBeklemeSuresi;
    }

    /**
     * Set isAlimSaati
     *
     * @param \DateTime $isAlimSaati
     *
     * @return Kurhar02
     */
    public function setIsAlimSaati($isAlimSaati)
    {
        $this->isAlimSaati = $isAlimSaati;

        return $this;
    }

    /**
     * Get isAlimSaati
     *
     * @return \DateTime
     */
    public function getIsAlimSaati()
    {
        return $this->isAlimSaati;
    }

    /**
     * Set takas
     *
     * @param string $takas
     *
     * @return Kurhar02
     */
    public function setTakas($takas)
    {
        $this->takas = $takas;

        return $this;
    }

    /**
     * Get takas
     *
     * @return string
     */
    public function getTakas()
    {
        return $this->takas;
    }

    /**
     * Set takasBilgisi
     *
     * @param string $takasBilgisi
     *
     * @return Kurhar02
     */
    public function setTakasBilgisi($takasBilgisi)
    {
        $this->takasBilgisi = $takasBilgisi;

        return $this;
    }

    /**
     * Get takasBilgisi
     *
     * @return string
     */
    public function getTakasBilgisi()
    {
        return $this->takasBilgisi;
    }

    /**
     * Set okumaSaati
     *
     * @param \DateTime $okumaSaati
     *
     * @return Kurhar02
     */
    public function setOkumaSaati($okumaSaati)
    {
        $this->okumaSaati = $okumaSaati;

        return $this;
    }

    /**
     * Get okumaSaati
     *
     * @return \DateTime
     */
    public function getOkumaSaati()
    {
        return $this->okumaSaati;
    }

    /**
     * Set alimSaati
     *
     * @param \DateTime $alimSaati
     *
     * @return Kurhar02
     */
    public function setAlimSaati($alimSaati)
    {
        $this->alimSaati = $alimSaati;

        return $this;
    }

    /**
     * Get alimSaati
     *
     * @return \DateTime
     */
    public function getAlimSaati()
    {
        return $this->alimSaati;
    }

    /**
     * Set teslimSaati
     *
     * @param \DateTime $teslimSaati
     *
     * @return Kurhar02
     */
    public function setTeslimSaati($teslimSaati)
    {
        $this->teslimSaati = $teslimSaati;

        return $this;
    }

    /**
     * Get teslimSaati
     *
     * @return \DateTime
     */
    public function getTeslimSaati()
    {
        return $this->teslimSaati;
    }

    /**
     * Set baslangicBeklemeSaati
     *
     * @param \DateTime $baslangicBeklemeSaati
     *
     * @return Kurhar02
     */
    public function setBaslangicBeklemeSaati($baslangicBeklemeSaati)
    {
        $this->baslangicBeklemeSaati = $baslangicBeklemeSaati;

        return $this;
    }

    /**
     * Get baslangicBeklemeSaati
     *
     * @return \DateTime
     */
    public function getBaslangicBeklemeSaati()
    {
        return $this->baslangicBeklemeSaati;
    }

    /**
     * Set bitisBeklemeSaati
     *
     * @param \DateTime $bitisBeklemeSaati
     *
     * @return Kurhar02
     */
    public function setBitisBeklemeSaati($bitisBeklemeSaati)
    {
        $this->bitisBeklemeSaati = $bitisBeklemeSaati;

        return $this;
    }

    /**
     * Get bitisBeklemeSaati
     *
     * @return \DateTime
     */
    public function getBitisBeklemeSaati()
    {
        return $this->bitisBeklemeSaati;
    }

    /**
     * Set istenenAlimSaati
     *
     * @param \DateTime $istenenAlimSaati
     *
     * @return Kurhar02
     */
    public function setIstenenAlimSaati($istenenAlimSaati)
    {
        $this->istenenAlimSaati = $istenenAlimSaati;

        return $this;
    }

    /**
     * Get istenenAlimSaati
     *
     * @return \DateTime
     */
    public function getIstenenAlimSaati()
    {
        return $this->istenenAlimSaati;
    }

    /**
     * Set istenenTeslimSaati
     *
     * @param \DateTime $istenenTeslimSaati
     *
     * @return Kurhar02
     */
    public function setIstenenTeslimSaati($istenenTeslimSaati)
    {
        $this->istenenTeslimSaati = $istenenTeslimSaati;

        return $this;
    }

    /**
     * Get istenenTeslimSaati
     *
     * @return \DateTime
     */
    public function getIstenenTeslimSaati()
    {
        return $this->istenenTeslimSaati;
    }

    /**
     * Set odeme
     *
     * @param integer $odeme
     *
     * @return Kurhar02
     */
    public function setOdeme($odeme)
    {
        $this->odeme = $odeme;

        return $this;
    }

    /**
     * Get odeme
     *
     * @return integer
     */
    public function getOdeme()
    {
        return $this->odeme;
    }

    /**
     * Set toplamFiyat
     *
     * @param integer $toplamFiyat
     *
     * @return Kurhar02
     */
    public function setToplamFiyat($toplamFiyat)
    {
        $this->toplamFiyat = $toplamFiyat;

        return $this;
    }

    /**
     * Get toplamFiyat
     *
     * @return integer
     */
    public function getToplamFiyat()
    {
        return $this->toplamFiyat;
    }

    /**
     * Set tutar
     *
     * @param integer $tutar
     *
     * @return Kurhar02
     */
    public function setTutar($tutar)
    {
        $this->tutar = $tutar;

        return $this;
    }

    /**
     * Get tutar
     *
     * @return integer
     */
    public function getTutar()
    {
        return $this->tutar;
    }

    /**
     * Set beklemeTutari
     *
     * @param integer $beklemeTutari
     *
     * @return Kurhar02
     */
    public function setBeklemeTutari($beklemeTutari)
    {
        $this->beklemeTutari = $beklemeTutari;

        return $this;
    }

    /**
     * Get beklemeTutari
     *
     * @return integer
     */
    public function getBeklemeTutari()
    {
        return $this->beklemeTutari;
    }

    /**
     * Set gonderiAgirligi
     *
     * @param integer $gonderiAgirligi
     *
     * @return Kurhar02
     */
    public function setGonderiAgirligi($gonderiAgirligi)
    {
        $this->gonderiAgirligi = $gonderiAgirligi;

        return $this;
    }

    /**
     * Get gonderiAgirligi
     *
     * @return integer
     */
    public function getGonderiAgirligi()
    {
        return $this->gonderiAgirligi;
    }

    /**
     * Set agirlikTutari
     *
     * @param integer $agirlikTutari
     *
     * @return Kurhar02
     */
    public function setAgirlikTutari($agirlikTutari)
    {
        $this->agirlikTutari = $agirlikTutari;

        return $this;
    }

    /**
     * Get agirlikTutari
     *
     * @return integer
     */
    public function getAgirlikTutari()
    {
        return $this->agirlikTutari;
    }

    /**
     * Set teslimAlan
     *
     * @param string $teslimAlan
     *
     * @return Kurhar02
     */
    public function setTeslimAlan($teslimAlan)
    {
        $this->teslimAlan = $teslimAlan;

        return $this;
    }

    /**
     * Get teslimAlan
     *
     * @return string
     */
    public function getTeslimAlan()
    {
        return $this->teslimAlan;
    }

    /**
     * Set teslimEdilenFirma
     *
     * @param string $teslimEdilenFirma
     *
     * @return Kurhar02
     */
    public function setTeslimEdilenFirma($teslimEdilenFirma)
    {
        $this->teslimEdilenFirma = $teslimEdilenFirma;

        return $this;
    }

    /**
     * Get teslimEdilenFirma
     *
     * @return string
     */
    public function getTeslimEdilenFirma()
    {
        return $this->teslimEdilenFirma;
    }

    /**
     * Set takasZamani
     *
     * @param \DateTime $takasZamani
     *
     * @return Kurhar02
     */
    public function setTakasZamani($takasZamani)
    {
        $this->takasZamani = $takasZamani;

        return $this;
    }

    /**
     * Get takasZamani
     *
     * @return \DateTime
     */
    public function getTakasZamani()
    {
        return $this->takasZamani;
    }

    /**
     * Set beklemeKontrol
     *
     * @param string $beklemeKontrol
     *
     * @return Kurhar02
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
     * Set mailKontrol
     *
     * @param string $mailKontrol
     *
     * @return Kurhar02
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
     * Set kgfno
     *
     * @param integer $kgfno
     *
     * @return Kurhar02
     */
    public function setKgfno($kgfno)
    {
        $this->kgfno = $kgfno;

        return $this;
    }

    /**
     * Get kgfno
     *
     * @return integer
     */
    public function getKgfno()
    {
        return $this->kgfno;
    }

    /**
     * Set beklemeSuresi
     *
     * @param integer $beklemeSuresi
     *
     * @return Kurhar02
     */
    public function setBeklemeSuresi($beklemeSuresi)
    {
        $this->beklemeSuresi = $beklemeSuresi;

        return $this;
    }

    /**
     * Get beklemeSuresi
     *
     * @return integer
     */
    public function getBeklemeSuresi()
    {
        return $this->beklemeSuresi;
    }

    /**
     * Set odemeAlindi
     *
     * @param string $odemeAlindi
     *
     * @return Kurhar02
     */
    public function setOdemeAlindi($odemeAlindi)
    {
        $this->odemeAlindi = $odemeAlindi;

        return $this;
    }

    /**
     * Get odemeAlindi
     *
     * @return string
     */
    public function getOdemeAlindi()
    {
        return $this->odemeAlindi;
    }

    /**
     * Set webUsername
     *
     * @param string $webUsername
     *
     * @return Kurhar02
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
     * Set siralama
     *
     * @param integer $siralama
     *
     * @return Kurhar02
     */
    public function setSiralama($siralama)
    {
        $this->siralama = $siralama;

        return $this;
    }

    /**
     * Get siralama
     *
     * @return integer
     */
    public function getSiralama()
    {
        return $this->siralama;
    }

    /**
     * Set eksure
     *
     * @param integer $eksure
     *
     * @return Kurhar02
     */
    public function setEksure($eksure)
    {
        $this->eksure = $eksure;

        return $this;
    }

    /**
     * Get eksure
     *
     * @return integer
     */
    public function getEksure()
    {
        return $this->eksure;
    }

    /**
     * Set evrakHazirSaati
     *
     * @param \DateTime $evrakHazirSaati
     *
     * @return Kurhar02
     */
    public function setEvrakHazirSaati($evrakHazirSaati)
    {
        $this->evrakHazirSaati = $evrakHazirSaati;

        return $this;
    }

    /**
     * Get evrakHazirSaati
     *
     * @return \DateTime
     */
    public function getEvrakHazirSaati()
    {
        return $this->evrakHazirSaati;
    }

    /**
     * Set kuryeGordumu
     *
     * @param integer $kuryeGordumu
     *
     * @return Kurhar02
     */
    public function setKuryeGordumu($kuryeGordumu)
    {
        $this->kuryeGordumu = $kuryeGordumu;

        return $this;
    }

    /**
     * Get kuryeGordumu
     *
     * @return integer
     */
    public function getKuryeGordumu()
    {
        return $this->kuryeGordumu;
    }

    /**
     * Set kaydiAlan
     *
     * @param string $kaydiAlan
     *
     * @return Kurhar02
     */
    public function setKaydiAlan($kaydiAlan)
    {
        $this->kaydiAlan = $kaydiAlan;

        return $this;
    }

    /**
     * Get kaydiAlan
     *
     * @return string
     */
    public function getKaydiAlan()
    {
        return $this->kaydiAlan;
    }

    /**
     * Set isCustomer
     *
     * @param integer $isCustomer
     *
     * @return Kurhar02
     */
    public function setIsCustomer($isCustomer)
    {
        $this->isCustomer = $isCustomer;

        return $this;
    }

    /**
     * Get isCustomer
     *
     * @return integer
     */
    public function getIsCustomer()
    {
        return $this->isCustomer;
    }

    /**
     * Set musteriIptalmi
     *
     * @param integer $musteriIptalmi
     *
     * @return Kurhar02
     */
    public function setMusteriIptalmi($musteriIptalmi)
    {
        $this->musteriIptalmi = $musteriIptalmi;

        return $this;
    }

    /**
     * Get musteriIptalmi
     *
     * @return integer
     */
    public function getMusteriIptalmi()
    {
        return $this->musteriIptalmi;
    }

    /**
     * Set alinanKuryeNo
     *
     * @param \AppBundle\Entity\Kurye01 $alinanKuryeNo
     *
     * @return Kurhar02
     */
    public function setAlinanKuryeNo(\AppBundle\Entity\Kurye01 $alinanKuryeNo = null)
    {
        $this->alinanKuryeNo = $alinanKuryeNo;

        return $this;
    }

    /**
     * Get alinanKuryeNo
     *
     * @return \AppBundle\Entity\Kurye01
     */
    public function getAlinanKuryeNo()
    {
        return $this->alinanKuryeNo;
    }

    /**
     * Set f1
     *
     * @param \AppBundle\Entity\F1 $f1
     *
     * @return Kurhar02
     */
    public function setF1(\AppBundle\Entity\F1 $f1 = null)
    {
        $this->f1 = $f1;

        return $this;
    }

    /**
     * Get f1
     *
     * @return \AppBundle\Entity\F1
     */
    public function getF1()
    {
        return $this->f1;
    }

    /**
     * Set f2
     *
     * @param \AppBundle\Entity\F2 $f2
     *
     * @return Kurhar02
     */
    public function setF2(\AppBundle\Entity\F2 $f2 = null)
    {
        $this->f2 = $f2;

        return $this;
    }

    /**
     * Get f2
     *
     * @return \AppBundle\Entity\F2
     */
    public function getF2()
    {
        return $this->f2;
    }

    /**
     * Set f3
     *
     * @param \AppBundle\Entity\F3 $f3
     *
     * @return Kurhar02
     */
    public function setF3(\AppBundle\Entity\F3 $f3 = null)
    {
        $this->f3 = $f3;

        return $this;
    }

    /**
     * Get f3
     *
     * @return \AppBundle\Entity\F3
     */
    public function getF3()
    {
        return $this->f3;
    }

    /**
     * Set gidisTipiAdi
     *
     * @param \AppBundle\Entity\Kurgtp01 $gidisTipiAdi
     *
     * @return Kurhar02
     */
    public function setGidisTipiAdi(\AppBundle\Entity\Kurgtp01 $gidisTipiAdi = null)
    {
        $this->gidisTipiAdi = $gidisTipiAdi;

        return $this;
    }

    /**
     * Get gidisTipiAdi
     *
     * @return \AppBundle\Entity\Kurgtp01
     */
    public function getGidisTipiAdi()
    {
        return $this->gidisTipiAdi;
    }

    /**
     * Set islemTipi
     *
     * @param \AppBundle\Entity\Kurtip01 $islemTipi
     *
     * @return Kurhar02
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
     * Set kuryeNo
     *
     * @param \AppBundle\Entity\Kurye01 $kuryeNo
     *
     * @return Kurhar02
     */
    public function setKuryeNo(\AppBundle\Entity\Kurye01 $kuryeNo = null)
    {
        $this->kuryeNo = $kuryeNo;

        return $this;
    }

    /**
     * Get kuryeNo
     *
     * @return \AppBundle\Entity\Kurye01
     */
    public function getKuryeNo()
    {
        return $this->kuryeNo;
    }

    /**
     * Set takasRefnoKurye
     *
     * @param \AppBundle\Entity\Kurye01 $takasRefnoKurye
     *
     * @return Kurhar02
     */
    public function setTakasRefnoKurye(\AppBundle\Entity\Kurye01 $takasRefnoKurye = null)
    {
        $this->takasRefnoKurye = $takasRefnoKurye;

        return $this;
    }

    /**
     * Get takasRefnoKurye
     *
     * @return \AppBundle\Entity\Kurye01
     */
    public function getTakasRefnoKurye()
    {
        return $this->takasRefnoKurye;
    }

    /**
     * Set verilenKuryeNo
     *
     * @param \AppBundle\Entity\Kurye01 $verilenKuryeNo
     *
     * @return Kurhar02
     */
    public function setVerilenKuryeNo(\AppBundle\Entity\Kurye01 $verilenKuryeNo = null)
    {
        $this->verilenKuryeNo = $verilenKuryeNo;

        return $this;
    }

    /**
     * Get verilenKuryeNo
     *
     * @return \AppBundle\Entity\Kurye01
     */
    public function getVerilenKuryeNo()
    {
        return $this->verilenKuryeNo;
    }
}

