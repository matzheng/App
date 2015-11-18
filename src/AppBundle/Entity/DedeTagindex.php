<?php

namespace AppBundle\Entity;

/**
 * DedeTagindex
 */
class DedeTagindex
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tag = '';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var integer
     */
    private $count = '0';

    /**
     * @var integer
     */
    private $total = '0';

    /**
     * @var integer
     */
    private $weekcc = '0';

    /**
     * @var integer
     */
    private $monthcc = '0';

    /**
     * @var integer
     */
    private $weekup = '0';

    /**
     * @var integer
     */
    private $monthup = '0';

    /**
     * @var integer
     */
    private $addtime = '0';


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
     * Set tag
     *
     * @param string $tag
     *
     * @return DedeTagindex
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeTagindex
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
     * Set count
     *
     * @param integer $count
     *
     * @return DedeTagindex
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return DedeTagindex
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set weekcc
     *
     * @param integer $weekcc
     *
     * @return DedeTagindex
     */
    public function setWeekcc($weekcc)
    {
        $this->weekcc = $weekcc;

        return $this;
    }

    /**
     * Get weekcc
     *
     * @return integer
     */
    public function getWeekcc()
    {
        return $this->weekcc;
    }

    /**
     * Set monthcc
     *
     * @param integer $monthcc
     *
     * @return DedeTagindex
     */
    public function setMonthcc($monthcc)
    {
        $this->monthcc = $monthcc;

        return $this;
    }

    /**
     * Get monthcc
     *
     * @return integer
     */
    public function getMonthcc()
    {
        return $this->monthcc;
    }

    /**
     * Set weekup
     *
     * @param integer $weekup
     *
     * @return DedeTagindex
     */
    public function setWeekup($weekup)
    {
        $this->weekup = $weekup;

        return $this;
    }

    /**
     * Get weekup
     *
     * @return integer
     */
    public function getWeekup()
    {
        return $this->weekup;
    }

    /**
     * Set monthup
     *
     * @param integer $monthup
     *
     * @return DedeTagindex
     */
    public function setMonthup($monthup)
    {
        $this->monthup = $monthup;

        return $this;
    }

    /**
     * Get monthup
     *
     * @return integer
     */
    public function getMonthup()
    {
        return $this->monthup;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return DedeTagindex
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }
}

