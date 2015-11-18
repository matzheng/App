<?php

namespace AppBundle\Entity;

/**
 * DedeRatings
 */
class DedeRatings
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var integer
     */
    private $totalVotes = '0';

    /**
     * @var integer
     */
    private $totalValue = '0';

    /**
     * @var string
     */
    private $usedIps;


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set totalVotes
     *
     * @param integer $totalVotes
     *
     * @return DedeRatings
     */
    public function setTotalVotes($totalVotes)
    {
        $this->totalVotes = $totalVotes;

        return $this;
    }

    /**
     * Get totalVotes
     *
     * @return integer
     */
    public function getTotalVotes()
    {
        return $this->totalVotes;
    }

    /**
     * Set totalValue
     *
     * @param integer $totalValue
     *
     * @return DedeRatings
     */
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

        return $this;
    }

    /**
     * Get totalValue
     *
     * @return integer
     */
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set usedIps
     *
     * @param string $usedIps
     *
     * @return DedeRatings
     */
    public function setUsedIps($usedIps)
    {
        $this->usedIps = $usedIps;

        return $this;
    }

    /**
     * Get usedIps
     *
     * @return string
     */
    public function getUsedIps()
    {
        return $this->usedIps;
    }
}

