<?php

namespace AppBundle\Entity;

/**
 * DedeTaglist
 */
class DedeTaglist
{
    /**
     * @var integer
     */
    private $tid = '0';

    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var integer
     */
    private $arcrank = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $tag = '';


    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return DedeTaglist
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
     * Set aid
     *
     * @param integer $aid
     *
     * @return DedeTaglist
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

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
     * Set arcrank
     *
     * @param integer $arcrank
     *
     * @return DedeTaglist
     */
    public function setArcrank($arcrank)
    {
        $this->arcrank = $arcrank;

        return $this;
    }

    /**
     * Get arcrank
     *
     * @return integer
     */
    public function getArcrank()
    {
        return $this->arcrank;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeTaglist
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return DedeTaglist
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
}

