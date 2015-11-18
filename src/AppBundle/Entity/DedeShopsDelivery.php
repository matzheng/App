<?php

namespace AppBundle\Entity;

/**
 * DedeShopsDelivery
 */
class DedeShopsDelivery
{
    /**
     * @var integer
     */
    private $pid;

    /**
     * @var string
     */
    private $dname;

    /**
     * @var float
     */
    private $price = '0.00';

    /**
     * @var string
     */
    private $des;

    /**
     * @var integer
     */
    private $orders = '0';


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
     * Set dname
     *
     * @param string $dname
     *
     * @return DedeShopsDelivery
     */
    public function setDname($dname)
    {
        $this->dname = $dname;

        return $this;
    }

    /**
     * Get dname
     *
     * @return string
     */
    public function getDname()
    {
        return $this->dname;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return DedeShopsDelivery
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
     * Set des
     *
     * @param string $des
     *
     * @return DedeShopsDelivery
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return string
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set orders
     *
     * @param integer $orders
     *
     * @return DedeShopsDelivery
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return integer
     */
    public function getOrders()
    {
        return $this->orders;
    }
}

