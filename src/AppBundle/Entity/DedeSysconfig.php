<?php

namespace AppBundle\Entity;

/**
 * DedeSysconfig
 */
class DedeSysconfig
{
    /**
     * @var string
     */
    private $varname = '';

    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var string
     */
    private $info = '';

    /**
     * @var integer
     */
    private $groupid = '1';

    /**
     * @var string
     */
    private $type = 'string';

    /**
     * @var string
     */
    private $value;


    /**
     * Get varname
     *
     * @return string
     */
    public function getVarname()
    {
        return $this->varname;
    }

    /**
     * Set aid
     *
     * @param integer $aid
     *
     * @return DedeSysconfig
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
     * Set info
     *
     * @param string $info
     *
     * @return DedeSysconfig
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     *
     * @return DedeSysconfig
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return DedeSysconfig
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

    /**
     * Set value
     *
     * @param string $value
     *
     * @return DedeSysconfig
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}

