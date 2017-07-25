<?php

namespace AppBundle\Entity;

/**
 * Log
 */
class Log
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $tableid;

    /**
     * @var integer
     */
    private $adminid;

    /**
     * @var string
     */
    private $tablename;

    /**
     * @var string
     */
    private $loglevel;

    /**
     * @var string
     */
    private $logmessage;

    /**
     * @var \DateTime
     */
    private $cdate;

    /**
     * @var string
     */
    private $availablelevel;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Log
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set tableid
     *
     * @param integer $tableid
     *
     * @return Log
     */
    public function setTableid($tableid)
    {
        $this->tableid = $tableid;

        return $this;
    }

    /**
     * Get tableid
     *
     * @return integer
     */
    public function getTableid()
    {
        return $this->tableid;
    }

    /**
     * Set adminid
     *
     * @param integer $adminid
     *
     * @return Log
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return integer
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set tablename
     *
     * @param string $tablename
     *
     * @return Log
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set loglevel
     *
     * @param string $loglevel
     *
     * @return Log
     */
    public function setLoglevel($loglevel)
    {
        $this->loglevel = $loglevel;

        return $this;
    }

    /**
     * Get loglevel
     *
     * @return string
     */
    public function getLoglevel()
    {
        return $this->loglevel;
    }

    /**
     * Set logmessage
     *
     * @param string $logmessage
     *
     * @return Log
     */
    public function setLogmessage($logmessage)
    {
        $this->logmessage = $logmessage;

        return $this;
    }

    /**
     * Get logmessage
     *
     * @return string
     */
    public function getLogmessage()
    {
        return $this->logmessage;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     *
     * @return Log
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;

        return $this;
    }

    /**
     * Get cdate
     *
     * @return \DateTime
     */
    public function getCdate()
    {
        return $this->cdate;
    }

    /**
     * Set availablelevel
     *
     * @param string $availablelevel
     *
     * @return Log
     */
    public function setAvailablelevel($availablelevel)
    {
        $this->availablelevel = $availablelevel;

        return $this;
    }

    /**
     * Get availablelevel
     *
     * @return string
     */
    public function getAvailablelevel()
    {
        return $this->availablelevel;
    }
}

