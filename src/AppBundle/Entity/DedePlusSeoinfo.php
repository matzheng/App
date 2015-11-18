<?php

namespace AppBundle\Entity;

/**
 * DedePlusSeoinfo
 */
class DedePlusSeoinfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $createTime;

    /**
     * @var string
     */
    private $alexaNum;

    /**
     * @var string
     */
    private $alexaAreaNum;

    /**
     * @var string
     */
    private $baiduCount;

    /**
     * @var string
     */
    private $sogouCount;

    /**
     * @var string
     */
    private $haosou360Count;


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
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return DedePlusSeoinfo
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set alexaNum
     *
     * @param string $alexaNum
     *
     * @return DedePlusSeoinfo
     */
    public function setAlexaNum($alexaNum)
    {
        $this->alexaNum = $alexaNum;

        return $this;
    }

    /**
     * Get alexaNum
     *
     * @return string
     */
    public function getAlexaNum()
    {
        return $this->alexaNum;
    }

    /**
     * Set alexaAreaNum
     *
     * @param string $alexaAreaNum
     *
     * @return DedePlusSeoinfo
     */
    public function setAlexaAreaNum($alexaAreaNum)
    {
        $this->alexaAreaNum = $alexaAreaNum;

        return $this;
    }

    /**
     * Get alexaAreaNum
     *
     * @return string
     */
    public function getAlexaAreaNum()
    {
        return $this->alexaAreaNum;
    }

    /**
     * Set baiduCount
     *
     * @param string $baiduCount
     *
     * @return DedePlusSeoinfo
     */
    public function setBaiduCount($baiduCount)
    {
        $this->baiduCount = $baiduCount;

        return $this;
    }

    /**
     * Get baiduCount
     *
     * @return string
     */
    public function getBaiduCount()
    {
        return $this->baiduCount;
    }

    /**
     * Set sogouCount
     *
     * @param string $sogouCount
     *
     * @return DedePlusSeoinfo
     */
    public function setSogouCount($sogouCount)
    {
        $this->sogouCount = $sogouCount;

        return $this;
    }

    /**
     * Get sogouCount
     *
     * @return string
     */
    public function getSogouCount()
    {
        return $this->sogouCount;
    }

    /**
     * Set haosou360Count
     *
     * @param string $haosou360Count
     *
     * @return DedePlusSeoinfo
     */
    public function setHaosou360Count($haosou360Count)
    {
        $this->haosou360Count = $haosou360Count;

        return $this;
    }

    /**
     * Get haosou360Count
     *
     * @return string
     */
    public function getHaosou360Count()
    {
        return $this->haosou360Count;
    }
}

