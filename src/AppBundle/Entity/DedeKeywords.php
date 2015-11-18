<?php

namespace AppBundle\Entity;

/**
 * DedeKeywords
 */
class DedeKeywords
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $keyword = '';

    /**
     * @var integer
     */
    private $rank = '0';

    /**
     * @var integer
     */
    private $sta = '1';

    /**
     * @var string
     */
    private $rpurl = '';


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
     * Set keyword
     *
     * @param string $keyword
     *
     * @return DedeKeywords
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return DedeKeywords
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
     * Set sta
     *
     * @param integer $sta
     *
     * @return DedeKeywords
     */
    public function setSta($sta)
    {
        $this->sta = $sta;

        return $this;
    }

    /**
     * Get sta
     *
     * @return integer
     */
    public function getSta()
    {
        return $this->sta;
    }

    /**
     * Set rpurl
     *
     * @param string $rpurl
     *
     * @return DedeKeywords
     */
    public function setRpurl($rpurl)
    {
        $this->rpurl = $rpurl;

        return $this;
    }

    /**
     * Get rpurl
     *
     * @return string
     */
    public function getRpurl()
    {
        return $this->rpurl;
    }
}

