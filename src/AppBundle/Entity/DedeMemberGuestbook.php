<?php

namespace AppBundle\Entity;

/**
 * DedeMemberGuestbook
 */
class DedeMemberGuestbook
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var string
     */
    private $gid = '0';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $uname = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $qq = '';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var integer
     */
    private $dtime = '0';

    /**
     * @var string
     */
    private $msg;


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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberGuestbook
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
     * Set gid
     *
     * @param string $gid
     *
     * @return DedeMemberGuestbook
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return string
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return DedeMemberGuestbook
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
     * Set uname
     *
     * @param string $uname
     *
     * @return DedeMemberGuestbook
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
     * Set email
     *
     * @param string $email
     *
     * @return DedeMemberGuestbook
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set qq
     *
     * @param string $qq
     *
     * @return DedeMemberGuestbook
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return DedeMemberGuestbook
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return DedeMemberGuestbook
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
     * Set dtime
     *
     * @param integer $dtime
     *
     * @return DedeMemberGuestbook
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
     * @return DedeMemberGuestbook
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

