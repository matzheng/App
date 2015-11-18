<?php

namespace AppBundle\Entity;

/**
 * DedeAddonVideo
 */
class DedeAddonVideo
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
    private $redirecturl = '';

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
    private $videoscript = '';

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $prevideo = '';


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
     * @return DedeAddonVideo
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
     * Set redirecturl
     *
     * @param string $redirecturl
     *
     * @return DedeAddonVideo
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
     * Set templet
     *
     * @param string $templet
     *
     * @return DedeAddonVideo
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
     * @return DedeAddonVideo
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
     * Set videoscript
     *
     * @param string $videoscript
     *
     * @return DedeAddonVideo
     */
    public function setVideoscript($videoscript)
    {
        $this->videoscript = $videoscript;

        return $this;
    }

    /**
     * Get videoscript
     *
     * @return string
     */
    public function getVideoscript()
    {
        return $this->videoscript;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return DedeAddonVideo
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
     * Set prevideo
     *
     * @param string $prevideo
     *
     * @return DedeAddonVideo
     */
    public function setPrevideo($prevideo)
    {
        $this->prevideo = $prevideo;

        return $this;
    }

    /**
     * Get prevideo
     *
     * @return string
     */
    public function getPrevideo()
    {
        return $this->prevideo;
    }
}

