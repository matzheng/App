<?php

namespace AppBundle\Entity;

/**
 * DedeSearchCache
 */
class DedeSearchCache
{
    /**
     * @var string
     */
    private $hash;

    /**
     * @var integer
     */
    private $lasttime = '0';

    /**
     * @var integer
     */
    private $rsnum = '0';

    /**
     * @var string
     */
    private $ids;


    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set lasttime
     *
     * @param integer $lasttime
     *
     * @return DedeSearchCache
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
     * Set rsnum
     *
     * @param integer $rsnum
     *
     * @return DedeSearchCache
     */
    public function setRsnum($rsnum)
    {
        $this->rsnum = $rsnum;

        return $this;
    }

    /**
     * Get rsnum
     *
     * @return integer
     */
    public function getRsnum()
    {
        return $this->rsnum;
    }

    /**
     * Set ids
     *
     * @param string $ids
     *
     * @return DedeSearchCache
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Get ids
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }
}

