<?php

namespace AppBundle\Entity;

/**
 * DedeUploads
 */
class DedeUploads
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $arcid = '0';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var integer
     */
    private $mediatype = '1';

    /**
     * @var string
     */
    private $width = '';

    /**
     * @var string
     */
    private $height = '';

    /**
     * @var string
     */
    private $playtime = '';

    /**
     * @var integer
     */
    private $filesize = '0';

    /**
     * @var integer
     */
    private $uptime = '0';

    /**
     * @var integer
     */
    private $mid = '0';


    /**
     * Get aid
     *
     * @return integer
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set arcid
     *
     * @param integer $arcid
     *
     * @return DedeUploads
     */
    public function setArcid($arcid)
    {
        $this->arcid = $arcid;

        return $this;
    }

    /**
     * Get arcid
     *
     * @return integer
     */
    public function getArcid()
    {
        return $this->arcid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return DedeUploads
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return DedeUploads
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set mediatype
     *
     * @param integer $mediatype
     *
     * @return DedeUploads
     */
    public function setMediatype($mediatype)
    {
        $this->mediatype = $mediatype;

        return $this;
    }

    /**
     * Get mediatype
     *
     * @return integer
     */
    public function getMediatype()
    {
        return $this->mediatype;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return DedeUploads
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return DedeUploads
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set playtime
     *
     * @param string $playtime
     *
     * @return DedeUploads
     */
    public function setPlaytime($playtime)
    {
        $this->playtime = $playtime;

        return $this;
    }

    /**
     * Get playtime
     *
     * @return string
     */
    public function getPlaytime()
    {
        return $this->playtime;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return DedeUploads
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeUploads
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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeUploads
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

