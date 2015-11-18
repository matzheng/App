<?php

namespace AppBundle\Entity;

/**
 * DedeChanneltype
 */
class DedeChanneltype
{
    /**
     * @var integer
     */
    private $id = '0';

    /**
     * @var string
     */
    private $nid = '';

    /**
     * @var string
     */
    private $typename = '';

    /**
     * @var string
     */
    private $maintable = 'dede_archives';

    /**
     * @var string
     */
    private $addtable = '';

    /**
     * @var string
     */
    private $addcon = '';

    /**
     * @var string
     */
    private $mancon = '';

    /**
     * @var string
     */
    private $editcon = '';

    /**
     * @var string
     */
    private $useraddcon = '';

    /**
     * @var string
     */
    private $usermancon = '';

    /**
     * @var string
     */
    private $usereditcon = '';

    /**
     * @var string
     */
    private $fieldset;

    /**
     * @var string
     */
    private $listfields;

    /**
     * @var string
     */
    private $allfields;

    /**
     * @var integer
     */
    private $issystem = '0';

    /**
     * @var integer
     */
    private $isshow = '1';

    /**
     * @var integer
     */
    private $issend = '0';

    /**
     * @var integer
     */
    private $arcsta = '-1';

    /**
     * @var string
     */
    private $usertype = '';

    /**
     * @var integer
     */
    private $sendrank = '10';

    /**
     * @var integer
     */
    private $isdefault = '0';

    /**
     * @var boolean
     */
    private $needdes = '1';

    /**
     * @var boolean
     */
    private $needpic = '1';

    /**
     * @var string
     */
    private $titlename = '标题';

    /**
     * @var integer
     */
    private $onlyone = '0';

    /**
     * @var integer
     */
    private $dfcid = '0';


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
     * Set nid
     *
     * @param string $nid
     *
     * @return DedeChanneltype
     */
    public function setNid($nid)
    {
        $this->nid = $nid;

        return $this;
    }

    /**
     * Get nid
     *
     * @return string
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * Set typename
     *
     * @param string $typename
     *
     * @return DedeChanneltype
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
     * Set maintable
     *
     * @param string $maintable
     *
     * @return DedeChanneltype
     */
    public function setMaintable($maintable)
    {
        $this->maintable = $maintable;

        return $this;
    }

    /**
     * Get maintable
     *
     * @return string
     */
    public function getMaintable()
    {
        return $this->maintable;
    }

    /**
     * Set addtable
     *
     * @param string $addtable
     *
     * @return DedeChanneltype
     */
    public function setAddtable($addtable)
    {
        $this->addtable = $addtable;

        return $this;
    }

    /**
     * Get addtable
     *
     * @return string
     */
    public function getAddtable()
    {
        return $this->addtable;
    }

    /**
     * Set addcon
     *
     * @param string $addcon
     *
     * @return DedeChanneltype
     */
    public function setAddcon($addcon)
    {
        $this->addcon = $addcon;

        return $this;
    }

    /**
     * Get addcon
     *
     * @return string
     */
    public function getAddcon()
    {
        return $this->addcon;
    }

    /**
     * Set mancon
     *
     * @param string $mancon
     *
     * @return DedeChanneltype
     */
    public function setMancon($mancon)
    {
        $this->mancon = $mancon;

        return $this;
    }

    /**
     * Get mancon
     *
     * @return string
     */
    public function getMancon()
    {
        return $this->mancon;
    }

    /**
     * Set editcon
     *
     * @param string $editcon
     *
     * @return DedeChanneltype
     */
    public function setEditcon($editcon)
    {
        $this->editcon = $editcon;

        return $this;
    }

    /**
     * Get editcon
     *
     * @return string
     */
    public function getEditcon()
    {
        return $this->editcon;
    }

    /**
     * Set useraddcon
     *
     * @param string $useraddcon
     *
     * @return DedeChanneltype
     */
    public function setUseraddcon($useraddcon)
    {
        $this->useraddcon = $useraddcon;

        return $this;
    }

    /**
     * Get useraddcon
     *
     * @return string
     */
    public function getUseraddcon()
    {
        return $this->useraddcon;
    }

    /**
     * Set usermancon
     *
     * @param string $usermancon
     *
     * @return DedeChanneltype
     */
    public function setUsermancon($usermancon)
    {
        $this->usermancon = $usermancon;

        return $this;
    }

    /**
     * Get usermancon
     *
     * @return string
     */
    public function getUsermancon()
    {
        return $this->usermancon;
    }

    /**
     * Set usereditcon
     *
     * @param string $usereditcon
     *
     * @return DedeChanneltype
     */
    public function setUsereditcon($usereditcon)
    {
        $this->usereditcon = $usereditcon;

        return $this;
    }

