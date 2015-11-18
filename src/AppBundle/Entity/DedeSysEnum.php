<?php

namespace AppBundle\Entity;

/**
 * DedeSysEnum
 */
class DedeSysEnum
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ename = '';

    /**
     * @var string
     */
    private $evalue = '0';

    /**
     * @var string
     */
    private $egroup = '';

    /**
     * @var integer
     */
    private $disorder = '0';

    /**
     * @var boolean
     */
    private $issign = '1';


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
     * Set ename
     *
     * @param string $ename
     *
     * @return DedeSysEnum
     */
    public function setEname($ename)
    {
        $this->ename = $ename;

        return $this;
    }

    /**
     * Get ename
     *
     * @return string
     */
    public function getEname()
    {
        return $this->ename;
    }

    /**
     * Set evalue
     *
     * @param string $evalue
     *
     * @return DedeSysEnum
     */
    public function setEvalue($evalue)
    {
        $this->evalue = $evalue;

        return $this;
    }

    /**
     * Get evalue
     *
     * @return string
     */
    public function getEvalue()
    {
        return $this->evalue;
    }

    /**
     * Set egroup
     *
     * @param string $egroup
     *
     * @return DedeSysEnum
     */
    public function setEgroup($egroup)
    {
        $this->egroup = $egroup;

        return $this;
    }

    /**
     * Get egroup
     *
     * @return string
     */
    public function getEgroup()
    {
        return $this->egroup;
    }

    /**
     * Set disorder
     *
     * @param integer $disorder
     *
     * @return DedeSysEnum
     */
    public function setDisorder($disorder)
    {
        $this->disorder = $disorder;

        return $this;
    }

    /**
     * Get disorder
     *
     * @return integer
     */
    public function getDisorder()
    {
        return $this->disorder;
    }

    /**
     * Set issign
     *
     * @param boolean $issign
     *
     * @return DedeSysEnum
     */
    public function setIssign($issign)
    {
        $this->issign = $issign;

        return $this;
    }

    /**
     * Get issign
     *
     * @return boolean
     */
    public function getIssign()
    {
        return $this->issign;
    }
}

