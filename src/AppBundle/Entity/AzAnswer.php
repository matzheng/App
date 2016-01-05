<?php

namespace AppBundle\Entity;

/**
 * AzAnswer
 */
class AzAnswer
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var integer
     */
    private $mid;

    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $createtime;


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
     * Set answer
     *
     * @param string $answer
     *
     * @return AzAnswer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzAnswer
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
     * @return AzAnswer
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
     * @return AzAnswer
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

