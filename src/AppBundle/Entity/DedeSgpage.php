<?php

namespace AppBundle\Entity;

/**
 * DedeSgpage
 */
class DedeSgpage
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var integer
     */
    private $ismake = '1';

    /**
     * @var string
     */
    private $filename = '';

    /**
     * @var string
     */
    private $keywords = '';

    /**
     * @var string
     */
    private $template = '';

    /**
     * @var string
     */
    private $likeid = '';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var integer
     */
    private $uptime = '0';

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
     * Set title
     *
     * @param string $title
     *
     * @return DedeSgpage
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
     * Set ismake
     *
     * @param integer $ismake
     *
     * @return DedeSgpage
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
     * Set filename
     *
     * @param string $filename
     *
     * @return DedeSgpage
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return DedeSgpage
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
     * Set template
     *
     * @param string $template
     *
     * @return DedeSgpage
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set likeid
     *
     * @param string $likeid
     *
     * @return DedeSgpage
     */
    public function setLikeid($likeid)
    {
        $this->likeid = $likeid;

        return $this;
    }

    /**
     * Get likeid
     *
     * @return string
     */
    public function getLikeid()
    {
        return $this->likeid;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DedeSgpage
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
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return DedeSgpage
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
     * Set body
     *
     * @param string $body
     *
     * @return DedeSgpage
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

