<?php

namespace AppBundle\Entity;

/**
 * AzAdmin
 */
class AzAdmin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $uname = '';

    /**
     * @var string
     */
    private $pwd = '';


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
     * Set uname
     *
     * @param string $uname
     *
     * @return AzAdmin
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return AzAdmin
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }
}

