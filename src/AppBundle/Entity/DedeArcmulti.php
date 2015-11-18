<?php

namespace AppBundle\Entity;

/**
 * DedeArcmulti
 */
class DedeArcmulti
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tagid = '';

    /**
     * @var integer
     */
    private $uptime = '0';

    /**
     * @var string
     */
    private $innertext = '';

    /**
     * @var integer
     */
    private $pagesize = '0';

    /**
     * @var string
     */
    private $arcids;

    /**
     * @var string
     */
    private $ordersql;

    /**
     * @var string
     */
    private $addfieldssql;

    /**
     * @var string
     */
    private $addfieldssqljoin;

    /**
     * @var string
     */
    private $attstr;


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
     * Set tagid
     *
     * @param string $tagid
     *
     * @return DedeArcmulti
     */
    public function setTagid($tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return string
     */
    public function getTagid()
    {
        return $this->tagid;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeArcmulti
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

    /**
     * Set innertext
     *
     * @param string $innertext
     *
     * @return DedeArcmulti
     */
    public function setInnertext($innertext)
    {
        $this->innertext = $innertext;

        return $this;
    }

    /**
     * Get innertext
     *
     * @return string
     */
    public function getInnertext()
    {
        return $this->innertext;
    }

    /**
     * Set pagesize
     *
     * @param integer $pagesize
     *
     * @return DedeArcmulti
     */
    public function setPagesize($pagesize)
    {
        $this->pagesize = $pagesize;

        return $this;
    }

    /**
     * Get pagesize
     *
     * @return integer
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * Set arcids
     *
     * @param string $arcids
     *
     * @return DedeArcmulti
     */
    public function setArcids($arcids)
    {
        $this->arcids = $arcids;

        return $this;
    }

    /**
     * Get arcids
     *
     * @return string
     */
    public function getArcids()
    {
        return $this->arcids;
    }

    /**
     * Set ordersql
     *
     * @param string $ordersql
     *
     * @return DedeArcmulti
     */
    public function setOrdersql($ordersql)
    {
        $this->ordersql = $ordersql;

        return $this;
    }

    /**
     * Get ordersql
     *
     * @return string
     */
    public function getOrdersql()
    {
        return $this->ordersql;
    }

    /**
     * Set addfieldssql
     *
     * @param string $addfieldssql
     *
     * @return DedeArcmulti
     */
    public function setAddfieldssql($addfieldssql)
    {
        $this->addfieldssql = $addfieldssql;

        return $this;
    }

    /**
     * Get addfieldssql
     *
     * @return string
     */
    public function getAddfieldssql()
    {
        return $this->addfieldssql;
    }

    /**
     * Set addfieldssqljoin
     *
     * @param string $addfieldssqljoin
     *
     * @return DedeArcmulti
     */
    public function setAddfieldssqljoin($addfieldssqljoin)
    {
        $this->addfieldssqljoin = $addfieldssqljoin;

        return $this;
    }

    /**
     * Get addfieldssqljoin
     *
     * @return string
     */
    public function getAddfieldssqljoin()
    {
        return $this->addfieldssqljoin;
    }

    /**
     * Set attstr
     *
     * @param string $attstr
     *
     * @return DedeArcmulti
     */
    public function setAttstr($attstr)
    {
        $this->attstr = $attstr;

        return $this;
    }

    /**
     * Get attstr
     *
     * @return string
     */
    public function getAttstr()
    {
        return $this->attstr;
    }
}

