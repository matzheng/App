<?php

namespace AppBundle\Entity;

/**
 * DedeMemberSpace
 */
class DedeMemberSpace
{
    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var integer
     */
    private $pagesize = '10';

    /**
     * @var integer
     */
    private $matt = '0';

    /**
     * @var string
     */
    private $spacename = '';

    /**
     * @var string
     */
    private $spacelogo = '';

    /**
     * @var string
     */
    private $spacestyle = '';

    /**
     * @var string
     */
    private $sign = '没签名';

    /**
     * @var string
     */
    private $spacenews;


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
     * Set pagesize
     *
     * @param integer $pagesize
     *
     * @return DedeMemberSpace
     */
    public function setPagesize($pagesize)
    {
        $this->pagesize = $pagesize;

        return $this;
    }

    /**
     * Get pagesize
     *
     * @return integer
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * Set matt
     *
     * @param integer $matt
     *
     * @return DedeMemberSpace
     */
    public function setMatt($matt)
    {
        $this->matt = $matt;

        return $this;
    }

    /**
     * Get matt
     *
     * @return integer
     */
    public function getMatt()
    {
        return $this->matt;
    }

    /**
     * Set spacename
     *
     * @param string $spacename
     *
     * @return DedeMemberSpace
     */
    public function setSpacename($spacename)
    {
        $this->spacename = $spacename;

        return $this;
    }

    /**
     * Get spacename
     *
     * @return string
     */
    public function getSpacename()
    {
        return $this->spacename;
    }

    /**
     * Set spacelogo
     *
     * @param string $spacelogo
     *
     * @return DedeMemberSpace
     */
    public function setSpacelogo($spacelogo)
    {
        $this->spacelogo = $spacelogo;

        return $this;
    }

    /**
     * Get spacelogo
     *
     * @return string
     */
    public function getSpacelogo()
    {
        return $this->spacelogo;
    }

    /**
     * Set spacestyle
     *
     * @param string $spacestyle
     *
     * @return DedeMemberSpace
     */
    public function setSpacestyle($spacestyle)
    {
        $this->spacestyle = $spacestyle;

        return $this;
    }

    /**
     * Get spacestyle
     *
     * @return string
     */
    public function getSpacestyle()
    {
        return $this->spacestyle;
    }

    /**
     * Set sign
     *
     * @param string $sign
     *
     * @return DedeMemberSpace
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set spacenews
     *
     * @param string $spacenews
     *
     * @return DedeMemberSpace
     */
    public function setSpacenews($spacenews)
    {
        $this->spacenews = $spacenews;

        return $this;
    }

    /**
     * Get spacenews
     *
     * @return string
     */
    public function getSpacenews()
    {
        return $this->spacenews;
    }
}

