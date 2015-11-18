<?php

namespace AppBundle\Entity;

/**
 * DedeMultiservConfig
 */
class DedeMultiservConfig
{
    /**
     * @var integer
     */
    private $remoteuploads = '0';

    /**
     * @var string
     */
    private $remoteupurl;

    /**
     * @var string
     */
    private $rminfo;

    /**
     * @var string
     */
    private $servinfo;


    /**
     * Get remoteuploads
     *
     * @return integer
     */
    public function getRemoteuploads()
    {
        return $this->remoteuploads;
    }

    /**
     * Set remoteupurl
     *
     * @param string $remoteupurl
     *
     * @return DedeMultiservConfig
     */
    public function setRemoteupurl($remoteupurl)
    {
        $this->remoteupurl = $remoteupurl;

        return $this;
    }

    /**
     * Get remoteupurl
     *
     * @return string
     */
    public function getRemoteupurl()
    {
        return $this->remoteupurl;
    }

    /**
     * Set rminfo
     *
     * @param string $rminfo
     *
     * @return DedeMultiservConfig
     */
    public function setRminfo($rminfo)
    {
        $this->rminfo = $rminfo;

        return $this;
    }

    /**
     * Get rminfo
     *
     * @return string
     */
    public function getRminfo()
    {
        return $this->rminfo;
    }

    /**
     * Set servinfo
     *
     * @param string $servinfo
     *
     * @return DedeMultiservConfig
     */
    public function setServinfo($servinfo)
    {
        $this->servinfo = $servinfo;

        return $this;
    }

    /**
     * Get servinfo
     *
     * @return string
     */
    public function getServinfo()
    {
        return $this->servinfo;
    }
}

