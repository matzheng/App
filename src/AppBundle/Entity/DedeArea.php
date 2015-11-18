<?php

namespace AppBundle\Entity;

/**
 * DedeArea
 */
class DedeArea
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var integer
     */
    private $reid = '0';

    /**
     * @var integer
     */
    private $disorder = '0';


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
     * Set name
     *
     * @param string $name
     *
     * @return DedeArea
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set reid
     *
     * @param integer $reid
     *
     * @return DedeArea
     */
    public function setReid($reid)
    {
        $this->reid = $reid;

        return $this;
    }

    /**
     * Get reid
     *
     * @return integer
     */
    public function getReid()
    {
        return $this->reid;
    }

    /**
     * Set disorder
     *
     * @param integer $disorder
     *
     * @return DedeArea
     */
    public function setDisorder($disorder)
    {
        $this->disorder = $disorder;

        return $this;
    }

    /**
     * Get disorder
     *
     * @return integer
     */
    public function getDisorder()
    {
        return $this->disorder;
    }
}

