<?php

namespace AppBundle\Entity;

/**
 * Gecetarife
 */
class Gecetarife
{
    /**
     * @var integer
     */
    private $geceid;

    /**
     * @var string
     */
    private $gecebir = '1';

    /**
     * @var string
     */
    private $geceiki = '2';

    /**
     * @var string
     */
    private $geceuc = '3';

    /**
     * @var string
     */
    private $gecedort = '4';

    /**
     * @var string
     */
    private $gecebes = '5';


    /**
     * Get geceid
     *
     * @return integer
     */
    public function getGeceid()
    {
        return $this->geceid;
    }

    /**
     * Set gecebir
     *
     * @param string $gecebir
     *
     * @return Gecetarife
     */
    public function setGecebir($gecebir)
    {
        $this->gecebir = $gecebir;

        return $this;
    }

    /**
     * Get gecebir
     *
     * @return string
     */
    public function getGecebir()
    {
        return $this->gecebir;
    }

    /**
     * Set geceiki
     *
     * @param string $geceiki
     *
     * @return Gecetarife
     */
    public function setGeceiki($geceiki)
    {
        $this->geceiki = $geceiki;

        return $this;
    }

    /**
     * Get geceiki
     *
     * @return string
     */
    public function getGeceiki()
    {
        return $this->geceiki;
    }

    /**
     * Set geceuc
     *
     * @param string $geceuc
     *
     * @return Gecetarife
     */
    public function setGeceuc($geceuc)
    {
        $this->geceuc = $geceuc;

        return $this;
    }

    /**
     * Get geceuc
     *
     * @return string
     */
    public function getGeceuc()
    {
        return $this->geceuc;
    }

    /**
     * Set gecedort
     *
     * @param string $gecedort
     *
     * @return Gecetarife
     */
    public function setGecedort($gecedort)
    {
        $this->gecedort = $gecedort;

        return $this;
    }

    /**
     * Get gecedort
     *
     * @return string
     */
    public function getGecedort()
    {
        return $this->gecedort;
    }

    /**
     * Set gecebes
     *
     * @param string $gecebes
     *
     * @return Gecetarife
     */
    public function setGecebes($gecebes)
    {
        $this->gecebes = $gecebes;

        return $this;
    }

    /**
     * Get gecebes
     *
     * @return string
     */
    public function getGecebes()
    {
        return $this->gecebes;
    }
}

