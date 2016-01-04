<?php

namespace AppBundle\Entity;

/**
 * AzTags
 */
class AzTags
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tagname;

    /**
     * @var integer
     */
    private $parentid;


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
     * Set tagname
     *
     * @param string $tagname
     *
     * @return AzTags
     */
    public function setTagname($tagname)
    {
        $this->tagname = $tagname;

        return $this;
    }

    /**
     * Get tagname
     *
     * @return string
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     *
     * @return AzTags
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer
     */
    public function getParentid()
    {
        return $this->parentid;
    }
}

