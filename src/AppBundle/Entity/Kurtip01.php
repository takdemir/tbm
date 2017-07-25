<?php

namespace AppBundle\Entity;

/**
 * Kurtip01
 */
class Kurtip01
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $islemtipi;

    /**
     * @var string
     */
    private $islemtanimi;


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
     * Set islemtipi
     *
     * @param string $islemtipi
     *
     * @return Kurtip01
     */
    public function setIslemtipi($islemtipi)
    {
        $this->islemtipi = $islemtipi;

        return $this;
    }

    /**
     * Get islemtipi
     *
     * @return string
     */
    public function getIslemtipi()
    {
        return $this->islemtipi;
    }

    /**
     * Set islemtanimi
     *
     * @param string $islemtanimi
     *
     * @return Kurtip01
     */
    public function setIslemtanimi($islemtanimi)
    {
        $this->islemtanimi = $islemtanimi;

        return $this;
    }

    /**
     * Get islemtanimi
     *
     * @return string
     */
    public function getIslemtanimi()
    {
        return $this->islemtanimi;
    }
}

