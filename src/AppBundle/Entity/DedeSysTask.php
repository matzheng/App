<?php

namespace AppBundle\Entity;

/**
 * DedeSysTask
 */
class DedeSysTask
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $taskname;

    /**
     * @var string
     */
    private $dourl;

    /**
     * @var boolean
     */
    private $islock = '0';

    /**
     * @var boolean
     */
    private $runtype = '0';

    /**
     * @var string
     */
    private $runtime = '0000';

    /**
     * @var integer
     */
    private $starttime = '0';

    /**
     * @var integer
     */
    private $endtime = '0';

    /**
     * @var boolean
     */
    private $freq = '0';

    /**
     * @var integer
     */
    private $lastrun = '0';

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $parameter;

    /**
     * @var integer
     */
    private $settime = '0';

    /**
     * @var boolean
     */
    private $sta = '0';


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
     * Set taskname
     *
     * @param string $taskname
     *
     * @return DedeSysTask
     */
    public function setTaskname($taskname)
    {
        $this->taskname = $taskname;

        return $this;
    }

    /**
     * Get taskname
     *
     * @return string
     */
    public function getTaskname()
    {
        return $this->taskname;
    }

    /**
     * Set dourl
     *
     * @param string $dourl
     *
     * @return DedeSysTask
     */
    public function setDourl($dourl)
    {
        $this->dourl = $dourl;

        return $this;
    }

    /**
     * Get dourl
     *
     * @return string
     */
    public function getDourl()
    {
        return $this->dourl;
    }

    /**
     * Set islock
     *
     * @param boolean $islock
     *
     * @return DedeSysTask
     */
    public function setIslock($islock)
    {
        $this->islock = $islock;

        return $this;
    }

    /**
     * Get islock
     *
     * @return boolean
     */
    public function getIslock()
    {
        return $this->islock;
    }

    /**
     * Set runtype
     *
     * @param boolean $runtype
     *
     * @return DedeSysTask
     */
    public function setRuntype($runtype)
    {
        $this->runtype = $runtype;

        return $this;
    }

    /**
     * Get runtype
     *
     * @return boolean
     */
    public function getRuntype()
    {
        return $this->runtype;
    }

    /**
     * Set runtime
     *
     * @param string $runtime
     *
     * @return DedeSysTask
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set starttime
     *
     * @param integer $starttime
     *
     * @return DedeSysTask
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param integer $endtime
     *
     * @return DedeSysTask
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return integer
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set freq
     *
     * @param boolean $freq
     *
     * @return DedeSysTask
     */
    public function setFreq($freq)
    {
        $this->freq = $freq;

        return $this;
    }

    /**
     * Get freq
     *
     * @return boolean
     */
    public function getFreq()
    {
        return $this->freq;
    }

    /**
     * Set lastrun
     *
     * @param integer $lastrun
     *
     * @return DedeSysTask
     */
    public function setLastrun($lastrun)
    {
        $this->lastrun = $lastrun;

        return $this;
    }

    /**
     * Get lastrun
     *
     * @return integer
     */
    public function getLastrun()
    {
        return $this->lastrun;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DedeSysTask
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
     * Set parameter
     *
     * @param string $parameter
     *
     * @return DedeSysTask
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Get parameter
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set settime
     *
     * @param integer $settime
     *
     * @return DedeSysTask
     */
    public function setSettime($settime)
    {
        $this->settime = $settime;

        return $this;
    }

    /**
     * Get settime
     *
     * @return integer
     */
    public function getSettime()
    {
        return $this->settime;
    }

    /**
     * Set sta
     *
     * @param boolean $sta
     *
     * @return DedeSysTask
     */
    public function setSta($sta)
    {
        $this->sta = $sta;

        return $this;
    }

    /**
     * Get sta
     *
     * @return boolean
     */
    public function getSta()
    {
        return $this->sta;
    }
}

