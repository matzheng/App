<?php

namespace AppBundle\Entity;

/**
 * DedeCoOnepage
 */
class DedeCoOnepage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var integer
     */
    private $issource = '1';

    /**
     * @var string
     */
    private $lang = 'gb2312';

    /**
     * @var string
     */
    private $rule;


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
     * Set url
     *
     * @param string $url
     *
     * @return DedeCoOnepage
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
     * Set title
     *
     * @param string $title
     *
     * @return DedeCoOnepage
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
     * Set issource
     *
     * @param integer $issource
     *
     * @return DedeCoOnepage
     */
    public function setIssource($issource)
    {
        $this->issource = $issource;

        return $this;
    }

    /**
     * Get issource
     *
     * @return integer
     */
    public function getIssource()
    {
        return $this->issource;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return DedeCoOnepage
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set rule
     *
     * @param string $rule
     *
     * @return DedeCoOnepage
     */
    public function setRule($rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Get rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }
}

