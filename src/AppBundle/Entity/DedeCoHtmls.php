<?php

namespace AppBundle\Entity;

/**
 * DedeCoHtmls
 */
class DedeCoHtmls
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $nid = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $litpic = '';

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var integer
     */
    private $dtime = '0';

    /**
     * @var boolean
     */
    private $isdown = '0';

    /**
     * @var boolean
     */
    private $isexport = '0';

    /**
     * @var string
     */
    private $result;


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
     * Set nid
     *
     * @param integer $nid
     *
     * @return DedeCoHtmls
     */
    public function setNid($nid)
    {
        $this->nid = $nid;

        return $this;
    }

    /**
     * Get nid
     *
     * @return integer
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeCoHtmls
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return DedeCoHtmls
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
     * Set litpic
     *
     * @param string $litpic
     *
     * @return DedeCoHtmls
     */
    public function setLitpic($litpic)
    {
        $this->litpic = $litpic;

        return $this;
    }

    /**
     * Get litpic
     *
     * @return string
     */
    public function getLitpic()
    {
        return $this->litpic;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return DedeCoHtmls
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set dtime
     *
     * @param integer $dtime
     *
     * @return DedeCoHtmls
     */
    public function setDtime($dtime)
    {
        $this->dtime = $dtime;

        return $this;
    }

    /**
     * Get dtime
     *
     * @return integer
     */
    public function getDtime()
    {
        return $this->dtime;
    }

    /**
     * Set isdown
     *
     * @param boolean $isdown
     *
     * @return DedeCoHtmls
     */
    public function setIsdown($isdown)
    {
        $this->isdown = $isdown;

        return $this;
    }

    /**
     * Get isdown
     *
     * @return boolean
     */
    public function getIsdown()
    {
        return $this->isdown;
    }

    /**
     * Set isexport
     *
     * @param boolean $isexport
     *
     * @return DedeCoHtmls
     */
    public function setIsexport($isexport)
    {
        $this->isexport = $isexport;

        return $this;
    }

    /**
     * Get isexport
     *
     * @return boolean
     */
    public function getIsexport()
    {
        return $this->isexport;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return DedeCoHtmls
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }
}

