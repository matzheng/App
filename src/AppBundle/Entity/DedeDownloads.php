<?php

namespace AppBundle\Entity;

/**
 * DedeDownloads
 */
class DedeDownloads
{
    /**
     * @var string
     */
    private $hash;

    /**
     * @var integer
     */
    private $id = '0';

    /**
     * @var integer
     */
    private $downloads = '0';


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
     * Set id
     *
     * @param integer $id
     *
     * @return DedeDownloads
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set downloads
     *
     * @param integer $downloads
     *
     * @return DedeDownloads
     */
    public function setDownloads($downloads)
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * Get downloads
     *
     * @return integer
     */
    public function getDownloads()
    {
        return $this->downloads;
    }
}

