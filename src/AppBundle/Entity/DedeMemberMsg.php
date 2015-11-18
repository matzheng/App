<?php

namespace AppBundle\Entity;

/**
 * DedeMemberMsg
 */
class DedeMemberMsg
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var string
     */
    private $userid = '';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var integer
     */
    private $ischeck = '0';

    /**
     * @var integer
     */
    private $dtime = '0';

    /**
     * @var string
     */
    private $msg;


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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberMsg
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

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
     * Set userid
     *
     * @param string $userid
     *
     * @return DedeMemberMsg
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return DedeMemberMsg
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
     * Set ischeck
     *
     * @param integer $ischeck
     *
     * @return DedeMemberMsg
     */
    public function setIscheck($ischeck)
    {
        $this->ischeck = $ischeck;

        return $this;
    }

    /**
     * Get ischeck
     *
     * @return integer
     */
    public function getIscheck()
    {
        return $this->ischeck;
    }

    /**
     * Set dtime
     *
     * @param integer $dtime
     *
     * @return DedeMemberMsg
     */
    public function setDtime($dtime)
    {
        $this->dtime = $dtime;

        return $this;
    }

    /**
     * Get dtime
     *
     * @return integer
     */
    public function getDtime()
    {
        return $this->dtime;
    }

    /**
     * Set msg
     *
     * @param string $msg
     *
     * @return DedeMemberMsg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * Get msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }
}

