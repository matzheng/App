<?php

namespace AppBundle\Entity;

/**
 * DedeSearchKeywords
 */
class DedeSearchKeywords
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $keyword = '';

    /**
     * @var string
     */
    private $spwords = '';

    /**
     * @var integer
     */
    private $count = '1';

    /**
     * @var integer
     */
    private $result = '0';

    /**
     * @var integer
     */
    private $lasttime = '0';

    /**
     * @var integer
     */
    private $channelid = '0';

    /**
     * @var integer
     */
    private $typeid = '0';


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
     * Set keyword
     *
     * @param string $keyword
     *
     * @return DedeSearchKeywords
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set spwords
     *
     * @param string $spwords
     *
     * @return DedeSearchKeywords
     */
    public function setSpwords($spwords)
    {
        $this->spwords = $spwords;

        return $this;
    }

    /**
     * Get spwords
     *
     * @return string
     */
    public function getSpwords()
    {
        return $this->spwords;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return DedeSearchKeywords
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set result
     *
     * @param integer $result
     *
     * @return DedeSearchKeywords
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set lasttime
     *
     * @param integer $lasttime
     *
     * @return DedeSearchKeywords
     */
    public function setLasttime($lasttime)
    {
        $this->lasttime = $lasttime;

        return $this;
    }

    /**
     * Get lasttime
     *
     * @return integer
     */
    public function getLasttime()
    {
        return $this->lasttime;
    }

    /**
     * Set channelid
     *
     * @param integer $channelid
     *
     * @return DedeSearchKeywords
     */
    public function setChannelid($channelid)
    {
        $this->channelid = $channelid;

        return $this;
    }

    /**
     * Get channelid
     *
     * @return integer
     */
    public function getChannelid()
    {
        return $this->channelid;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeSearchKeywords
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}

