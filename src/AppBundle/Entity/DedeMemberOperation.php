<?php

namespace AppBundle\Entity;

/**
 * DedeMemberOperation
 */
class DedeMemberOperation
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $buyid = '';

    /**
     * @var string
     */
    private $pname = '';

    /**
     * @var string
     */
    private $product = '';

    /**
     * @var string
     */
    private $money = '0.00';

    /**
     * @var integer
     */
    private $mtime = '0';

    /**
     * @var integer
     */
    private $pid = '0';

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $sta = '0';

    /**
     * @var string
     */
    private $oldinfo = '';


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
     * Set buyid
     *
     * @param string $buyid
     *
     * @return DedeMemberOperation
     */
    public function setBuyid($buyid)
    {
        $this->buyid = $buyid;

        return $this;
    }

    /**
     * Get buyid
     *
     * @return string
     */
    public function getBuyid()
    {
        return $this->buyid;
    }

    /**
     * Set pname
     *
     * @param string $pname
     *
     * @return DedeMemberOperation
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
     * Set product
     *
     * @param string $product
     *
     * @return DedeMemberOperation
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return DedeMemberOperation
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
     * Set mtime
     *
     * @param integer $mtime
     *
     * @return DedeMemberOperation
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;

        return $this;
    }

    /**
     * Get mtime
     *
     * @return integer
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     *
     * @return DedeMemberOperation
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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberOperation
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
     * Set sta
     *
     * @param integer $sta
     *
     * @return DedeMemberOperation
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
     * Set oldinfo
     *
     * @param string $oldinfo
     *
     * @return DedeMemberOperation
     */
    public function setOldinfo($oldinfo)
    {
        $this->oldinfo = $oldinfo;

        return $this;
    }

    /**
     * Get oldinfo
     *
     * @return string
     */
    public function getOldinfo()
    {
        return $this->oldinfo;
    }
}

