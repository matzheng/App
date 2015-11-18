<?php

namespace AppBundle\Entity;

/**
 * DedeArcatt
 */
class DedeArcatt
{
    /**
     * @var string
     */
    private $att = '';

    /**
     * @var integer
     */
    private $sortid = '0';

    /**
     * @var string
     */
    private $attname = '';


    /**
     * Get att
     *
     * @return string
     */
    public function getAtt()
    {
        return $this->att;
    }

    /**
     * Set sortid
     *
     * @param integer $sortid
     *
     * @return DedeArcatt
     */
    public function setSortid($sortid)
    {
        $this->sortid = $sortid;

        return $this;
    }

    /**
     * Get sortid
     *
     * @return integer
     */
    public function getSortid()
    {
        return $this->sortid;
    }

    /**
     * Set attname
     *
     * @param string $attname
     *
     * @return DedeArcatt
     */
    public function setAttname($attname)
    {
        $this->attname = $attname;

        return $this;
    }

    /**
     * Get attname
     *
     * @return string
     */
    public function getAttname()
    {
        return $this->attname;
    }
}

