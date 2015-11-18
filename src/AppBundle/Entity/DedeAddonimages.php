<?php

namespace AppBundle\Entity;

/**
 * DedeAddonimages
 */
class DedeAddonimages
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
    private $pagestyle = '1';

    /**
     * @var integer
     */
    private $maxwidth = '600';

    /**
     * @var string
     */
    private $imgurls;

    /**
     * @var integer
     */
    private $row = '0';

    /**
     * @var integer
     */
    private $col = '0';

    /**
     * @var integer
     */
    private $isrm = '0';

    /**
     * @var integer
     */
    private $ddmaxwidth = '200';

    /**
     * @var integer
     */
    private $pagepicnum = '12';

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
     * @var string
     */
    private $body;


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
     * @return DedeAddonimages
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
     * Set pagestyle
     *
     * @param integer $pagestyle
     *
     * @return DedeAddonimages
     */
    public function setPagestyle($pagestyle)
    {
        $this->pagestyle = $pagestyle;

        return $this;
    }

    /**
     * Get pagestyle
     *
     * @return integer
     */
    public function getPagestyle()
    {
        return $this->pagestyle;
    }

    /**
     * Set maxwidth
     *
     * @param integer $maxwidth
     *
     * @return DedeAddonimages
     */
    public function setMaxwidth($maxwidth)
    {
        $this->maxwidth = $maxwidth;

        return $this;
    }

    /**
     * Get maxwidth
     *
     * @return integer
     */
    public function getMaxwidth()
    {
        return $this->maxwidth;
    }

    /**
     * Set imgurls
     *
     * @param string $imgurls
     *
     * @return DedeAddonimages
     */
    public function setImgurls($imgurls)
    {
        $this->imgurls = $imgurls;

        return $this;
    }

    /**
     * Get imgurls
     *
     * @return string
     */
    public function getImgurls()
    {
        return $this->imgurls;
    }

    /**
     * Set row
     *
     * @param integer $row
     *
     * @return DedeAddonimages
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return integer
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set col
     *
     * @param integer $col
     *
     * @return DedeAddonimages
     */
    public function setCol($col)
    {
        $this->col = $col;

        return $this;
    }

    /**
     * Get col
     *
     * @return integer
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * Set isrm
     *
     * @param integer $isrm
     *
     * @return DedeAddonimages
     */
    public function setIsrm($isrm)
    {
        $this->isrm = $isrm;

        return $this;
    }

    /**
     * Get isrm
     *
     * @return integer
     */
    public function getIsrm()
    {
        return $this->isrm;
    }

    /**
     * Set ddmaxwidth
     *
     * @param integer $ddmaxwidth
     *
     * @return DedeAddonimages
     */
    public function setDdmaxwidth($ddmaxwidth)
    {
        $this->ddmaxwidth = $ddmaxwidth;

        return $this;
    }

    /**
     * Get ddmaxwidth
     *
     * @return integer
     */
    public function getDdmaxwidth()
    {
        return $this->ddmaxwidth;
    }

    /**
     * Set pagepicnum
     *
     * @param integer $pagepicnum
     *
     * @return DedeAddonimages
     */
    public function setPagepicnum($pagepicnum)
    {
        $this->pagepicnum = $pagepicnum;

        return $this;
    }

    /**
     * Get pagepicnum
     *
     * @return integer
     */
    public function getPagepicnum()
    {
        return $this->pagepicnum;
    }

    /**
     * Set templet
     *
     * @param string $templet
     *
     * @return DedeAddonimages
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
     * @return DedeAddonimages
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
     * @return DedeAddonimages
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

    /**
     * Set body
     *
     * @param string $body
     *
     * @return DedeAddonimages
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
}

