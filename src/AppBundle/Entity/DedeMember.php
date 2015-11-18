<?php

namespace AppBundle\Entity;

/**
 * DedeMember
 */
class DedeMember
{
    /**
     * @var integer
     */
    private $mid;

    /**
     * @var string
     */
    private $mobile = '';

    /**
     * @var string
     */
    private $mtype = '个人';

    /**
     * @var string
     */
    private $userid = '';

    /**
     * @var string
     */
    private $pwd = '';

    /**
     * @var string
     */
    private $uname = '';

    /**
     * @var boolean
     */
    private $sex = '0';

    /**
     * @var integer
     */
    private $rank = '0';

    /**
     * @var integer
     */
    private $uptime = '0';

    /**
     * @var integer
     */
    private $exptime = '0';

    /**
     * @var integer
     */
    private $money = '0';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var integer
     */
    private $scores = '0';

    /**
     * @var integer
     */
    private $matt = '0';

    /**
     * @var integer
     */
    private $spacesta = '0';

    /**
     * @var string
     */
    private $face = '';

    /**
     * @var integer
     */
    private $safequestion = '0';

    /**
     * @var string
     */
    private $safeanswer = '';

    /**
     * @var integer
     */
    private $jointime = '0';

    /**
     * @var string
     */
    private $joinip = '';

    /**
     * @var integer
     */
    private $logintime = '0';

    /**
     * @var string
     */
    private $loginip = '';

    /**
     * @var integer
     */
    private $checkmail = '-1';


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
     * Set mobile
     *
     * @param string $mobile
     *
     * @return DedeMember
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set mtype
     *
     * @param string $mtype
     *
     * @return DedeMember
     */
    public function setMtype($mtype)
    {
        $this->mtype = $mtype;

        return $this;
    }

    /**
     * Get mtype
     *
     * @return string
     */
    public function getMtype()
    {
        return $this->mtype;
    }

    /**
     * Set userid
     *
     * @param string $userid
     *
     * @return DedeMember
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
     * Set pwd
     *
     * @param string $pwd
     *
     * @return DedeMember
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
     * Set uname
     *
     * @param string $uname
     *
     * @return DedeMember
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
     * Set sex
     *
     * @param boolean $sex
     *
     * @return DedeMember
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return DedeMember
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeMember
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
     * Set exptime
     *
     * @param integer $exptime
     *
     * @return DedeMember
     */
    public function setExptime($exptime)
    {
        $this->exptime = $exptime;

        return $this;
    }

    /**
     * Get exptime
     *
     * @return integer
     */
    public function getExptime()
    {
        return $this->exptime;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return DedeMember
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return DedeMember
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
     * Set scores
     *
     * @param integer $scores
     *
     * @return DedeMember
     */
    public function setScores($scores)
    {
        $this->scores = $scores;

        return $this;
    }

    /**
     * Get scores
     *
     * @return integer
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Set matt
     *
     * @param integer $matt
     *
     * @return DedeMember
     */
    public function setMatt($matt)
    {
        $this->matt = $matt;

        return $this;
    }

    /**
     * Get matt
     *
     * @return integer
     */
    public function getMatt()
    {
        return $this->matt;
    }

    /**
     * Set spacesta
     *
     * @param integer $spacesta
     *
     * @return DedeMember
     */
    public function setSpacesta($spacesta)
    {
        $this->spacesta = $spacesta;

        return $this;
    }

    /**
     * Get spacesta
     *
     * @return integer
     */
    public function getSpacesta()
    {
        return $this->spacesta;
    }

    /**
     * Set face
     *
     * @param string $face
     *
     * @return DedeMember
     */
    public function setFace($face)
    {
        $this->face = $face;

        return $this;
    }

    /**
     * Get face
     *
     * @return string
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * Set safequestion
     *
     * @param integer $safequestion
     *
     * @return DedeMember
     */
    public function setSafequestion($safequestion)
    {
        $this->safequestion = $safequestion;

        return $this;
    }

    /**
     * Get safequestion
     *
     * @return integer
     */
    public function getSafequestion()
    {
        return $this->safequestion;
    }

    /**
     * Set safeanswer
     *
     * @param string $safeanswer
     *
     * @return DedeMember
     */
    public function setSafeanswer($safeanswer)
    {
        $this->safeanswer = $safeanswer;

        return $this;
    }

    /**
     * Get safeanswer
     *
     * @return string
     */
    public function getSafeanswer()
    {
        return $this->safeanswer;
    }

    /**
     * Set jointime
     *
     * @param integer $jointime
     *
     * @return DedeMember
     */
    public function setJointime($jointime)
    {
        $this->jointime = $jointime;

        return $this;
    }

    /**
     * Get jointime
     *
     * @return integer
     */
    public function getJointime()
    {
        return $this->jointime;
    }

    /**
     * Set joinip
     *
     * @param string $joinip
     *
     * @return DedeMember
     */
    public function setJoinip($joinip)
    {
        $this->joinip = $joinip;

        return $this;
    }

    /**
     * Get joinip
     *
     * @return string
     */
    public function getJoinip()
    {
        return $this->joinip;
    }

    /**
     * Set logintime
     *
     * @param integer $logintime
     *
     * @return DedeMember
     */
    public function setLogintime($logintime)
    {
        $this->logintime = $logintime;

        return $this;
    }

    /**
     * Get logintime
     *
     * @return integer
     */
    public function getLogintime()
    {
        return $this->logintime;
    }

    /**
     * Set loginip
     *
     * @param string $loginip
     *
     * @return DedeMember
     */
    public function setLoginip($loginip)
    {
        $this->loginip = $loginip;

        return $this;
    }

    /**
     * Get loginip
     *
     * @return string
     */
    public function getLoginip()
    {
        return $this->loginip;
    }

    /**
     * Set checkmail
     *
     * @param integer $checkmail
     *
     * @return DedeMember
     */
    public function setCheckmail($checkmail)
    {
        $this->checkmail = $checkmail;

        return $this;
    }

    /**
     * Get checkmail
     *
     * @return integer
     */
    public function getCheckmail()
    {
        return $this->checkmail;
    }
}

