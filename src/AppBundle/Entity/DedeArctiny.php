<?php

namespace AppBundle\Entity;

/**
 * DedeArctiny
 */
class DedeArctiny
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $typeid2 = '0';

    /**
     * @var integer
     */
    private $arcrank = '0';

    /**
     * @var integer
     */
    private $channel = '1';

    /**
     * @var integer
     */
    private $senddate = '0';

    /**
     * @var integer
     */
    private $sortrank = '0';

    /**
     * @var integer
     */
    private $mid;


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
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeArctiny
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
     * Set typeid2
     *
     * @param string $typeid2
     *
     * @return DedeArctiny
     */
    public function setTypeid2($typeid2)
    {
        $this->typeid2 = $typeid2;

        return $this;
    }

    /**
     * Get typeid2
     *
     * @return string
     */
    public function getTypeid2()
    {
        return $this->typeid2;
    }

    /**
     * Set arcrank
     *
     * @param integer $arcrank
     *
     * @return DedeArctiny
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
     * Set channel
     *
     * @param integer $channel
     *
     * @return DedeArctiny
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return integer
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set senddate
     *
     * @param integer $senddate
     *
     * @return DedeArctiny
     */
    public function setSenddate($senddate)
    {
        $this->senddate = $senddate;

        return $this;
    }

    /**
     * Get senddate
     *
     * @return integer
     */
    public function getSenddate()
    {
        return $this->senddate;
    }

    /**
     * Set sortrank
     *
     * @param integer $sortrank
     *
     * @return DedeArctiny
     */
    public function setSortrank($sortrank)
    {
        $this->sortrank = $sortrank;

        return $this;
    }

    /**
     * Get sortrank
     *
     * @return integer
     */
    public function getSortrank()
    {
        return $this->sortrank;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeArctiny
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

