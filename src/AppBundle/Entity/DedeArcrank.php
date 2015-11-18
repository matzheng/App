<?php

namespace AppBundle\Entity;

/**
 * DedeArcrank
 */
class DedeArcrank
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $rank = '0';

    /**
     * @var string
     */
    private $membername = '';

    /**
     * @var integer
     */
    private $adminrank = '0';

    /**
     * @var integer
     */
    private $money = '500';

    /**
     * @var integer
     */
    private $scores = '0';

    /**
     * @var string
     */
    private $purviews;


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
     * Set rank
     *
     * @param integer $rank
     *
     * @return DedeArcrank
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
     * Set membername
     *
     * @param string $membername
     *
     * @return DedeArcrank
     */
    public function setMembername($membername)
    {
        $this->membername = $membername;

        return $this;
    }

    /**
     * Get membername
     *
     * @return string
     */
    public function getMembername()
    {
        return $this->membername;
    }

    /**
     * Set adminrank
     *
     * @param integer $adminrank
     *
     * @return DedeArcrank
     */
    public function setAdminrank($adminrank)
    {
        $this->adminrank = $adminrank;

        return $this;
    }

    /**
     * Get adminrank
     *
     * @return integer
     */
    public function getAdminrank()
    {
        return $this->adminrank;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return DedeArcrank
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set scores
     *
     * @param integer $scores
     *
     * @return DedeArcrank
     */
    public function setScores($scores)
    {
        $this->scores = $scores;

        return $this;
    }

    /**
     * Get scores
     *
     * @return integer
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Set purviews
     *
     * @param string $purviews
     *
     * @return DedeArcrank
     */
    public function setPurviews($purviews)
    {
        $this->purviews = $purviews;

        return $this;
    }

    /**
     * Get purviews
     *
     * @return string
     */
    public function getPurviews()
    {
        return $this->purviews;
    }
}

