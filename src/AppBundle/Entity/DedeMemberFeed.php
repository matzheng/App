<?php

namespace AppBundle\Entity;

/**
 * DedeMemberFeed
 */
class DedeMemberFeed
{
    /**
     * @var integer
     */
    private $fid;

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
    private $uname = '';

    /**
     * @var string
     */
    private $type = '0';

    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var integer
     */
    private $dtime = '0';

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $note = '';

    /**
     * @var integer
     */
    private $ischeck;


    /**
     * Get fid
     *
     * @return integer
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberFeed
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
     * @return DedeMemberFeed
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
     * Set uname
     *
     * @param string $uname
     *
     * @return DedeMemberFeed
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return DedeMemberFeed
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set aid
     *
     * @param integer $aid
     *
     * @return DedeMemberFeed
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
     * Set dtime
     *
     * @param integer $dtime
     *
     * @return DedeMemberFeed
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
     * Set title
     *
     * @param string $title
     *
     * @return DedeMemberFeed
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return DedeMemberFeed
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set ischeck
     *
     * @param integer $ischeck
     *
     * @return DedeMemberFeed
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
}

