<?php

namespace AppBundle\Entity;

/**
 * DedeSysModule
 */
class DedeSysModule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hashcode = '';

    /**
     * @var string
     */
    private $modname = '';

    /**
     * @var string
     */
    private $indexname = '';

    /**
     * @var string
     */
    private $indexurl = '';

    /**
     * @var boolean
     */
    private $ismember = '1';

    /**
     * @var string
     */
    private $menustring;


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
     * Set hashcode
     *
     * @param string $hashcode
     *
     * @return DedeSysModule
     */
    public function setHashcode($hashcode)
    {
        $this->hashcode = $hashcode;

        return $this;
    }

    /**
     * Get hashcode
     *
     * @return string
     */
    public function getHashcode()
    {
        return $this->hashcode;
    }

    /**
     * Set modname
     *
     * @param string $modname
     *
     * @return DedeSysModule
     */
    public function setModname($modname)
    {
        $this->modname = $modname;

        return $this;
    }

    /**
     * Get modname
     *
     * @return string
     */
    public function getModname()
    {
        return $this->modname;
    }

    /**
     * Set indexname
     *
     * @param string $indexname
     *
     * @return DedeSysModule
     */
    public function setIndexname($indexname)
    {
        $this->indexname = $indexname;

        return $this;
    }

    /**
     * Get indexname
     *
     * @return string
     */
    public function getIndexname()
    {
        return $this->indexname;
    }

    /**
     * Set indexurl
     *
     * @param string $indexurl
     *
     * @return DedeSysModule
     */
    public function setIndexurl($indexurl)
    {
        $this->indexurl = $indexurl;

        return $this;
    }

    /**
     * Get indexurl
     *
     * @return string
     */
    public function getIndexurl()
    {
        return $this->indexurl;
    }

    /**
     * Set ismember
     *
     * @param boolean $ismember
     *
     * @return DedeSysModule
     */
    public function setIsmember($ismember)
    {
        $this->ismember = $ismember;

        return $this;
    }

    /**
     * Get ismember
     *
     * @return boolean
     */
    public function getIsmember()
    {
        return $this->ismember;
    }

    /**
     * Set menustring
     *
     * @param string $menustring
     *
     * @return DedeSysModule
     */
    public function setMenustring($menustring)
    {
        $this->menustring = $menustring;

        return $this;
    }

    /**
     * Get menustring
     *
     * @return string
     */
    public function getMenustring()
    {
        return $this->menustring;
    }
}

