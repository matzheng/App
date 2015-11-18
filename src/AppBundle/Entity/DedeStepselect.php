<?php

namespace AppBundle\Entity;

/**
 * DedeStepselect
 */
class DedeStepselect
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $itemname;

    /**
     * @var string
     */
    private $egroup;

    /**
     * @var boolean
     */
    private $issign = '0';

    /**
     * @var boolean
     */
    private $issystem = '0';


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
     * Set itemname
     *
     * @param string $itemname
     *
     * @return DedeStepselect
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set egroup
     *
     * @param string $egroup
     *
     * @return DedeStepselect
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
     * Set issign
     *
     * @param boolean $issign
     *
     * @return DedeStepselect
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

    /**
     * Set issystem
     *
     * @param boolean $issystem
     *
     * @return DedeStepselect
     */
    public function setIssystem($issystem)
    {
        $this->issystem = $issystem;

        return $this;
    }

    /**
     * Get issystem
     *
     * @return boolean
     */
    public function getIssystem()
    {
        return $this->issystem;
    }
}

