<?php

namespace AppBundle\Entity;

/**
 * DedeDlLog
 */
class DedeDlLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $dtype;

    /**
     * @var integer
     */
    private $dltime = '0';

    /**
     * @var string
     */
    private $referrer = '';

    /**
     * @var string
     */
    private $userAgent;


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
     * Set ip
     *
     * @param string $ip
     *
     * @return DedeDlLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return DedeDlLog
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set dtype
     *
     * @param string $dtype
     *
     * @return DedeDlLog
     */
    public function setDtype($dtype)
    {
        $this->dtype = $dtype;

        return $this;
    }

    /**
     * Get dtype
     *
     * @return string
     */
    public function getDtype()
    {
        return $this->dtype;
    }

    /**
     * Set dltime
     *
     * @param integer $dltime
     *
     * @return DedeDlLog
     */
    public function setDltime($dltime)
    {
        $this->dltime = $dltime;

        return $this;
    }

    /**
     * Get dltime
     *
     * @return integer
     */
    public function getDltime()
    {
        return $this->dltime;
    }

    /**
     * Set referrer
     *
     * @param string $referrer
     *
     * @return DedeDlLog
     */
    public function setReferrer($referrer)
    {
        $this->referrer = $referrer;

        return $this;
    }

    /**
     * Get referrer
     *
     * @return string
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return DedeDlLog
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }
}

