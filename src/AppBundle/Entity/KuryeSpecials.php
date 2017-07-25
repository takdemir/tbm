<?php

namespace AppBundle\Entity;

/**
 * KuryeSpecials
 */
class KuryeSpecials
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $yoklamaStartDate;

    /**
     * @var \DateTime
     */
    private $yoklamaFinishDate;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return KuryeSpecials
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
     * Set yoklamaStartDate
     *
     * @param \DateTime $yoklamaStartDate
     *
     * @return KuryeSpecials
     */
    public function setYoklamaStartDate($yoklamaStartDate)
    {
        $this->yoklamaStartDate = $yoklamaStartDate;

        return $this;
    }

    /**
     * Get yoklamaStartDate
     *
     * @return \DateTime
     */
    public function getYoklamaStartDate()
    {
        return $this->yoklamaStartDate;
    }

    /**
     * Set yoklamaFinishDate
     *
     * @param \DateTime $yoklamaFinishDate
     *
     * @return KuryeSpecials
     */
    public function setYoklamaFinishDate($yoklamaFinishDate)
    {
        $this->yoklamaFinishDate = $yoklamaFinishDate;

        return $this;
    }

    /**
     * Get yoklamaFinishDate
     *
     * @return \DateTime
     */
    public function getYoklamaFinishDate()
    {
        return $this->yoklamaFinishDate;
    }

    /**
     * Set kuryeid
     *
     * @param \AppBundle\Entity\Kurye01 $kuryeid
     *
     * @return KuryeSpecials
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

