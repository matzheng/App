<?php

namespace AppBundle\Entity;

/**
 * DedeHomepageset
 */
class DedeHomepageset
{
    /**
     * @var string
     */
    private $templet = '';

    /**
     * @var string
     */
    private $position = '';

    /**
     * @var boolean
     */
    private $showmod = '1';


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
     * Set position
     *
     * @param string $position
     *
     * @return DedeHomepageset
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set showmod
     *
     * @param boolean $showmod
     *
     * @return DedeHomepageset
     */
    public function setShowmod($showmod)
    {
        $this->showmod = $showmod;

        return $this;
    }

    /**
     * Get showmod
     *
     * @return boolean
     */
    public function getShowmod()
    {
        return $this->showmod;
    }
}

