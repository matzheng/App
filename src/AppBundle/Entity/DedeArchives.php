<?php

namespace AppBundle\Entity;

/**
 * DedeArchives
 */
class DedeArchives
{
    /**
     * @var integer
     */
    private $id = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var string
     */
    private $typeid2 = '0';

    /**
     * @var integer
     */
    private $sortrank = '0';

    /**
     * @var array
     */
    private $flag;

    /**
     * @var integer
     */
    private $ismake = '0';

    /**
     * @var integer
     */
    private $channel = '1';

    /**
     * @var integer
     */
    private $arcrank = '0';

    /**
     * @var integer
     */
    private $click = '0';

    /**
     * @var integer
     */
    private $money = '0';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $shorttitle = '';

    /**
     * @var string
     */
    private $color = '';

    /**
     * @var string
     */
    private $writer = '';

    /**
     * @var string
     */
    private $source = '';

    /**
     * @var string
     */
    private $litpic = '';

    /**
     * @var integer
     */
    private $pubdate = '0';

    /**
     * @var integer
     */
    private $senddate = '0';

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var string
     */
    private $keywords = '';

    /**
     * @var integer
     */
    private $lastpost = '0';

    /**
     * @var integer
     */
    private $scores = '0';

    /**
     * @var integer
     */
    private $goodpost = '0';

    /**
     * @var integer
     */
    private $badpost = '0';

    /**
     * @var integer
     */
    private $voteid;

    /**
     * @var boolean
     */
    private $notpost = '0';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var string
     */
    private $filename = '';

    /**
     * @var integer
     */
    private $dutyadmin = '0';

    /**
     * @var integer
     */
    private $tackid = '0';

    /**
     * @var integer
     */
    private $mtype = '0';

    /**
     * @var integer
     */
    private $weight = '0';


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
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return DedeArchives
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
     * Set typeid2
     *
     * @param string $typeid2
     *
     * @return DedeArchives
     */
    public function setTypeid2($typeid2)
    {
        $this->typeid2 = $typeid2;

        return $this;
    }

    /**
     * Get typeid2
     *
     * @return string
     */
    public function getTypeid2()
    {
        return $this->typeid2;
    }

    /**
     * Set sortrank
     *
     * @param integer $sortrank
     *
     * @return DedeArchives
     */
    public function setSortrank($sortrank)
    {
        $this->sortrank = $sortrank;

        return $this;
    }

    /**
     * Get sortrank
     *
     * @return integer
     */
    public function getSortrank()
    {
        return $this->sortrank;
    }

    /**
     * Set flag
     *
     * @param array $flag
     *
     * @return DedeArchives
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return array
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set ismake
     *
     * @param integer $ismake
     *
     * @return DedeArchives
     */
    public function setIsmake($ismake)
    {
        $this->ismake = $ismake;

        return $this;
    }

    /**
     * Get ismake
     *
     * @return integer
     */
    public function getIsmake()
    {
        return $this->ismake;
    }

    /**
     * Set channel
     *
     * @param integer $channel
     *
     * @return DedeArchives
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return integer
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set arcrank
     *
     * @param integer $arcrank
     *
     * @return DedeArchives
     */
    public function setArcrank($arcrank)
    {
        $this->arcrank = $arcrank;

        return $this;
    }

    /**
     * Get arcrank
     *
     * @return integer
     */
    public function getArcrank()
    {
        return $this->arcrank;
    }

    /**
     * Set click
     *
     * @param integer $click
     *
     * @return DedeArchives
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
     * Set money
     *
     * @param integer $money
     *
     * @return DedeArchives
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return DedeArchives
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
     * Set shorttitle
     *
     * @param string $shorttitle
     *
     * @return DedeArchives
     */
    public function setShorttitle($shorttitle)
    {
        $this->shorttitle = $shorttitle;

        return $this;
    }

