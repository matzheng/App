<?php

namespace AppBundle\Entity;

/**
 * DedeLog
 */
class DedeLog
{
    /**
     * @var integer
     */
    private $lid;

    /**
     * @var integer
     */
    private $adminid = '0';

    /**
     * @var string
     */
    private $filename = '';

    /**
     * @var string
     */
    private $method = '';

    /**
     * @var string
     */
    private $query = '';

    /**
     * @var string
     */
    private $cip = '';

    /**
     * @var integer
     */
    private $dtime = '0';


    /**
     * Get lid
     *
     * @return integer
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * Set adminid
     *
     * @param integer $adminid
     *
     * @return DedeLog
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return integer
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return DedeLog
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

    /**
     * Set method
     *
     * @param string $method
     *
     * @return DedeLog
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set query
     *
     * @param string $query
     *
     * @return DedeLog
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set cip
     *
     * @param string $cip
     *
     * @return DedeLog
     */
    public function setCip($cip)
    {
        $this->cip = $cip;

        return $this;
    }

    /**
     * Get cip
     *
     * @return string
     */
    public function getCip()
    {
        return $this->cip;
    }

    /**
     * Set dtime
     *
     * @param integer $dtime
     *
     * @return DedeLog
     */
    public function setDtime($dtime)
    {
        $this->dtime = $dtime;

        return $this;
    }

    /**
     * Get dtime
     *
     * @return integer
     */
    public function getDtime()
    {
        return $this->dtime;
    }
}

