<?php

namespace AppBundle\Entity;

/**
 * DedeSphinx
 */
class DedeSphinx
{
    /**
     * @var integer
     */
    private $countid;

    /**
     * @var integer
     */
    private $maxaid;


    /**
     * Get countid
     *
     * @return integer
     */
    public function getCountid()
    {
        return $this->countid;
    }

    /**
     * Set maxaid
     *
     * @param integer $maxaid
     *
     * @return DedeSphinx
     */
    public function setMaxaid($maxaid)
    {
        $this->maxaid = $maxaid;

        return $this;
    }

    /**
     * Get maxaid
     *
     * @return integer
     */
    public function getMaxaid()
    {
        return $this->maxaid;
    }
}

