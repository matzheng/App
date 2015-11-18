<?php

namespace AppBundle\Entity;

/**
 * DedeVerifies
 */
class DedeVerifies
{
    /**
     * @var string
     */
    private $nameid = '';

    /**
     * @var string
     */
    private $cthash = '';

    /**
     * @var boolean
     */
    private $method = '0';

    /**
     * @var string
     */
    private $filename = '';


    /**
     * Get nameid
     *
     * @return string
     */
    public function getNameid()
    {
        return $this->nameid;
    }

    /**
     * Set cthash
     *
     * @param string $cthash
     *
     * @return DedeVerifies
     */
    public function setCthash($cthash)
    {
        $this->cthash = $cthash;

        return $this;
    }

    /**
     * Get cthash
     *
     * @return string
     */
    public function getCthash()
    {
        return $this->cthash;
    }

    /**
     * Set method
     *
     * @param boolean $method
     *
     * @return DedeVerifies
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return boolean
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return DedeVerifies
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }
}

