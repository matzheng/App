<?php

namespace AppBundle\Entity;

/**
 * DedeAdmin
 */
class DedeAdmin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $usertype = '0';

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
     * @var string
     */
    private $tname = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $typeid;

    /**
     * @var integer
     */
    private $logintime = '0';

    /**
     * @var string
     */
    private $loginip = '';


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
     * Set usertype
     *
     * @param float $usertype
     *
     * @return DedeAdmin
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return float
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set userid
     *
     * @param string $userid
     *
     * @return DedeAdmin
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
     * @return DedeAdmin
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
     * @return DedeAdmin
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
     * Set tname
     *
     * @param string $tname
     *
     * @return DedeAdmin
     */
    public function setTname($tname)
    {
        $this->tname = $tname;

        return $this;
    }

    /**
     * Get tname
     *
     * @return string
     */
    public function getTname()
    {
        return $this->tname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return DedeAdmin
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
     * Set typeid
     *
     * @param string $typeid
     *
     * @return DedeAdmin
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return string
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set logintime
     *
     * @param integer $logintime
     *
     * @return DedeAdmin
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
     * @return DedeAdmin
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
}

