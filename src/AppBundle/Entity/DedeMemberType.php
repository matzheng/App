<?php

namespace AppBundle\Entity;

/**
 * DedeMemberType
 */
class DedeMemberType
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $rank = '0';

    /**
     * @var string
     */
    private $pname = '';

    /**
     * @var string
     */
    private $money = '0.00';

    /**
     * @var integer
     */
    private $exptime = '30';


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
     * Set rank
     *
     * @param integer $rank
     *
     * @return DedeMemberType
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
     * Set pname
     *
     * @param string $pname
     *
     * @return DedeMemberType
     */
    public function setPname($pname)
    {
        $this->pname = $pname;

        return $this;
    }

    /**
     * Get pname
     *
     * @return string
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return DedeMemberType
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set exptime
     *
     * @param integer $exptime
     *
     * @return DedeMemberType
     */
    public function setExptime($exptime)
    {
        $this->exptime = $exptime;

        return $this;
    }

    /**
     * Get exptime
     *
     * @return integer
     */
    public function getExptime()
    {
        return $this->exptime;
    }
}

