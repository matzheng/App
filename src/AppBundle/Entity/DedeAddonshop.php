<?php

namespace AppBundle\Entity;

/**
 * DedeAddonshop
 */
class DedeAddonshop
{
    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $body;

    /**
     * @var float
     */
    private $price = '0';

    /**
     * @var float
     */
    private $trueprice = '0';

    /**
     * @var string
     */
    private $brand = '';

    /**
     * @var string
     */
    private $units = '';

    /**
     * @var string
     */
    private $templet;

    /**
     * @var string
     */
    private $userip;

    /**
     * @var string
     */
    private $redirecturl;

    /**
     * @var string
     */
    private $vocation = '0';

    /**
     * @var string
     */
    private $infotype = '0';

    /**
     * @var integer
     */
    private $uptime = '0';


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
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeAddonshop
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
     * Set body
     *
     * @param string $body
     *
     * @return DedeAddonshop
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return DedeAddonshop
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
     * Set trueprice
     *
     * @param float $trueprice
     *
     * @return DedeAddonshop
     */
    public function setTrueprice($trueprice)
    {
        $this->trueprice = $trueprice;

        return $this;
    }

    /**
     * Get trueprice
     *
     * @return float
     */
    public function getTrueprice()
    {
        return $this->trueprice;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return DedeAddonshop
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set units
     *
     * @param string $units
     *
     * @return DedeAddonshop
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set templet
     *
     * @param string $templet
     *
     * @return DedeAddonshop
     */
    public function setTemplet($templet)
    {
        $this->templet = $templet;

        return $this;
    }

    /**
     * Get templet
     *
     * @return string
     */
    public function getTemplet()
    {
        return $this->templet;
    }

    /**
     * Set userip
     *
     * @param string $userip
     *
     * @return DedeAddonshop
     */
    public function setUserip($userip)
    {
        $this->userip = $userip;

        return $this;
    }

    /**
     * Get userip
     *
     * @return string
     */
    public function getUserip()
    {
        return $this->userip;
    }

    /**
     * Set redirecturl
     *
     * @param string $redirecturl
     *
     * @return DedeAddonshop
     */
    public function setRedirecturl($redirecturl)
    {
        $this->redirecturl = $redirecturl;

        return $this;
    }

    /**
     * Get redirecturl
     *
     * @return string
     */
    public function getRedirecturl()
    {
        return $this->redirecturl;
    }

    /**
     * Set vocation
     *
     * @param string $vocation
     *
     * @return DedeAddonshop
     */
    public function setVocation($vocation)
    {
        $this->vocation = $vocation;

        return $this;
    }

    /**
     * Get vocation
     *
     * @return string
     */
    public function getVocation()
    {
        return $this->vocation;
    }

    /**
     * Set infotype
     *
     * @param string $infotype
     *
     * @return DedeAddonshop
     */
    public function setInfotype($infotype)
    {
        $this->infotype = $infotype;

        return $this;
    }

    /**
     * Get infotype
     *
     * @return string
     */
    public function getInfotype()
    {
        return $this->infotype;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeAddonshop
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return integer
     */
    public function getUptime()
    {
        return $this->uptime;
    }
}

