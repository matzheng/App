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
     * @var string
     */
    private $tags;

    /**
     * @var integer
     */
    private $qtypes;

    /**
     * @var integer
     */
    private $createtime;


    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
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

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return AzTopic
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set qtypes
     *
     * @param integer $qtypes
     *
     * @return AzTopic
     */
    public function setQtypes($qtypes)
    {
        $this->qtypes = $qtypes;

        return $this;
    }

    /**
     * Get qtypes
     *
     * @return integer
     */
    public function getQtypes()
    {
        return $this->qtypes;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return AzTopic
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }
}

