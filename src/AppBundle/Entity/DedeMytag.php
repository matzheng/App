<?php

namespace AppBundle\Entity;

/**
 * DedeMytag
 */
class DedeMytag
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $tagname = '';

    /**
     * @var integer
     */
    private $timeset = '0';

    /**
     * @var integer
     */
    private $starttime = '0';

    /**
     * @var integer
     */
    private $endtime = '0';

    /**
     * @var string
     */
    private $normbody;

    /**
     * @var string
     */
    private $expbody;


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
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeMytag
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
     * Set tagname
     *
     * @param string $tagname
     *
     * @return DedeMytag
     */
    public function setTagname($tagname)
    {
        $this->tagname = $tagname;

        return $this;
    }

    /**
     * Get tagname
     *
     * @return string
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * Set timeset
     *
     * @param integer $timeset
     *
     * @return DedeMytag
     */
    public function setTimeset($timeset)
    {
        $this->timeset = $timeset;

        return $this;
    }

    /**
     * Get timeset
     *
     * @return integer
     */
    public function getTimeset()
    {
        return $this->timeset;
    }

    /**
     * Set starttime
     *
     * @param integer $starttime
     *
     * @return DedeMytag
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param integer $endtime
     *
     * @return DedeMytag
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return integer
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set normbody
     *
     * @param string $normbody
     *
     * @return DedeMytag
     */
    public function setNormbody($normbody)
    {
        $this->normbody = $normbody;

        return $this;
    }

    /**
     * Get normbody
     *
     * @return string
     */
    public function getNormbody()
    {
        return $this->normbody;
    }

    /**
     * Set expbody
     *
     * @param string $expbody
     *
     * @return DedeMytag
     */
    public function setExpbody($expbody)
    {
        $this->expbody = $expbody;

        return $this;
    }

    /**
     * Get expbody
     *
     * @return string
     */
    public function getExpbody()
    {
        return $this->expbody;
    }
}

