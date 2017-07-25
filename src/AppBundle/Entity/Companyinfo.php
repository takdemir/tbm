<?php

namespace AppBundle\Entity;

/**
 * Companyinfo
 */
class Companyinfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $companyTel;

    /**
     * @var string
     */
    private $companyEmail;

    /**
     * @var string
     */
    private $companyAdres;

    /**
     * @var integer
     */
    private $smsModul;

    /**
     * @var string
     */
    private $smsUsername;

    /**
     * @var string
     */
    private $smsPassword;

    /**
     * @var string
     */
    private $smsSirketadi;

    /**
     * @var string
     */
    private $emailUsername;

    /**
     * @var string
     */
    private $emailPassword;

    /**
     * @var string
     */
    private $statikip;

    /**
     * @var integer
     */
    private $section;

    /**
     * @var integer
     */
    private $smsForCustomer = '0';

    /**
     * @var integer
     */
    private $systemactive = '1';


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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Companyinfo
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyTel
     *
     * @param string $companyTel
     *
     * @return Companyinfo
     */
    public function setCompanyTel($companyTel)
    {
        $this->companyTel = $companyTel;

        return $this;
    }

    /**
     * Get companyTel
     *
     * @return string
     */
    public function getCompanyTel()
    {
        return $this->companyTel;
    }

    /**
     * Set companyEmail
     *
     * @param string $companyEmail
     *
     * @return Companyinfo
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * Get companyEmail
     *
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }

    /**
     * Set companyAdres
     *
     * @param string $companyAdres
     *
     * @return Companyinfo
     */
    public function setCompanyAdres($companyAdres)
    {
        $this->companyAdres = $companyAdres;

        return $this;
    }

    /**
     * Get companyAdres
     *
     * @return string
     */
    public function getCompanyAdres()
    {
        return $this->companyAdres;
    }

    /**
     * Set smsModul
     *
     * @param integer $smsModul
     *
     * @return Companyinfo
     */
    public function setSmsModul($smsModul)
    {
        $this->smsModul = $smsModul;

        return $this;
    }

    /**
     * Get smsModul
     *
     * @return integer
     */
    public function getSmsModul()
    {
        return $this->smsModul;
    }

    /**
     * Set smsUsername
     *
     * @param string $smsUsername
     *
     * @return Companyinfo
     */
    public function setSmsUsername($smsUsername)
    {
        $this->smsUsername = $smsUsername;

        return $this;
    }

    /**
     * Get smsUsername
     *
     * @return string
     */
    public function getSmsUsername()
    {
        return $this->smsUsername;
    }

    /**
     * Set smsPassword
     *
     * @param string $smsPassword
     *
     * @return Companyinfo
     */
    public function setSmsPassword($smsPassword)
    {
        $this->smsPassword = $smsPassword;

        return $this;
    }

    /**
     * Get smsPassword
     *
     * @return string
     */
    public function getSmsPassword()
    {
        return $this->smsPassword;
    }

    /**
     * Set smsSirketadi
     *
     * @param string $smsSirketadi
     *
     * @return Companyinfo
     */
    public function setSmsSirketadi($smsSirketadi)
    {
        $this->smsSirketadi = $smsSirketadi;

        return $this;
    }

    /**
     * Get smsSirketadi
     *
     * @return string
     */
    public function getSmsSirketadi()
    {
        return $this->smsSirketadi;
    }

    /**
     * Set emailUsername
     *
     * @param string $emailUsername
     *
     * @return Companyinfo
     */
    public function setEmailUsername($emailUsername)
    {
        $this->emailUsername = $emailUsername;

        return $this;
    }

    /**
     * Get emailUsername
     *
     * @return string
     */
    public function getEmailUsername()
    {
        return $this->emailUsername;
    }

    /**
     * Set emailPassword
     *
     * @param string $emailPassword
     *
     * @return Companyinfo
     */
    public function setEmailPassword($emailPassword)
    {
        $this->emailPassword = $emailPassword;

        return $this;
    }

    /**
     * Get emailPassword
     *
     * @return string
     */
    public function getEmailPassword()
    {
        return $this->emailPassword;
    }

    /**
     * Set statikip
     *
     * @param string $statikip
     *
     * @return Companyinfo
     */
    public function setStatikip($statikip)
    {
        $this->statikip = $statikip;

        return $this;
    }

    /**
     * Get statikip
     *
     * @return string
     */
    public function getStatikip()
    {
        return $this->statikip;
    }

    /**
     * Set section
     *
     * @param integer $section
     *
     * @return Companyinfo
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return integer
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set smsForCustomer
     *
     * @param integer $smsForCustomer
     *
     * @return Companyinfo
     */
    public function setSmsForCustomer($smsForCustomer)
    {
        $this->smsForCustomer = $smsForCustomer;

        return $this;
    }

    /**
     * Get smsForCustomer
     *
     * @return integer
     */
    public function getSmsForCustomer()
    {
        return $this->smsForCustomer;
    }

    /**
     * Set systemactive
     *
     * @param integer $systemactive
     *
     * @return Companyinfo
     */
    public function setSystemactive($systemactive)
    {
        $this->systemactive = $systemactive;

        return $this;
    }

    /**
     * Get systemactive
     *
     * @return integer
     */
    public function getSystemactive()
    {
        return $this->systemactive;
    }
}

