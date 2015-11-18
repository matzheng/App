<?php

namespace AppBundle\Entity;

/**
 * DedeFreelist
 */
class DedeFreelist
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $namerule = '';

    /**
     * @var string
     */
    private $listdir = '';

    /**
     * @var string
     */
    private $defaultpage = '';

    /**
     * @var integer
     */
    private $nodefault = '0';

    /**
     * @var string
     */
    private $templet = '';

    /**
     * @var integer
     */
    private $edtime = '0';

    /**
     * @var integer
     */
    private $maxpage = '100';

    /**
     * @var integer
     */
    private $click = '1';

    /**
     * @var string
     */
    private $listtag;

    /**
     * @var string
     */
    private $keywords = '';

    /**
     * @var string
     */
    private $description = '';


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
     * @return DedeFreelist
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
     * Set namerule
     *
     * @param string $namerule
     *
     * @return DedeFreelist
     */
    public function setNamerule($namerule)
    {
        $this->namerule = $namerule;

        return $this;
    }

    /**
     * Get namerule
     *
     * @return string
     */
    public function getNamerule()
    {
        return $this->namerule;
    }

    /**
     * Set listdir
     *
     * @param string $listdir
     *
     * @return DedeFreelist
     */
    public function setListdir($listdir)
    {
        $this->listdir = $listdir;

        return $this;
    }

    /**
     * Get listdir
     *
     * @return string
     */
    public function getListdir()
    {
        return $this->listdir;
    }

    /**
     * Set defaultpage
     *
     * @param string $defaultpage
     *
     * @return DedeFreelist
     */
    public function setDefaultpage($defaultpage)
    {
        $this->defaultpage = $defaultpage;

        return $this;
    }

    /**
     * Get defaultpage
     *
     * @return string
     */
    public function getDefaultpage()
    {
        return $this->defaultpage;
    }

    /**
     * Set nodefault
     *
     * @param integer $nodefault
     *
     * @return DedeFreelist
     */
    public function setNodefault($nodefault)
    {
        $this->nodefault = $nodefault;

        return $this;
    }

    /**
     * Get nodefault
     *
     * @return integer
     */
    public function getNodefault()
    {
        return $this->nodefault;
    }

    /**
     * Set templet
     *
     * @param string $templet
     *
     * @return DedeFreelist
     */
    public function setTemplet($templet)
    {
        $this->templet = $templet;

        return $this;
    }

    /**
     * Get templet
     *
     * @return string
     */
    public function getTemplet()
    {
        return $this->templet;
    }

    /**
     * Set edtime
     *
     * @param integer $edtime
     *
     * @return DedeFreelist
     */
    public function setEdtime($edtime)
    {
        $this->edtime = $edtime;

        return $this;
    }

    /**
     * Get edtime
     *
     * @return integer
     */
    public function getEdtime()
    {
        return $this->edtime;
    }

    /**
     * Set maxpage
     *
     * @param integer $maxpage
     *
     * @return DedeFreelist
     */
    public function setMaxpage($maxpage)
    {
        $this->maxpage = $maxpage;

        return $this;
    }

    /**
     * Get maxpage
     *
     * @return integer
     */
    public function getMaxpage()
    {
        return $this->maxpage;
    }

    /**
     * Set click
     *
     * @param integer $click
     *
     * @return DedeFreelist
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Get click
     *
     * @return integer
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Set listtag
     *
     * @param string $listtag
     *
     * @return DedeFreelist
     */
    public function setListtag($listtag)
    {
        $this->listtag = $listtag;

        return $this;
    }

    /**
     * Get listtag
     *
     * @return string
     */
    public function getListtag()
    {
        return $this->listtag;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return DedeFreelist
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DedeFreelist
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

