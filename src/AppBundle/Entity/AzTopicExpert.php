<?php

namespace AppBundle\Entity;

/**
 * AzTopicExpert
 */
class AzTopicExpert
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $mid;

    /**
     * @var integer
     */
    private $addtime;


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
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzTopicExpert
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
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return AzTopicExpert
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

