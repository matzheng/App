<?php

namespace AppBundle\Entity;

/**
 * DedeCoNote
 */
class DedeCoNote
{
    /**
     * @var integer
     */
    private $nid;

    /**
     * @var integer
     */
    private $channelid = '0';

    /**
     * @var string
     */
    private $notename = '';

    /**
     * @var string
     */
    private $sourcelang = 'gb2312';

    /**
     * @var integer
     */
    private $uptime = '0';

    /**
     * @var integer
     */
    private $cotime = '0';

    /**
     * @var integer
     */
    private $pnum = '0';

    /**
     * @var boolean
     */
    private $isok = '0';

    /**
     * @var boolean
     */
    private $usemore = '0';

    /**
     * @var string
     */
    private $listconfig;

    /**
     * @var string
     */
    private $itemconfig;


    /**
     * Get nid
     *
     * @return integer
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * Set channelid
     *
     * @param integer $channelid
     *
     * @return DedeCoNote
     */
    public function setChannelid($channelid)
    {
        $this->channelid = $channelid;

        return $this;
    }

    /**
     * Get channelid
     *
     * @return integer
     */
    public function getChannelid()
    {
        return $this->channelid;
    }

    /**
     * Set notename
     *
     * @param string $notename
     *
     * @return DedeCoNote
     */
    public function setNotename($notename)
    {
        $this->notename = $notename;

        return $this;
    }

    /**
     * Get notename
     *
     * @return string
     */
    public function getNotename()
    {
        return $this->notename;
    }

    /**
     * Set sourcelang
     *
     * @param string $sourcelang
     *
     * @return DedeCoNote
     */
    public function setSourcelang($sourcelang)
    {
        $this->sourcelang = $sourcelang;

        return $this;
    }

    /**
     * Get sourcelang
     *
     * @return string
     */
    public function getSourcelang()
    {
        return $this->sourcelang;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeCoNote
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return integer
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set cotime
     *
     * @param integer $cotime
     *
     * @return DedeCoNote
     */
    public function setCotime($cotime)
    {
        $this->cotime = $cotime;

        return $this;
    }

    /**
     * Get cotime
     *
     * @return integer
     */
    public function getCotime()
    {
        return $this->cotime;
    }

    /**
     * Set pnum
     *
     * @param integer $pnum
     *
     * @return DedeCoNote
     */
    public function setPnum($pnum)
    {
        $this->pnum = $pnum;

        return $this;
    }

    /**
     * Get pnum
     *
     * @return integer
     */
    public function getPnum()
    {
        return $this->pnum;
    }

    /**
     * Set isok
     *
     * @param boolean $isok
     *
     * @return DedeCoNote
     */
    public function setIsok($isok)
    {
        $this->isok = $isok;

        return $this;
    }

    /**
     * Get isok
     *
     * @return boolean
     */
    public function getIsok()
    {
        return $this->isok;
    }

    /**
     * Set usemore
     *
     * @param boolean $usemore
     *
     * @return DedeCoNote
     */
    public function setUsemore($usemore)
    {
        $this->usemore = $usemore;

        return $this;
    }

    /**
     * Get usemore
     *
     * @return boolean
     */
    public function getUsemore()
    {
        return $this->usemore;
    }

    /**
     * Set listconfig
     *
     * @param string $listconfig
     *
     * @return DedeCoNote
     */
    public function setListconfig($listconfig)
    {
        $this->listconfig = $listconfig;

        return $this;
    }

    /**
     * Get listconfig
     *
     * @return string
     */
    public function getListconfig()
    {
        return $this->listconfig;
    }

    /**
     * Set itemconfig
     *
     * @param string $itemconfig
     *
     * @return DedeCoNote
     */
    public function setItemconfig($itemconfig)
    {
        $this->itemconfig = $itemconfig;

        return $this;
    }

    /**
     * Get itemconfig
     *
     * @return string
     */
    public function getItemconfig()
    {
        return $this->itemconfig;
    }
}

