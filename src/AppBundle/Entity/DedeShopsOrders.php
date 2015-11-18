<?php

namespace AppBundle\Entity;

/**
 * DedeShopsOrders
 */
class DedeShopsOrders
{
    /**
     * @var string
     */
    private $oid;

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var integer
     */
    private $pid = '0';

    /**
     * @var boolean
     */
    private $paytype = '1';

    /**
     * @var integer
     */
    private $cartcount = '0';

    /**
     * @var string
     */
    private $dprice = '0.00';

    /**
     * @var string
     */
    private $price = '0.00';

    /**
     * @var string
     */
    private $pricecount;

    /**
     * @var boolean
     */
    private $state = '0';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var integer
     */
    private $stime = '0';


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
     * Set userid
     *
     * @param integer $userid
     *
     * @return DedeShopsOrders
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
     * Set pid
     *
     * @param integer $pid
     *
     * @return DedeShopsOrders
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set paytype
     *
     * @param boolean $paytype
     *
     * @return DedeShopsOrders
     */
    public function setPaytype($paytype)
    {
        $this->paytype = $paytype;

        return $this;
    }

    /**
     * Get paytype
     *
     * @return boolean
     */
    public function getPaytype()
    {
        return $this->paytype;
    }

    /**
     * Set cartcount
     *
     * @param integer $cartcount
     *
     * @return DedeShopsOrders
     */
    public function setCartcount($cartcount)
    {
        $this->cartcount = $cartcount;

        return $this;
    }

    /**
     * Get cartcount
     *
     * @return integer
     */
    public function getCartcount()
    {
        return $this->cartcount;
    }

    /**
     * Set dprice
     *
     * @param string $dprice
     *
     * @return DedeShopsOrders
     */
    public function setDprice($dprice)
    {
        $this->dprice = $dprice;

        return $this;
    }

    /**
     * Get dprice
     *
     * @return string
     */
    public function getDprice()
    {
        return $this->dprice;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return DedeShopsOrders
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pricecount
     *
     * @param string $pricecount
     *
     * @return DedeShopsOrders
     */
    public function setPricecount($pricecount)
    {
        $this->pricecount = $pricecount;

        return $this;
    }

    /**
     * Get pricecount
     *
     * @return string
     */
    public function getPricecount()
    {
        return $this->pricecount;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return DedeShopsOrders
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return DedeShopsOrders
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set stime
     *
     * @param integer $stime
     *
     * @return DedeShopsOrders
     */
    public function setStime($stime)
    {
        $this->stime = $stime;

        return $this;
    }

    /**
     * Get stime
     *
     * @return integer
     */
    public function getStime()
    {
        return $this->stime;
    }
}

