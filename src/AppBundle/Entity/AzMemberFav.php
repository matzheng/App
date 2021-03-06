<?php

namespace AppBundle\Entity;

/**
 * AzMemberFav
 */
class AzMemberFav
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
     * @var integer
     */
    private $tid = '0';

    /**
     * @var integer
     */
    private $createtime;


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
     * @return AzMemberFav
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
     * Set tid
     *
     * @param integer $tid
     *
     * @return AzMemberFav
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return AzMemberFav
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }
}

