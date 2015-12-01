<?php

namespace AppBundle\Entity;

/**
 * AzTopicLike
 */
class AzTopicLike
{
    /**
     * @var integer
     */
    private $time;

    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var boolean
     */
    private $zan = '1';


    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return AzTopicLike
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
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzTopicLike
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
     * Set zan
     *
     * @param boolean $zan
     *
     * @return AzTopicLike
     */
    public function setZan($zan)
    {
        $this->zan = $zan;

        return $this;
    }

    /**
     * Get zan
     *
     * @return boolean
     */
    public function getZan()
    {
        return $this->zan;
    }
}

