<?php

namespace AppBundle\Entity;

/**
 * DedeAddonsoft
 */
class DedeAddonsoft
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
     * @var string
     */
    private $filetype = '';

    /**
     * @var string
     */
    private $language = '';

    /**
     * @var string
     */
    private $softtype = '';

    /**
     * @var string
     */
    private $accredit = '';

    /**
     * @var string
     */
    private $os = '';

    /**
     * @var integer
     */
    private $softrank = '0';

    /**
     * @var string
     */
    private $officialurl = '';

    /**
     * @var string
     */
    private $officialdemo = '';

    /**
     * @var string
     */
    private $softsize = '';

    /**
     * @var string
     */
    private $softlinks;

    /**
     * @var string
     */
    private $introduce;

    /**
     * @var integer
     */
    private $daccess = '0';

    /**
     * @var integer
     */
    private $needmoney = '0';

    /**
     * @var string
     */
    private $templet = '';

    /**
     * @var string
     */
    private $userip = '';

    /**
     * @var string
     */
    private $redirecturl = '';


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
     * @return DedeAddonsoft
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
     * Set filetype
     *
     * @param string $filetype
     *
     * @return DedeAddonsoft
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * Get filetype
     *
     * @return string
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return DedeAddonsoft
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set softtype
     *
     * @param string $softtype
     *
     * @return DedeAddonsoft
     */
    public function setSofttype($softtype)
    {
        $this->softtype = $softtype;

        return $this;
    }

    /**
     * Get softtype
     *
     * @return string
     */
    public function getSofttype()
    {
        return $this->softtype;
    }

    /**
     * Set accredit
     *
     * @param string $accredit
     *
     * @return DedeAddonsoft
     */
    public function setAccredit($accredit)
    {
        $this->accredit = $accredit;

        return $this;
    }

    /**
     * Get accredit
     *
     * @return string
     */
    public function getAccredit()
    {
        return $this->accredit;
    }

    /**
     * Set os
     *
     * @param string $os
     *
     * @return DedeAddonsoft
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set softrank
     *
     * @param integer $softrank
     *
     * @return DedeAddonsoft
     */
    public function setSoftrank($softrank)
    {
        $this->softrank = $softrank;

        return $this;
    }

    /**
     * Get softrank
     *
     * @return integer
     */
    public function getSoftrank()
    {
        return $this->softrank;
    }

    /**
     * Set officialurl
     *
     * @param string $officialurl
     *
     * @return DedeAddonsoft
     */
    public function setOfficialurl($officialurl)
    {
        $this->officialurl = $officialurl;

        return $this;
    }

    /**
     * Get officialurl
     *
     * @return string
     */
    public function getOfficialurl()
    {
        return $this->officialurl;
    }

    /**
     * Set officialdemo
     *
     * @param string $officialdemo
     *
     * @return DedeAddonsoft
     */
    public function setOfficialdemo($officialdemo)
    {
        $this->officialdemo = $officialdemo;

        return $this;
    }

    /**
     * Get officialdemo
     *
     * @return string
     */
    public function getOfficialdemo()
    {
        return $this->officialdemo;
    }

    /**
     * Set softsize
     *
     * @param string $softsize
     *
     * @return DedeAddonsoft
     */
    public function setSoftsize($softsize)
    {
        $this->softsize = $softsize;

        return $this;
    }

    /**
     * Get softsize
     *
     * @return string
     */
    public function getSoftsize()
    {
        return $this->softsize;
    }

    /**
     * Set softlinks
     *
     * @param string $softlinks
     *
     * @return DedeAddonsoft
     */
    public function setSoftlinks($softlinks)
    {
        $this->softlinks = $softlinks;

        return $this;
    }

    /**
     * Get softlinks
     *
     * @return string
     */
    public function getSoftlinks()
    {
        return $this->softlinks;
    }

    /**
     * Set introduce
     *
     * @param string $introduce
     *
     * @return DedeAddonsoft
     */
    public function setIntroduce($introduce)
    {
        $this->introduce = $introduce;

        return $this;
    }

    /**
     * Get introduce
     *
     * @return string
     */
    public function getIntroduce()
    {
        return $this->introduce;
    }

    /**
     * Set daccess
     *
     * @param integer $daccess
     *
     * @return DedeAddonsoft
     */
    public function setDaccess($daccess)
    {
        $this->daccess = $daccess;

        return $this;
    }

    /**
     * Get daccess
     *
     * @return integer
     */
    public function getDaccess()
    {
        return $this->daccess;
    }

    /**
     * Set needmoney
     *
     * @param integer $needmoney
     *
     * @return DedeAddonsoft
     */
    public function setNeedmoney($needmoney)
    {
        $this->needmoney = $needmoney;

        return $this;
    }

    /**
     * Get needmoney
     *
     * @return integer
     */
    public function getNeedmoney()
    {
        return $this->needmoney;
    }

    /**
     * Set templet
     *
     * @param string $templet
     *
     * @return DedeAddonsoft
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
     * Set userip
     *
     * @param string $userip
     *
     * @return DedeAddonsoft
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
     * Set redirecturl
     *
     * @param string $redirecturl
     *
     * @return DedeAddonsoft
     */
    public function setRedirecturl($redirecturl)
    {
        $this->redirecturl = $redirecturl;

        return $this;
    }

    /**
     * Get redirecturl
     *
     * @return string
     */
    public function getRedirecturl()
    {
        return $this->redirecturl;
    }
}

