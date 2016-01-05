<?php

namespace AppBundle\Entity;

/**
 * AzAnswerLike
 */
class AzAnswerLike
{
    /**
     * @var integer
     */
    private $time;

    /**
     * @var integer
     */
    private $mid;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $createtime;


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
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzAnswerLike
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
     * Set aid
     *
     * @param integer $aid
     *
     * @return AzAnswerLike
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
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return AzAnswerLike
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

