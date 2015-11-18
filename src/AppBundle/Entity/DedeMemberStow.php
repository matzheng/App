<?php

namespace AppBundle\Entity;

/**
 * DedeMemberStow
 */
class DedeMemberStow
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var integer
     */
    private $addtime = '0';

    /**
     * @var string
     */
    private $type;


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
     * @return DedeMemberStow
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
     * Set aid
     *
     * @param integer $aid
     *
     * @return DedeMemberStow
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return DedeMemberStow
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return DedeMemberStow
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return DedeMemberStow
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

