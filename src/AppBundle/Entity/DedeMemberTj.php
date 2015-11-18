<?php

namespace AppBundle\Entity;

/**
 * DedeMemberTj
 */
class DedeMemberTj
{
    /**
     * @var integer
     */
    private $mid;

    /**
     * @var integer
     */
    private $article = '0';

    /**
     * @var integer
     */
    private $album = '0';

    /**
     * @var integer
     */
    private $archives = '0';

    /**
     * @var integer
     */
    private $homecount = '0';

    /**
     * @var integer
     */
    private $pagecount = '0';

    /**
     * @var integer
     */
    private $feedback = '0';

    /**
     * @var integer
     */
    private $friend = '0';

    /**
     * @var integer
     */
    private $stow = '0';

    /**
     * @var integer
     */
    private $soft = '0';

    /**
     * @var integer
     */
    private $info = '0';

    /**
     * @var integer
     */
    private $shop = '0';


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
     * Set article
     *
     * @param integer $article
     *
     * @return DedeMemberTj
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return integer
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set album
     *
     * @param integer $album
     *
     * @return DedeMemberTj
     */
    public function setAlbum($album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return integer
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set archives
     *
     * @param integer $archives
     *
     * @return DedeMemberTj
     */
    public function setArchives($archives)
    {
        $this->archives = $archives;

        return $this;
    }

    /**
     * Get archives
     *
     * @return integer
     */
    public function getArchives()
    {
        return $this->archives;
    }

    /**
     * Set homecount
     *
     * @param integer $homecount
     *
     * @return DedeMemberTj
     */
    public function setHomecount($homecount)
    {
        $this->homecount = $homecount;

        return $this;
    }

    /**
     * Get homecount
     *
     * @return integer
     */
    public function getHomecount()
    {
        return $this->homecount;
    }

    /**
     * Set pagecount
     *
     * @param integer $pagecount
     *
     * @return DedeMemberTj
     */
    public function setPagecount($pagecount)
    {
        $this->pagecount = $pagecount;

        return $this;
    }

    /**
     * Get pagecount
     *
     * @return integer
     */
    public function getPagecount()
    {
        return $this->pagecount;
    }

    /**
     * Set feedback
     *
     * @param integer $feedback
     *
     * @return DedeMemberTj
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return integer
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set friend
     *
     * @param integer $friend
     *
     * @return DedeMemberTj
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return integer
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Set stow
     *
     * @param integer $stow
     *
     * @return DedeMemberTj
     */
    public function setStow($stow)
    {
        $this->stow = $stow;

        return $this;
    }

    /**
     * Get stow
     *
     * @return integer
     */
    public function getStow()
    {
        return $this->stow;
    }

    /**
     * Set soft
     *
     * @param integer $soft
     *
     * @return DedeMemberTj
     */
    public function setSoft($soft)
    {
        $this->soft = $soft;

        return $this;
    }

    /**
     * Get soft
     *
     * @return integer
     */
    public function getSoft()
    {
        return $this->soft;
    }

    /**
     * Set info
     *
     * @param integer $info
     *
     * @return DedeMemberTj
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return integer
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set shop
     *
     * @param integer $shop
     *
     * @return DedeMemberTj
     */
    public function setShop($shop)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return integer
     */
    public function getShop()
    {
        return $this->shop;
    }
}