    /**
     * Get shorttitle
     *
     * @return string
     */
    public function getShorttitle()
    {
        return $this->shorttitle;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return DedeArchives
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set writer
     *
     * @param string $writer
     *
     * @return DedeArchives
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
     * Set source
     *
     * @param string $source
     *
     * @return DedeArchives
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set litpic
     *
     * @param string $litpic
     *
     * @return DedeArchives
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
     * Set pubdate
     *
     * @param integer $pubdate
     *
     * @return DedeArchives
     */
    public function setPubdate($pubdate)
    {
        $this->pubdate = $pubdate;

        return $this;
    }

    /**
     * Get pubdate
     *
     * @return integer
     */
    public function getPubdate()
    {
        return $this->pubdate;
    }

    /**
     * Set senddate
     *
     * @param integer $senddate
     *
     * @return DedeArchives
     */
    public function setSenddate($senddate)
    {
        $this->senddate = $senddate;

        return $this;
    }

    /**
     * Get senddate
     *
     * @return integer
     */
    public function getSenddate()
    {
        return $this->senddate;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeArchives
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return DedeArchives
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
     * Set lastpost
     *
     * @param integer $lastpost
     *
     * @return DedeArchives
     */
    public function setLastpost($lastpost)
    {
        $this->lastpost = $lastpost;

        return $this;
    }

    /**
     * Get lastpost
     *
     * @return integer
     */
    public function getLastpost()
    {
        return $this->lastpost;
    }

    /**
     * Set scores
     *
     * @param integer $scores
     *
     * @return DedeArchives
     */
    public function setScores($scores)
    {
        $this->scores = $scores;

        return $this;
    }

    /**
     * Get scores
     *
     * @return integer
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Set goodpost
     *
     * @param integer $goodpost
     *
     * @return DedeArchives
     */
    public function setGoodpost($goodpost)
    {
        $this->goodpost = $goodpost;

        return $this;
    }

    /**
     * Get goodpost
     *
     * @return integer
     */
    public function getGoodpost()
    {
        return $this->goodpost;
    }

    /**
     * Set badpost
     *
     * @param integer $badpost
     *
     * @return DedeArchives
     */
    public function setBadpost($badpost)
    {
        $this->badpost = $badpost;

        return $this;
    }

    /**
     * Get badpost
     *
     * @return integer
     */
    public function getBadpost()
    {
        return $this->badpost;
    }

    /**
     * Set voteid
     *
     * @param integer $voteid
     *
     * @return DedeArchives
     */
    public function setVoteid($voteid)
    {
        $this->voteid = $voteid;

        return $this;
    }

    /**
     * Get voteid
     *
     * @return integer
     */
    public function getVoteid()
    {
        return $this->voteid;
    }

    /**
     * Set notpost
     *
     * @param boolean $notpost
     *
     * @return DedeArchives
     */
    public function setNotpost($notpost)
    {
        $this->notpost = $notpost;

        return $this;
    }

    /**
     * Get notpost
     *
     * @return boolean
     */
    public function getNotpost()
    {
        return $this->notpost;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DedeArchives
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

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return DedeArchives
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set dutyadmin
     *
     * @param integer $dutyadmin
     *
     * @return DedeArchives
     */
    public function setDutyadmin($dutyadmin)
    {
        $this->dutyadmin = $dutyadmin;

        return $this;
    }

    /**
     * Get dutyadmin
     *
     * @return integer
     */
    public function getDutyadmin()
    {
        return $this->dutyadmin;
    }

    /**
     * Set tackid
     *
     * @param integer $tackid
     *
     * @return DedeArchives
     */
    public function setTackid($tackid)
    {
        $this->tackid = $tackid;

        return $this;
    }

    /**
     * Get tackid
     *
     * @return integer
     */
    public function getTackid()
    {
        return $this->tackid;
    }

    /**
     * Set mtype
     *
     * @param integer $mtype
     *
     * @return DedeArchives
     */
    public function setMtype($mtype)
    {
        $this->mtype = $mtype;

        return $this;
    }

    /**
     * Get mtype
     *
     * @return integer
     */
    public function getMtype()
    {
        return $this->mtype;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return DedeArchives
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

