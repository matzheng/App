<?php

namespace AppBundle\Entity;

/**
 * DedeMemberSnsmsg
 */
class DedeMemberSnsmsg
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
    private $userid;

    /**
     * @var integer
     */
    private $sendtime = '0';

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
     * @return DedeMemberSnsmsg
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
     * @return DedeMemberSnsmsg
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
     * Set sendtime
     *
     * @param integer $sendtime
     *
     * @return DedeMemberSnsmsg
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Get sendtime
     *
     * @return integer
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }

    /**
     * Set msg
     *
     * @param string $msg
     *
     * @return DedeMemberSnsmsg
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

