<?php

namespace AppBundle\Entity;

/**
 * DedeCoMediaurls
 */
class DedeCoMediaurls
{
    /**
     * @var string
     */
    private $tofile = '';

    /**
     * @var integer
     */
    private $nid = '0';

    /**
     * @var string
     */
    private $hash = '';


    /**
     * Get tofile
     *
     * @return string
     */
    public function getTofile()
    {
        return $this->tofile;
    }

    /**
     * Set nid
     *
     * @param integer $nid
     *
     * @return DedeCoMediaurls
     */
    public function setNid($nid)
    {
        $this->nid = $nid;

        return $this;
    }

    /**
     * Get nid
     *
     * @return integer
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return DedeCoMediaurls
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }
}

