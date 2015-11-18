<?php

namespace AppBundle\Entity;

/**
 * DedeMtypes
 */
class DedeMtypes
{
    /**
     * @var integer
     */
    private $mtypeid;

    /**
     * @var string
     */
    private $mtypename;

    /**
     * @var integer
     */
    private $channelid = '1';

    /**
     * @var integer
     */
    private $mid = '0';


    /**
     * Get mtypeid
     *
     * @return integer
     */
    public function getMtypeid()
    {
        return $this->mtypeid;
    }

    /**
     * Set mtypename
     *
     * @param string $mtypename
     *
     * @return DedeMtypes
     */
    public function setMtypename($mtypename)
    {
        $this->mtypename = $mtypename;

        return $this;
    }

    /**
     * Get mtypename
     *
     * @return string
     */
    public function getMtypename()
    {
        return $this->mtypename;
    }

    /**
     * Set channelid
     *
     * @param integer $channelid
     *
     * @return DedeMtypes
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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMtypes
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
}

