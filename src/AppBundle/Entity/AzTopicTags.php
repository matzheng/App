<?php

namespace AppBundle\Entity;

/**
 * AzTopicTags
 */
class AzTopicTags
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $tid = '0';

    /**
     * @var integer
     */
    private $tagid = '0';


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
     * Set tid
     *
     * @param integer $tid
     *
     * @return AzTopicTags
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

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
     * Set tagid
     *
     * @param integer $tagid
     *
     * @return AzTopicTags
     */
    public function setTagid($tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return integer
     */
    public function getTagid()
    {
        return $this->tagid;
    }
}