    /**
     * Get usereditcon
     *
     * @return string
     */
    public function getUsereditcon()
    {
        return $this->usereditcon;
    }

    /**
     * Set fieldset
     *
     * @param string $fieldset
     *
     * @return DedeChanneltype
     */
    public function setFieldset($fieldset)
    {
        $this->fieldset = $fieldset;

        return $this;
    }

    /**
     * Get fieldset
     *
     * @return string
     */
    public function getFieldset()
    {
        return $this->fieldset;
    }

    /**
     * Set listfields
     *
     * @param string $listfields
     *
     * @return DedeChanneltype
     */
    public function setListfields($listfields)
    {
        $this->listfields = $listfields;

        return $this;
    }

    /**
     * Get listfields
     *
     * @return string
     */
    public function getListfields()
    {
        return $this->listfields;
    }

    /**
     * Set allfields
     *
     * @param string $allfields
     *
     * @return DedeChanneltype
     */
    public function setAllfields($allfields)
    {
        $this->allfields = $allfields;

        return $this;
    }

    /**
     * Get allfields
     *
     * @return string
     */
    public function getAllfields()
    {
        return $this->allfields;
    }

    /**
     * Set issystem
     *
     * @param integer $issystem
     *
     * @return DedeChanneltype
     */
    public function setIssystem($issystem)
    {
        $this->issystem = $issystem;

        return $this;
    }

    /**
     * Get issystem
     *
     * @return integer
     */
    public function getIssystem()
    {
        return $this->issystem;
    }

    /**
     * Set isshow
     *
     * @param integer $isshow
     *
     * @return DedeChanneltype
     */
    public function setIsshow($isshow)
    {
        $this->isshow = $isshow;

        return $this;
    }

    /**
     * Get isshow
     *
     * @return integer
     */
    public function getIsshow()
    {
        return $this->isshow;
    }

    /**
     * Set issend
     *
     * @param integer $issend
     *
     * @return DedeChanneltype
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
     * Set arcsta
     *
     * @param integer $arcsta
     *
     * @return DedeChanneltype
     */
    public function setArcsta($arcsta)
    {
        $this->arcsta = $arcsta;

        return $this;
    }

    /**
     * Get arcsta
     *
     * @return integer
     */
    public function getArcsta()
    {
        return $this->arcsta;
    }

    /**
     * Set usertype
     *
     * @param string $usertype
     *
     * @return DedeChanneltype
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return string
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set sendrank
     *
     * @param integer $sendrank
     *
     * @return DedeChanneltype
     */
    public function setSendrank($sendrank)
    {
        $this->sendrank = $sendrank;

        return $this;
    }

    /**
     * Get sendrank
     *
     * @return integer
     */
    public function getSendrank()
    {
        return $this->sendrank;
    }

    /**
     * Set isdefault
     *
     * @param integer $isdefault
     *
     * @return DedeChanneltype
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
     * Set needdes
     *
     * @param boolean $needdes
     *
     * @return DedeChanneltype
     */
    public function setNeeddes($needdes)
    {
        $this->needdes = $needdes;

        return $this;
    }

    /**
     * Get needdes
     *
     * @return boolean
     */
    public function getNeeddes()
    {
        return $this->needdes;
    }

    /**
     * Set needpic
     *
     * @param boolean $needpic
     *
     * @return DedeChanneltype
     */
    public function setNeedpic($needpic)
    {
        $this->needpic = $needpic;

        return $this;
    }

    /**
     * Get needpic
     *
     * @return boolean
     */
    public function getNeedpic()
    {
        return $this->needpic;
    }

    /**
     * Set titlename
     *
     * @param string $titlename
     *
     * @return DedeChanneltype
     */
    public function setTitlename($titlename)
    {
        $this->titlename = $titlename;

        return $this;
    }

    /**
     * Get titlename
     *
     * @return string
     */
    public function getTitlename()
    {
        return $this->titlename;
    }

    /**
     * Set onlyone
     *
     * @param integer $onlyone
     *
     * @return DedeChanneltype
     */
    public function setOnlyone($onlyone)
    {
        $this->onlyone = $onlyone;

        return $this;
    }

    /**
     * Get onlyone
     *
     * @return integer
     */
    public function getOnlyone()
    {
        return $this->onlyone;
    }

    /**
     * Set dfcid
     *
     * @param integer $dfcid
     *
     * @return DedeChanneltype
     */
    public function setDfcid($dfcid)
    {
        $this->dfcid = $dfcid;

        return $this;
    }

    /**
     * Get dfcid
     *
     * @return integer
     */
    public function getDfcid()
    {
        return $this->dfcid;
    }
}

