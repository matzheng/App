<?php

namespace AppBundle\Entity;

/**
 * DedeMemberFriends
 */
class DedeMemberFriends
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $fid = '0';

    /**
     * @var string
     */
    private $floginid = '';

    /**
     * @var string
     */
    private $funame = '';

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $addtime = '0';

    /**
     * @var boolean
     */
    private $ftype = '0';

    /**
     * @var integer
     */
    private $groupid = '1';

    /**
     * @var string
     */
    private $description;


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
     * Set fid
     *
     * @param integer $fid
     *
     * @return DedeMemberFriends
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

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
     * Set floginid
     *
     * @param string $floginid
     *
     * @return DedeMemberFriends
     */
    public function setFloginid($floginid)
    {
        $this->floginid = $floginid;

        return $this;
    }

    /**
     * Get floginid
     *
     * @return string
     */
    public function getFloginid()
    {
        return $this->floginid;
    }

    /**
     * Set funame
     *
     * @param string $funame
     *
     * @return DedeMemberFriends
     */
    public function setFuname($funame)
    {
        $this->funame = $funame;

        return $this;
    }

    /**
     * Get funame
     *
     * @return string
     */
    public function getFuname()
    {
        return $this->funame;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberFriends
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
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return DedeMemberFriends
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set ftype
     *
     * @param boolean $ftype
     *
     * @return DedeMemberFriends
     */
    public function setFtype($ftype)
    {
        $this->ftype = $ftype;

        return $this;
    }

    /**
     * Get ftype
     *
     * @return boolean
     */
    public function getFtype()
    {
        return $this->ftype;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     *
     * @return DedeMemberFriends
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DedeMemberFriends
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

