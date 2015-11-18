<?php

namespace AppBundle\Entity;

/**
 * DedeMemberFlink
 */
class DedeMemberFlink
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $url = '';


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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberFlink
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

    /**
     * Set title
     *
     * @param string $title
     *
     * @return DedeMemberFlink
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
     * @return DedeMemberFlink
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
}

