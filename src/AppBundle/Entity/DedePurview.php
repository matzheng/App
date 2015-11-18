<?php

namespace AppBundle\Entity;

/**
 * DedePurview
 */
class DedePurview
{
    /**
     * @var string
     */
    private $pkey;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var integer
     */
    private $rank;

    /**
     * @var string
     */
    private $pvalue;


    /**
     * Get pkey
     *
     * @return string
     */
    public function getPkey()
    {
        return $this->pkey;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedePurview
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
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedePurview
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
     * Set rank
     *
     * @param integer $rank
     *
     * @return DedePurview
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set pvalue
     *
     * @param string $pvalue
     *
     * @return DedePurview
     */
    public function setPvalue($pvalue)
    {
        $this->pvalue = $pvalue;

        return $this;
    }

    /**
     * Get pvalue
     *
     * @return string
     */
    public function getPvalue()
    {
        return $this->pvalue;
    }
}

