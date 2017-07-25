<?php

namespace AppBundle\Entity;

/**
 * KuryeYoklamaDokumu
 */
class KuryeYoklamaDokumu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $totalearn;

    /**
     * @var float
     */
    private $learn;

    /**
     * @var float
     */
    private $givenearn;

    /**
     * @var integer
     */
    private $examination;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \AppBundle\Entity\Kurye01
     */
    private $kuryeid;


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
     * Set totalearn
     *
     * @param float $totalearn
     *
     * @return KuryeYoklamaDokumu
     */
    public function setTotalearn($totalearn)
    {
        $this->totalearn = $totalearn;

        return $this;
    }

    /**
     * Get totalearn
     *
     * @return float
     */
    public function getTotalearn()
    {
        return $this->totalearn;
    }

    /**
     * Set learn
     *
     * @param float $learn
     *
     * @return KuryeYoklamaDokumu
     */
    public function setLearn($learn)
    {
        $this->learn = $learn;

        return $this;
    }

    /**
     * Get learn
     *
     * @return float
     */
    public function getLearn()
    {
        return $this->learn;
    }

    /**
     * Set givenearn
     *
     * @param float $givenearn
     *
     * @return KuryeYoklamaDokumu
     */
    public function setGivenearn($givenearn)
    {
        $this->givenearn = $givenearn;

        return $this;
    }

    /**
     * Get givenearn
     *
     * @return float
     */
    public function getGivenearn()
    {
        return $this->givenearn;
    }

    /**
     * Set examination
     *
     * @param integer $examination
     *
     * @return KuryeYoklamaDokumu
     */
    public function setExamination($examination)
    {
        $this->examination = $examination;

        return $this;
    }

    /**
     * Get examination
     *
     * @return integer
     */
    public function getExamination()
    {
        return $this->examination;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return KuryeYoklamaDokumu
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set kuryeid
     *
     * @param \AppBundle\Entity\Kurye01 $kuryeid
     *
     * @return KuryeYoklamaDokumu
     */
    public function setKuryeid(\AppBundle\Entity\Kurye01 $kuryeid = null)
    {
        $this->kuryeid = $kuryeid;

        return $this;
    }

    /**
     * Get kuryeid
     *
     * @return \AppBundle\Entity\Kurye01
     */
    public function getKuryeid()
    {
        return $this->kuryeid;
    }
}

