<?php

namespace AppBundle\Entity;

/**
 * Kurmus03
 */
class Kurmus03
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kim;

    /**
     * @var integer
     */
    private $kimle;


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
     * Set kim
     *
     * @param integer $kim
     *
     * @return Kurmus03
     */
    public function setKim($kim)
    {
        $this->kim = $kim;

        return $this;
    }

    /**
     * Get kim
     *
     * @return integer
     */
    public function getKim()
    {
        return $this->kim;
    }

    /**
     * Set kimle
     *
     * @param integer $kimle
     *
     * @return Kurmus03
     */
    public function setKimle($kimle)
    {
        $this->kimle = $kimle;

        return $this;
    }

    /**
     * Get kimle
     *
     * @return integer
     */
    public function getKimle()
    {
        return $this->kimle;
    }
}

