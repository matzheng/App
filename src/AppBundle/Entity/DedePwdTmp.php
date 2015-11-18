<?php

namespace AppBundle\Entity;

/**
 * DedePwdTmp
 */
class DedePwdTmp
{
    /**
     * @var integer
     */
    private $mid;

    /**
     * @var string
     */
    private $membername = '';

    /**
     * @var string
     */
    private $pwd = '';

    /**
     * @var integer
     */
    private $mailtime = '0';


    /**
     * Get mid
     *
     * @return integer
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set membername
     *
     * @param string $membername
     *
     * @return DedePwdTmp
     */
    public function setMembername($membername)
    {
        $this->membername = $membername;

        return $this;
    }

    /**
     * Get membername
     *
     * @return string
     */
    public function getMembername()
    {
        return $this->membername;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return DedePwdTmp
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set mailtime
     *
     * @param integer $mailtime
     *
     * @return DedePwdTmp
     */
    public function setMailtime($mailtime)
    {
        $this->mailtime = $mailtime;

        return $this;
    }

    /**
     * Get mailtime
     *
     * @return integer
     */
    public function getMailtime()
    {
        return $this->mailtime;
    }
}

