<?php

namespace AppBundle\Entity;

/**
 * DedeCoUrls
 */
class DedeCoUrls
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hash = '';

    /**
     * @var integer
     */
    private $nid = '0';


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
     * Set hash
     *
     * @param string $hash
     *
     * @return DedeCoUrls
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

    /**
     * Set nid
     *
     * @param integer $nid
     *
     * @return DedeCoUrls
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
}

