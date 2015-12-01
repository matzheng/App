<?php

namespace AppBundle\Entity;

/**
 * AzTopic
 */
class AzTopic
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var boolean
     */
    private $annoy = '0';

    /**
     * @var boolean
     */
    private $deleted = '0';


    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }
    /**
     * Set title
     *
     * @param string $title
     *
     * @return AzTopic
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
     * Set detail
     *
     * @param string $detail
     *
     * @return AzTopic
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzTopic
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
     * Set annoy
     *
     * @param boolean $annoy
     *
     * @return AzTopic
     */
    public function setAnnoy($annoy)
    {
        $this->annoy = $annoy;

        return $this;
    }

    /**
     * Get annoy
     *
     * @return boolean
     */
    public function getAnnoy()
    {
        return $this->annoy;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return AzTopic
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}

