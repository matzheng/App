<?php

namespace AppBundle\Entity;

/**
 * DedeShopsProducts
 */
class DedeShopsProducts
{
    /**
     * @var string
     */
    private $oid = '';

    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var float
     */
    private $price = '0.00';

    /**
     * @var integer
     */
    private $buynum = '9';


    /**
     * Get oid
     *
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * Set aid
     *
     * @param integer $aid
     *
     * @return DedeShopsProducts
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
     * Set userid
     *
     * @param integer $userid
     *
     * @return DedeShopsProducts
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return DedeShopsProducts
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
     * Set price
     *
     * @param float $price
     *
     * @return DedeShopsProducts
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set buynum
     *
     * @param integer $buynum
     *
     * @return DedeShopsProducts
     */
    public function setBuynum($buynum)
    {
        $this->buynum = $buynum;

        return $this;
    }

    /**
     * Get buynum
     *
     * @return integer
     */
    public function getBuynum()
    {
        return $this->buynum;
    }
}

