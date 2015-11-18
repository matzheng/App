<?php

namespace AppBundle\Entity;

/**
 * DedeMemberCompany
 */
class DedeMemberCompany
{
    /**
     * @var integer
     */
    private $mid;

    /**
     * @var string
     */
    private $company = '';

    /**
     * @var string
     */
    private $product = '';

    /**
     * @var integer
     */
    private $place = '0';

    /**
     * @var integer
     */
    private $vocation = '0';

    /**
     * @var integer
     */
    private $cosize = '0';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $linkman = '';

    /**
     * @var string
     */
    private $address = '';

    /**
     * @var string
     */
    private $mobile = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var integer
     */
    private $uptime = '0';

    /**
     * @var boolean
     */
    private $checked = '0';

    /**
     * @var string
     */
    private $introduce;

    /**
     * @var string
     */
    private $comface = '';


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
     * Set company
     *
     * @param string $company
     *
     * @return DedeMemberCompany
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set product
     *
     * @param string $product
     *
     * @return DedeMemberCompany
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set place
     *
     * @param integer $place
     *
     * @return DedeMemberCompany
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set vocation
     *
     * @param integer $vocation
     *
     * @return DedeMemberCompany
     */
    public function setVocation($vocation)
    {
        $this->vocation = $vocation;

        return $this;
    }

    /**
     * Get vocation
     *
     * @return integer
     */
    public function getVocation()
    {
        return $this->vocation;
    }

    /**
     * Set cosize
     *
     * @param integer $cosize
     *
     * @return DedeMemberCompany
     */
    public function setCosize($cosize)
    {
        $this->cosize = $cosize;

        return $this;
    }

    /**
     * Get cosize
     *
     * @return integer
     */
    public function getCosize()
    {
        return $this->cosize;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return DedeMemberCompany
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
     * Set fax
     *
     * @param string $fax
     *
     * @return DedeMemberCompany
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set linkman
     *
     * @param string $linkman
     *
     * @return DedeMemberCompany
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

    /**
     * Set address
     *
     * @param string $address
     *
     * @return DedeMemberCompany
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
     * Set mobile
     *
     * @param string $mobile
     *
     * @return DedeMemberCompany
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return DedeMemberCompany
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
     * Set url
     *
     * @param string $url
     *
     * @return DedeMemberCompany
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
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeMemberCompany
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return integer
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set checked
     *
     * @param boolean $checked
     *
     * @return DedeMemberCompany
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Set introduce
     *
     * @param string $introduce
     *
     * @return DedeMemberCompany
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
     * Set comface
     *
     * @param string $comface
     *
     * @return DedeMemberCompany
     */
    public function setComface($comface)
    {
        $this->comface = $comface;

        return $this;
    }

    /**
     * Get comface
     *
     * @return string
     */
    public function getComface()
    {
        return $this->comface;
    }
}

