<?php

namespace AppBundle\Entity;

/**
 * DedeMemberVhistory
 */
class DedeMemberVhistory
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
    private $loginid = '';

    /**
     * @var integer
     */
    private $vid = '0';

    /**
     * @var string
     */
    private $vloginid = '';

    /**
     * @var integer
     */
    private $count = '0';

    /**
     * @var string
     */
    private $vip = '';

    /**
     * @var integer
     */
    private $vtime = '0';


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
     * @return DedeMemberVhistory
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
     * Set loginid
     *
     * @param string $loginid
     *
     * @return DedeMemberVhistory
     */
    public function setLoginid($loginid)
    {
        $this->loginid = $loginid;

        return $this;
    }

    /**
     * Get loginid
     *
     * @return string
     */
    public function getLoginid()
    {
        return $this->loginid;
    }

    /**
     * Set vid
     *
     * @param integer $vid
     *
     * @return DedeMemberVhistory
     */
    public function setVid($vid)
    {
        $this->vid = $vid;

        return $this;
    }

    /**
     * Get vid
     *
     * @return integer
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set vloginid
     *
     * @param string $vloginid
     *
     * @return DedeMemberVhistory
     */
    public function setVloginid($vloginid)
    {
        $this->vloginid = $vloginid;

        return $this;
    }

    /**
     * Get vloginid
     *
     * @return string
     */
    public function getVloginid()
    {
        return $this->vloginid;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return DedeMemberVhistory
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set vip
     *
     * @param string $vip
     *
     * @return DedeMemberVhistory
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return string
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * Set vtime
     *
     * @param integer $vtime
     *
     * @return DedeMemberVhistory
     */
    public function setVtime($vtime)
    {
        $this->vtime = $vtime;

        return $this;
    }

    /**
     * Get vtime
     *
     * @return integer
     */
    public function getVtime()
    {
        return $this->vtime;
    }
}

