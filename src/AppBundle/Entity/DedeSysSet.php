<?php

namespace AppBundle\Entity;

/**
 * DedeSysSet
 */
class DedeSysSet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sname = '';

    /**
     * @var string
     */
    private $items;


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
     * Set sname
     *
     * @param string $sname
     *
     * @return DedeSysSet
     */
    public function setSname($sname)
    {
        $this->sname = $sname;

        return $this;
    }

    /**
     * Get sname
     *
     * @return string
     */
    public function getSname()
    {
        return $this->sname;
    }

    /**
     * Set items
     *
     * @param string $items
     *
     * @return DedeSysSet
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return string
     */
    public function getItems()
    {
        return $this->items;
    }
}

