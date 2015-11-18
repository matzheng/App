<?php

namespace AppBundle\Entity;

/**
 * DedeAddoninfos
 */
class DedeAddoninfos
{
    /**
     * @var integer
     */
    private $aid = '0';

    /**
     * @var integer
     */
    private $typeid = '0';

    /**
     * @var integer
     */
    private $channel = '0';

    /**
     * @var integer
     */
    private $arcrank = '0';

    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $click = '0';

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
    private $userip = ' ';

    /**
     * @var integer
     */
    private $senddate = '0';

    /**
     * @var array
     */
    private $flag;

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
    private $nativeplace = '0';

    /**
     * @var string
     */
    private $infotype = '0';

    /**
     * @var string
     */
    private $body;

    /**
     * @var integer
     */
    private $endtime = '0';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $address = '';

    /**
     * @var string
     */
    private $linkman = '';


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
     * @return DedeAddoninfos
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
     * Set channel
     *
     * @param integer $channel
     *
     * @return DedeAddoninfos
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
     * @return DedeAddoninfos
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
     * Set mid
     *
     * @param integer $mid
     *
     * @return DedeAddoninfos
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
     * Set click
     *
     * @param integer $click
     *
     * @return DedeAddoninfos
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
     * Set title
     *
     * @param string $title
     *
     * @return DedeAddoninfos
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
     * @return DedeAddoninfos
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
     * Set userip
     *
     * @param string $userip
     *
     * @return DedeAddoninfos
     */
    public function setUserip($userip)
    {
        $this->userip = $userip;

        return $this;
    }

    /**
     * Get userip
     *
     * @return string
     */
    public function getUserip()
    {
        return $this->userip;
    }

    /**
     * Set senddate
     *
     * @param integer $senddate
     *
     * @return DedeAddoninfos
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
     * Set flag
     *
     * @param array $flag
     *
     * @return DedeAddoninfos
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
     * Set lastpost
     *
     * @param integer $lastpost
     *
     * @return DedeAddoninfos
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
     * @return DedeAddoninfos
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
     * @return DedeAddoninfos
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
     * @return DedeAddoninfos
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
     * Set nativeplace
     *
     * @param integer $nativeplace
     *
     * @return DedeAddoninfos
     */
    public function setNativeplace($nativeplace)
    {
        $this->nativeplace = $nativeplace;

        return $this;
    }

    /**
     * Get nativeplace
     *
     * @return integer
     */
    public function getNativeplace()
    {
        return $this->nativeplace;
    }

    /**
     * Set infotype
     *
     * @param string $infotype
     *
     * @return DedeAddoninfos
     */
    public function setInfotype($infotype)
    {
        $this->infotype = $infotype;

        return $this;
    }

    /**
     * Get infotype
     *
     * @return string
     */
    public function getInfotype()
    {
        return $this->infotype;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return DedeAddoninfos
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set endtime
     *
     * @param integer $endtime
     *
     * @return DedeAddoninfos
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
     * Set tel
     *
     * @param string $tel
     *
     * @return DedeAddoninfos
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return DedeAddoninfos
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return DedeAddoninfos
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set linkman
     *
     * @param string $linkman
     *
     * @return DedeAddoninfos
     */
    public function setLinkman($linkman)
    {
        $this->linkman = $linkman;

        return $this;
    }

    /**
     * Get linkman
     *
     * @return string
     */
    public function getLinkman()
    {
        return $this->linkman;
    }
}

