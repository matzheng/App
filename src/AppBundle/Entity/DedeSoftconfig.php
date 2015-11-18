<?php

namespace AppBundle\Entity;

/**
 * DedeSoftconfig
 */
class DedeSoftconfig
{
    /**
     * @var integer
     */
    private $downtype = '0';

    /**
     * @var integer
     */
    private $ismoresite = '0';

    /**
     * @var integer
     */
    private $gotojump = '0';

    /**
     * @var integer
     */
    private $islocal = '1';

    /**
     * @var string
     */
    private $sites;

    /**
     * @var string
     */
    private $downmsg;

    /**
     * @var integer
     */
    private $moresitedo = '1';

    /**
     * @var integer
     */
    private $dfrank = '0';

    /**
     * @var integer
     */
    private $dfywboy = '0';

    /**
     * @var integer
     */
    private $argrange = '0';


    /**
     * Get downtype
     *
     * @return integer
     */
    public function getDowntype()
    {
        return $this->downtype;
    }

    /**
     * Set ismoresite
     *
     * @param integer $ismoresite
     *
     * @return DedeSoftconfig
     */
    public function setIsmoresite($ismoresite)
    {
        $this->ismoresite = $ismoresite;

        return $this;
    }

    /**
     * Get ismoresite
     *
     * @return integer
     */
    public function getIsmoresite()
    {
        return $this->ismoresite;
    }

    /**
     * Set gotojump
     *
     * @param integer $gotojump
     *
     * @return DedeSoftconfig
     */
    public function setGotojump($gotojump)
    {
        $this->gotojump = $gotojump;

        return $this;
    }

    /**
     * Get gotojump
     *
     * @return integer
     */
    public function getGotojump()
    {
        return $this->gotojump;
    }

    /**
     * Set islocal
     *
     * @param integer $islocal
     *
     * @return DedeSoftconfig
     */
    public function setIslocal($islocal)
    {
        $this->islocal = $islocal;

        return $this;
    }

    /**
     * Get islocal
     *
     * @return integer
     */
    public function getIslocal()
    {
        return $this->islocal;
    }

    /**
     * Set sites
     *
     * @param string $sites
     *
     * @return DedeSoftconfig
     */
    public function setSites($sites)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Get sites
     *
     * @return string
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Set downmsg
     *
     * @param string $downmsg
     *
     * @return DedeSoftconfig
     */
    public function setDownmsg($downmsg)
    {
        $this->downmsg = $downmsg;

        return $this;
    }

    /**
     * Get downmsg
     *
     * @return string
     */
    public function getDownmsg()
    {
        return $this->downmsg;
    }

    /**
     * Set moresitedo
     *
     * @param integer $moresitedo
     *
     * @return DedeSoftconfig
     */
    public function setMoresitedo($moresitedo)
    {
        $this->moresitedo = $moresitedo;

        return $this;
    }

    /**
     * Get moresitedo
     *
     * @return integer
     */
    public function getMoresitedo()
    {
        return $this->moresitedo;
    }

    /**
     * Set dfrank
     *
     * @param integer $dfrank
     *
     * @return DedeSoftconfig
     */
    public function setDfrank($dfrank)
    {
        $this->dfrank = $dfrank;

        return $this;
    }

    /**
     * Get dfrank
     *
     * @return integer
     */
    public function getDfrank()
    {
        return $this->dfrank;
    }

    /**
     * Set dfywboy
     *
     * @param integer $dfywboy
     *
     * @return DedeSoftconfig
     */
    public function setDfywboy($dfywboy)
    {
        $this->dfywboy = $dfywboy;

        return $this;
    }

    /**
     * Get dfywboy
     *
     * @return integer
     */
    public function getDfywboy()
    {
        return $this->dfywboy;
    }

    /**
     * Set argrange
     *
     * @param integer $argrange
     *
     * @return DedeSoftconfig
     */
    public function setArgrange($argrange)
    {
        $this->argrange = $argrange;

        return $this;
    }

    /**
     * Get argrange
     *
     * @return integer
     */
    public function getArgrange()
    {
        return $this->argrange;
    }
}

