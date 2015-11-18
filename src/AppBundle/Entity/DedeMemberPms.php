<?php

namespace AppBundle\Entity;

/**
 * DedeMemberPms
 */
class DedeMemberPms
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $floginid = '';

    /**
     * @var integer
     */
    private $fromid = '0';

    /**
     * @var integer
     */
    private $toid = '0';

    /**
     * @var string
     */
    private $tologinid = '';

    /**
     * @var boolean
     */
    private $folder = '0';

    /**
     * @var string
     */
    private $subject = '';

    /**
     * @var integer
     */
    private $sendtime = '0';

    /**
     * @var integer
     */
    private $writetime = '0';

    /**
     * @var boolean
     */
    private $hasview = '0';

    /**
     * @var boolean
     */
    private $isadmin = '0';

    /**
     * @var string
     */
    private $message;


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
     * Set floginid
     *
     * @param string $floginid
     *
     * @return DedeMemberPms
     */
    public function setFloginid($floginid)
    {
        $this->floginid = $floginid;

        return $this;
    }

    /**
     * Get floginid
     *
     * @return string
     */
    public function getFloginid()
    {
        return $this->floginid;
    }

    /**
     * Set fromid
     *
     * @param integer $fromid
     *
     * @return DedeMemberPms
     */
    public function setFromid($fromid)
    {
        $this->fromid = $fromid;

        return $this;
    }

    /**
     * Get fromid
     *
     * @return integer
     */
    public function getFromid()
    {
        return $this->fromid;
    }

    /**
     * Set toid
     *
     * @param integer $toid
     *
     * @return DedeMemberPms
     */
    public function setToid($toid)
    {
        $this->toid = $toid;

        return $this;
    }

    /**
     * Get toid
     *
     * @return integer
     */
    public function getToid()
    {
        return $this->toid;
    }

    /**
     * Set tologinid
     *
     * @param string $tologinid
     *
     * @return DedeMemberPms
     */
    public function setTologinid($tologinid)
    {
        $this->tologinid = $tologinid;

        return $this;
    }

    /**
     * Get tologinid
     *
     * @return string
     */
    public function getTologinid()
    {
        return $this->tologinid;
    }

    /**
     * Set folder
     *
     * @param boolean $folder
     *
     * @return DedeMemberPms
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get folder
     *
     * @return boolean
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return DedeMemberPms
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set sendtime
     *
     * @param integer $sendtime
     *
     * @return DedeMemberPms
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Get sendtime
     *
     * @return integer
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }

    /**
     * Set writetime
     *
     * @param integer $writetime
     *
     * @return DedeMemberPms
     */
    public function setWritetime($writetime)
    {
        $this->writetime = $writetime;

        return $this;
    }

    /**
     * Get writetime
     *
     * @return integer
     */
    public function getWritetime()
    {
        return $this->writetime;
    }

    /**
     * Set hasview
     *
     * @param boolean $hasview
     *
     * @return DedeMemberPms
     */
    public function setHasview($hasview)
    {
        $this->hasview = $hasview;

        return $this;
    }

    /**
     * Get hasview
     *
     * @return boolean
     */
    public function getHasview()
    {
        return $this->hasview;
    }

    /**
     * Set isadmin
     *
     * @param boolean $isadmin
     *
     * @return DedeMemberPms
     */
    public function setIsadmin($isadmin)
    {
        $this->isadmin = $isadmin;

        return $this;
    }

    /**
     * Get isadmin
     *
     * @return boolean
     */
    public function getIsadmin()
    {
        return $this->isadmin;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return DedeMemberPms
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}

