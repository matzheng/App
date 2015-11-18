<?php

namespace AppBundle\Entity;

/**
 * DedeArccache
 */
class DedeArccache
{
    /**
     * @var string
     */
    private $md5hash = '';

    /**
     * @var integer
     */
    private $uptime = '0';

    /**
     * @var string
     */
    private $cachedata;


    /**
     * Get md5hash
     *
     * @return string
     */
    public function getMd5hash()
    {
        return $this->md5hash;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeArccache
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return integer
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set cachedata
     *
     * @param string $cachedata
     *
     * @return DedeArccache
     */
    public function setCachedata($cachedata)
    {
        $this->cachedata = $cachedata;

        return $this;
    }

    /**
     * Get cachedata
     *
     * @return string
     */
    public function getCachedata()
    {
        return $this->cachedata;
    }
}

