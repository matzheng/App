<?php

namespace AppBundle\Entity;

/**
 * DedeMoneycardType
 */
class DedeMoneycardType
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $num = '500';

    /**
     * @var integer
     */
    private $money = '50';

    /**
     * @var string
     */
    private $pname = '';


    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set num
     *
     * @param integer $num
     *
     * @return DedeMoneycardType
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

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return DedeMoneycardType
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
     * Set pname
     *
     * @param string $pname
     *
     * @return DedeMoneycardType
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
}

