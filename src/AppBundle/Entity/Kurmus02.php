<?php

namespace AppBundle\Entity;

/**
 * Kurmus02
 */
class Kurmus02
{
    /**
     * @var integer
     */
    private $refno;

    /**
     * @var string
     */
    private $yetkili;

    /**
     * @var string
     */
    private $departman;

    /**
     * @var string
     */
    private $gorev;

    /**
     * @var \DateTime
     */
    private $dogumTarihi;

    /**
     * @var string
     */
    private $dahili;

    /**
     * @var string
     */
    private $gsm;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $autoemail = 'H';

    /**
     * @var \AppBundle\Entity\Kurmus01
     */
    private $refnomusteri;


    /**
     * Get refno
     *
     * @return integer
     */
    public function getRefno()
    {
        return $this->refno;
    }

    /**
     * Set yetkili
     *
     * @param string $yetkili
     *
     * @return Kurmus02
     */
    public function setYetkili($yetkili)
    {
        $this->yetkili = $yetkili;

        return $this;
    }

    /**
     * Get yetkili
     *
     * @return string
     */
    public function getYetkili()
    {
        return $this->yetkili;
    }

    /**
     * Set departman
     *
     * @param string $departman
     *
     * @return Kurmus02
     */
    public function setDepartman($departman)
    {
        $this->departman = $departman;

        return $this;
    }

    /**
     * Get departman
     *
     * @return string
     */
    public function getDepartman()
    {
        return $this->departman;
    }

    /**
     * Set gorev
     *
     * @param string $gorev
     *
     * @return Kurmus02
     */
    public function setGorev($gorev)
    {
        $this->gorev = $gorev;

        return $this;
    }

    /**
     * Get gorev
     *
     * @return string
     */
    public function getGorev()
    {
        return $this->gorev;
    }

    /**
     * Set dogumTarihi
     *
     * @param \DateTime $dogumTarihi
     *
     * @return Kurmus02
     */
    public function setDogumTarihi($dogumTarihi)
    {
        $this->dogumTarihi = $dogumTarihi;

        return $this;
    }

    /**
     * Get dogumTarihi
     *
     * @return \DateTime
     */
    public function getDogumTarihi()
    {
        return $this->dogumTarihi;
    }

    /**
     * Set dahili
     *
     * @param string $dahili
     *
     * @return Kurmus02
     */
    public function setDahili($dahili)
    {
        $this->dahili = $dahili;

        return $this;
    }

    /**
     * Get dahili
     *
     * @return string
     */
    public function getDahili()
    {
        return $this->dahili;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Kurmus02
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
     * Set email
     *
     * @param string $email
     *
     * @return Kurmus02
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set autoemail
     *
     * @param string $autoemail
     *
     * @return Kurmus02
     */
    public function setAutoemail($autoemail)
    {
        $this->autoemail = $autoemail;

        return $this;
    }

    /**
     * Get autoemail
     *
     * @return string
     */
    public function getAutoemail()
    {
        return $this->autoemail;
    }

    /**
     * Set refnomusteri
     *
     * @param \AppBundle\Entity\Kurmus01 $refnomusteri
     *
     * @return Kurmus02
     */
    public function setRefnomusteri(\AppBundle\Entity\Kurmus01 $refnomusteri = null)
    {
        $this->refnomusteri = $refnomusteri;

        return $this;
    }

    /**
     * Get refnomusteri
     *
     * @return \AppBundle\Entity\Kurmus01
     */
    public function getRefnomusteri()
    {
        return $this->refnomusteri;
    }
}

