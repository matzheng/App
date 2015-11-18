<?php

namespace AppBundle\Entity;

/**
 * DedeScores
 */
class DedeScores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titles;

    /**
     * @var integer
     */
    private $icon = '0';

    /**
     * @var integer
     */
    private $integral = '0';

    /**
     * @var boolean
     */
    private $isdefault = '0';


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
     * Set titles
     *
     * @param string $titles
     *
     * @return DedeScores
     */
    public function setTitles($titles)
    {
        $this->titles = $titles;

        return $this;
    }

    /**
     * Get titles
     *
     * @return string
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * Set icon
     *
     * @param integer $icon
     *
     * @return DedeScores
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return integer
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set integral
     *
     * @param integer $integral
     *
     * @return DedeScores
     */
    public function setIntegral($integral)
    {
        $this->integral = $integral;

        return $this;
    }

    /**
     * Get integral
     *
     * @return integer
     */
    public function getIntegral()
    {
        return $this->integral;
    }

    /**
     * Set isdefault
     *
     * @param boolean $isdefault
     *
     * @return DedeScores
     */
    public function setIsdefault($isdefault)
    {
        $this->isdefault = $isdefault;

        return $this;
    }

    /**
     * Get isdefault
     *
     * @return boolean
     */
    public function getIsdefault()
    {
        return $this->isdefault;
    }
}

