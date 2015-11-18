<?php

namespace AppBundle\Entity;

/**
 * DedeShopsUserinfo
 */
class DedeShopsUserinfo
{
    /**
     * @var string
     */
    private $oid = '';

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var string
     */
    private $consignee = '';

    /**
     * @var string
     */
    private $address = '';

    /**
     * @var integer
     */
    private $zip = '0';

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
    private $des = '';


    /**
     * Get oid
     *
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return DedeShopsUserinfo
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set consignee
     *
     * @param string $consignee
     *
     * @return DedeShopsUserinfo
     */
    public function setConsignee($consignee)
    {
        $this->consignee = $consignee;

        return $this;
    }

    /**
     * Get consignee
     *
     * @return string
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return DedeShopsUserinfo
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
     * Set zip
     *
     * @param integer $zip
     *
     * @return DedeShopsUserinfo
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return DedeShopsUserinfo
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
     * @return DedeShopsUserinfo
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
     * Set des
     *
     * @param string $des
     *
     * @return DedeShopsUserinfo
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return string
     */
    public function getDes()
    {
        return $this->des;
    }
}

