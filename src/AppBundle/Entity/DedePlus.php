<?php

namespace AppBundle\Entity;

/**
 * DedePlus
 */
class DedePlus
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $plusname = '';

    /**
     * @var string
     */
    private $menustring = '';

    /**
     * @var string
     */
    private $mainurl = '';

    /**
     * @var string
     */
    private $writer = '';

    /**
     * @var integer
     */
    private $isshow = '1';

    /**
     * @var string
     */
    private $filelist;


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
     * Set plusname
     *
     * @param string $plusname
     *
     * @return DedePlus
     */
    public function setPlusname($plusname)
    {
        $this->plusname = $plusname;

        return $this;
    }

    /**
     * Get plusname
     *
     * @return string
     */
    public function getPlusname()
    {
        return $this->plusname;
    }

    /**
     * Set menustring
     *
     * @param string $menustring
     *
     * @return DedePlus
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

    /**
     * Set mainurl
     *
     * @param string $mainurl
     *
     * @return DedePlus
     */
    public function setMainurl($mainurl)
    {
        $this->mainurl = $mainurl;

        return $this;
    }

    /**
     * Get mainurl
     *
     * @return string
     */
    public function getMainurl()
    {
        return $this->mainurl;
    }

    /**
     * Set writer
     *
     * @param string $writer
     *
     * @return DedePlus
     */
    public function setWriter($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    /**
     * Get writer
     *
     * @return string
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Set isshow
     *
     * @param integer $isshow
     *
     * @return DedePlus
     */
    public function setIsshow($isshow)
    {
        $this->isshow = $isshow;

        return $this;
    }

    /**
     * Get isshow
     *
     * @return integer
     */
    public function getIsshow()
    {
        return $this->isshow;
    }

    /**
     * Set filelist
     *
     * @param string $filelist
     *
     * @return DedePlus
     */
    public function setFilelist($filelist)
    {
        $this->filelist = $filelist;

        return $this;
    }

    /**
     * Get filelist
     *
     * @return string
     */
    public function getFilelist()
    {
        return $this->filelist;
    }
}

