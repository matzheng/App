<?php

namespace AppBundle\Entity;

/**
 * DedeMoneycardRecord
 */
class DedeMoneycardRecord
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $ctid = '0';

    /**
     * @var string
     */
    private $cardid = '';

    /**
     * @var integer
     */
    private $uid = '0';

    /**
     * @var integer
     */
    private $isexp = '0';

    /**
     * @var integer
     */
    private $mtime = '0';

    /**
     * @var integer
     */
    private $utime = '0';

    /**
     * @var string
     */
    private $money = '0.00';

    /**
     * @var integer
     */
    private $num = '0';


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
     * Set ctid
     *
     * @param integer $ctid
     *
     * @return DedeMoneycardRecord
     */
    public function setCtid($ctid)
    {
        $this->ctid = $ctid;

        return $this;
    }

    /**
     * Get ctid
     *
     * @return integer
     */
    public function getCtid()
    {
        return $this->ctid;
    }

    /**
     * Set cardid
     *
     * @param string $cardid
     *
     * @return DedeMoneycardRecord
     */
    public function setCardid($cardid)
    {
        $this->cardid = $cardid;

        return $this;
    }

    /**
     * Get cardid
     *
     * @return string
     */
    public function getCardid()
    {
        return $this->cardid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return DedeMoneycardRecord
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set isexp
     *
     * @param integer $isexp
     *
     * @return DedeMoneycardRecord
     */
    public function setIsexp($isexp)
    {
        $this->isexp = $isexp;

        return $this;
    }

    /**
     * Get isexp
     *
     * @return integer
     */
    public function getIsexp()
    {
        return $this->isexp;
    }

    /**
     * Set mtime
     *
     * @param integer $mtime
     *
     * @return DedeMoneycardRecord
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
     * Set utime
     *
     * @param integer $utime
     *
     * @return DedeMoneycardRecord
     */
    public function setUtime($utime)
    {
        $this->utime = $utime;

        return $this;
    }

    /**
     * Get utime
     *
     * @return integer
     */
    public function getUtime()
    {
        return $this->utime;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return DedeMoneycardRecord
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
     * Set num
     *
     * @param integer $num
     *
     * @return DedeMoneycardRecord
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }
}

