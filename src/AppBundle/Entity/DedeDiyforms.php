<?php

namespace AppBundle\Entity;

/**
 * DedeDiyforms
 */
class DedeDiyforms
{
    /**
     * @var integer
     */
    private $diyid;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $posttemplate;

    /**
     * @var string
     */
    private $viewtemplate;

    /**
     * @var string
     */
    private $listtemplate;

    /**
     * @var string
     */
    private $table = '';

    /**
     * @var string
     */
    private $info;

    /**
     * @var boolean
     */
    private $public = '1';


    /**
     * Get diyid
     *
     * @return integer
     */
    public function getDiyid()
    {
        return $this->diyid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DedeDiyforms
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
     * Set posttemplate
     *
     * @param string $posttemplate
     *
     * @return DedeDiyforms
     */
    public function setPosttemplate($posttemplate)
    {
        $this->posttemplate = $posttemplate;

        return $this;
    }

    /**
     * Get posttemplate
     *
     * @return string
     */
    public function getPosttemplate()
    {
        return $this->posttemplate;
    }

    /**
     * Set viewtemplate
     *
     * @param string $viewtemplate
     *
     * @return DedeDiyforms
     */
    public function setViewtemplate($viewtemplate)
    {
        $this->viewtemplate = $viewtemplate;

        return $this;
    }

    /**
     * Get viewtemplate
     *
     * @return string
     */
    public function getViewtemplate()
    {
        return $this->viewtemplate;
    }

    /**
     * Set listtemplate
     *
     * @param string $listtemplate
     *
     * @return DedeDiyforms
     */
    public function setListtemplate($listtemplate)
    {
        $this->listtemplate = $listtemplate;

        return $this;
    }

    /**
     * Get listtemplate
     *
     * @return string
     */
    public function getListtemplate()
    {
        return $this->listtemplate;
    }

    /**
     * Set table
     *
     * @param string $table
     *
     * @return DedeDiyforms
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get table
     *
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return DedeDiyforms
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
     * Set public
     *
     * @param boolean $public
     *
     * @return DedeDiyforms
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean
     */
    public function getPublic()
    {
        return $this->public;
    }
}

