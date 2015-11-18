<?php

namespace AppBundle\Entity;

/**
 * DedeFeedback
 */
class DedeFeedback
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $username = '';

    /**
     * @var string
     */
    private $arctitle = '';

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
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $bad = '0';

    /**
     * @var integer
     */
    private $good = '0';

    /**
     * @var array
     */
    private $ftype = 'feedback';

    /**
     * @var integer
     */
    private $face = '0';

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
     * Set aid
     *
     * @param integer $aid
     *
     * @return DedeFeedback
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeFeedback
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return DedeFeedback
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set arctitle
     *
     * @param string $arctitle
     *
     * @return DedeFeedback
     */
    public function setArctitle($arctitle)
    {
        $this->arctitle = $arctitle;

        return $this;
    }

    /**
     * Get arctitle
     *
     * @return string
     */
    public function getArctitle()
    {
        return $this->arctitle;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return DedeFeedback
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
     * @return DedeFeedback
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
     * @return DedeFeedback
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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeFeedback
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
     * Set bad
     *
     * @param integer $bad
     *
     * @return DedeFeedback
     */
    public function setBad($bad)
    {
        $this->bad = $bad;

        return $this;
    }

    /**
     * Get bad
     *
     * @return integer
     */
    public function getBad()
    {
        return $this->bad;
    }

    /**
     * Set good
     *
     * @param integer $good
     *
     * @return DedeFeedback
     */
    public function setGood($good)
    {
        $this->good = $good;

        return $this;
    }

    /**
     * Get good
     *
     * @return integer
     */
    public function getGood()
    {
        return $this->good;
    }

    /**
     * Set ftype
     *
     * @param array $ftype
     *
     * @return DedeFeedback
     */
    public function setFtype($ftype)
    {
        $this->ftype = $ftype;

        return $this;
    }

    /**
     * Get ftype
     *
     * @return array
     */
    public function getFtype()
    {
        return $this->ftype;
    }

    /**
     * Set face
     *
     * @param integer $face
     *
     * @return DedeFeedback
     */
    public function setFace($face)
    {
        $this->face = $face;

        return $this;
    }

    /**
     * Get face
     *
     * @return integer
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * Set msg
     *
     * @param string $msg
     *
     * @return DedeFeedback
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

