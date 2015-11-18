<?php

namespace AppBundle\Entity;

/**
 * DedeArctype
 */
class DedeArctype
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $reid = '0';

    /**
     * @var integer
     */
    private $topid = '0';

    /**
     * @var integer
     */
    private $sortrank = '50';

    /**
     * @var string
     */
    private $typename = '';

    /**
     * @var string
     */
    private $typedir = '';

    /**
     * @var integer
     */
    private $isdefault = '0';

    /**
     * @var string
     */
    private $defaultname = 'index.html';

    /**
     * @var integer
     */
    private $issend = '0';

    /**
     * @var integer
     */
    private $channeltype = '1';

    /**
     * @var integer
     */
    private $maxpage = '-1';

    /**
     * @var integer
     */
    private $ispart = '0';

    /**
     * @var integer
     */
    private $corank = '0';

    /**
     * @var string
     */
    private $tempindex = '';

    /**
     * @var string
     */
    private $templist = '';

    /**
     * @var string
     */
    private $temparticle = '';

    /**
     * @var string
     */
    private $namerule = '';

    /**
     * @var string
     */
    private $namerule2 = '';

    /**
     * @var string
     */
    private $modname = '';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var string
     */
    private $keywords = '';

    /**
     * @var string
     */
    private $seotitle = '';

    /**
     * @var boolean
     */
    private $moresite = '0';

    /**
     * @var string
     */
    private $sitepath = '';

    /**
     * @var string
     */
    private $siteurl = '';

    /**
     * @var integer
     */
    private $ishidden = '0';

    /**
     * @var boolean
     */
    private $cross = '0';

    /**
     * @var string
     */
    private $crossid;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $smalltypes;


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
     * Set reid
     *
     * @param integer $reid
     *
     * @return DedeArctype
     */
    public function setReid($reid)
    {
        $this->reid = $reid;

        return $this;
    }

    /**
     * Get reid
     *
     * @return integer
     */
    public function getReid()
    {
        return $this->reid;
    }

    /**
     * Set topid
     *
     * @param integer $topid
     *
     * @return DedeArctype
     */
    public function setTopid($topid)
    {
        $this->topid = $topid;

        return $this;
    }

    /**
     * Get topid
     *
     * @return integer
     */
    public function getTopid()
    {
        return $this->topid;
    }

    /**
     * Set sortrank
     *
     * @param integer $sortrank
     *
     * @return DedeArctype
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
     * Set typename
     *
     * @param string $typename
     *
     * @return DedeArctype
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string
     */
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * Set typedir
     *
     * @param string $typedir
     *
     * @return DedeArctype
     */
    public function setTypedir($typedir)
    {
        $this->typedir = $typedir;

        return $this;
    }

    /**
     * Get typedir
     *
     * @return string
     */
    public function getTypedir()
    {
        return $this->typedir;
    }

    /**
     * Set isdefault
     *
     * @param integer $isdefault
     *
     * @return DedeArctype
     */
    public function setIsdefault($isdefault)
    {
        $this->isdefault = $isdefault;

        return $this;
    }

    /**
     * Get isdefault
     *
     * @return integer
     */
    public function getIsdefault()
    {
        return $this->isdefault;
    }

    /**
     * Set defaultname
     *
     * @param string $defaultname
     *
     * @return DedeArctype
     */
    public function setDefaultname($defaultname)
    {
        $this->defaultname = $defaultname;

        return $this;
    }

    /**
     * Get defaultname
     *
     * @return string
     */
    public function getDefaultname()
    {
        return $this->defaultname;
    }

    /**
     * Set issend
     *
     * @param integer $issend
     *
     * @return DedeArctype
     */
    public function setIssend($issend)
    {
        $this->issend = $issend;

        return $this;
    }

    /**
     * Get issend
     *
     * @return integer
     */
    public function getIssend()
    {
        return $this->issend;
    }

    /**
     * Set channeltype
     *
     * @param integer $channeltype
     *
     * @return DedeArctype
     */
    public function setChanneltype($channeltype)
    {
        $this->channeltype = $channeltype;

        return $this;
    }

    /**
     * Get channeltype
     *
     * @return integer
     */
    public function getChanneltype()
    {
        return $this->channeltype;
    }

    /**
     * Set maxpage
     *
     * @param integer $maxpage
     *
     * @return DedeArctype
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
     * Set ispart
     *
     * @param integer $ispart
     *
     * @return DedeArctype
     */
    public function setIspart($ispart)
    {
        $this->ispart = $ispart;

        return $this;
    }

    /**
     * Get ispart
     *
     * @return integer
     */
    public function getIspart()
    {
        return $this->ispart;
    }

    /**
     * Set corank
     *
     * @param integer $corank
     *
     * @return DedeArctype
     */
    public function setCorank($corank)
    {
        $this->corank = $corank;

        return $this;
    }

    /**
     * Get corank
     *
     * @return integer
     */
    public function getCorank()
    {
        return $this->corank;
    }

    /**
     * Set tempindex
     *
     * @param string $tempindex
     *
     * @return DedeArctype
     */
    public function setTempindex($tempindex)
    {
        $this->tempindex = $tempindex;

        return $this;
    }

    /**
     * Get tempindex
     *
     * @return string
     */
    public function getTempindex()
    {
        return $this->tempindex;
    }

    /**
     * Set templist
     *
     * @param string $templist
     *
     * @return DedeArctype
     */
    public function setTemplist($templist)
    {
        $this->templist = $templist;

        return $this;
    }

    /**
     * Get templist
     *
     * @return string
     */
    public function getTemplist()
    {
        return $this->templist;
    }

    /**
     * Set temparticle
     *
     * @param string $temparticle
     *
     * @return DedeArctype
     */
    public function setTemparticle($temparticle)
    {
        $this->temparticle = $temparticle;

        return $this;
    }

    /**
     * Get temparticle
     *
     * @return string
     */
    public function getTemparticle()
    {
        return $this->temparticle;
    }

    /**
     * Set namerule
     *
     * @param string $namerule
     *
     * @return DedeArctype
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
     * Set namerule2
     *
     * @param string $namerule2
     *
     * @return DedeArctype
     */
    public function setNamerule2($namerule2)
    {
        $this->namerule2 = $namerule2;

        return $this;
    }

    /**
     * Get namerule2
     *
     * @return string
     */
    public function getNamerule2()
    {
        return $this->namerule2;
    }

    /**
     * Set modname
     *
     * @param string $modname
     *
     * @return DedeArctype
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
     * Set description
     *
     * @param string $description
     *
     * @return DedeArctype
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return DedeArctype
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
     * Set seotitle
     *
     * @param string $seotitle
     *
     * @return DedeArctype
     */
    public function setSeotitle($seotitle)
    {
        $this->seotitle = $seotitle;

        return $this;
    }

    /**
     * Get seotitle
     *
     * @return string
     */
    public function getSeotitle()
    {
        return $this->seotitle;
    }

    /**
     * Set moresite
     *
     * @param boolean $moresite
     *
     * @return DedeArctype
     */
    public function setMoresite($moresite)
    {
        $this->moresite = $moresite;

        return $this;
    }

    /**
     * Get moresite
     *
     * @return boolean
     */
    public function getMoresite()
    {
        return $this->moresite;
    }

    /**
     * Set sitepath
     *
     * @param string $sitepath
     *
     * @return DedeArctype
     */
    public function setSitepath($sitepath)
    {
        $this->sitepath = $sitepath;

        return $this;
    }

    /**
     * Get sitepath
     *
     * @return string
     */
    public function getSitepath()
    {
        return $this->sitepath;
    }

    /**
     * Set siteurl
     *
     * @param string $siteurl
     *
     * @return DedeArctype
     */
    public function setSiteurl($siteurl)
    {
        $this->siteurl = $siteurl;

        return $this;
    }

    /**
     * Get siteurl
     *
     * @return string
     */
    public function getSiteurl()
    {
        return $this->siteurl;
    }

    /**
     * Set ishidden
     *
     * @param integer $ishidden
     *
     * @return DedeArctype
     */
    public function setIshidden($ishidden)
    {
        $this->ishidden = $ishidden;

        return $this;
    }

    /**
     * Get ishidden
     *
     * @return integer
     */
    public function getIshidden()
    {
        return $this->ishidden;
    }

    /**
     * Set cross
     *
     * @param boolean $cross
     *
     * @return DedeArctype
     */
    public function setCross($cross)
    {
        $this->cross = $cross;

        return $this;
    }

    /**
     * Get cross
     *
     * @return boolean
     */
    public function getCross()
    {
        return $this->cross;
    }

    /**
     * Set crossid
     *
     * @param string $crossid
     *
     * @return DedeArctype
     */
    public function setCrossid($crossid)
    {
        $this->crossid = $crossid;

        return $this;
    }

    /**
     * Get crossid
     *
     * @return string
     */
    public function getCrossid()
    {
        return $this->crossid;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return DedeArctype
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set smalltypes
     *
     * @param string $smalltypes
     *
     * @return DedeArctype
     */
    public function setSmalltypes($smalltypes)
    {
        $this->smalltypes = $smalltypes;

        return $this;
    }

    /**
     * Get smalltypes
     *
     * @return string
     */
    public function getSmalltypes()
    {
        return $this->smalltypes;
    }
}

