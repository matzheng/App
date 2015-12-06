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
     * Get fid
     *
     * @return integer
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     *
     * @return AzMemberFav
     */
    public function setFid($fid){
        $this->fid = $fid;

        return $this;
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
}

