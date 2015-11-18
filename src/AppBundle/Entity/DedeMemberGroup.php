<?php

namespace AppBundle\Entity;

/**
 * DedeMemberGroup
 */
class DedeMemberGroup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $groupname;

    /**
     * @var integer
     */
    private $mid;


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
     * Set groupname
     *
     * @param string $groupname
     *
     * @return DedeMemberGroup
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeMemberGroup
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
}

