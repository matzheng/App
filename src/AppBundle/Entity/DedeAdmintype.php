<?php

namespace AppBundle\Entity;

/**
 * DedeAdmintype
 */
class DedeAdmintype
{
    /**
     * @var float
     */
    private $rank = '1';

    /**
     * @var string
     */
    private $typename = '';

    /**
     * @var integer
     */
    private $system = '0';

    /**
     * @var string
     */
    private $purviews;


    /**
     * Get rank
     *
     * @return float
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set typename
     *
     * @param string $typename
     *
     * @return DedeAdmintype
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string
     */
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * Set system
     *
     * @param integer $system
     *
     * @return DedeAdmintype
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return integer
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set purviews
     *
     * @param string $purviews
     *
     * @return DedeAdmintype
     */
    public function setPurviews($purviews)
    {
        $this->purviews = $purviews;

        return $this;
    }

    /**
     * Get purviews
     *
     * @return string
     */
    public function getPurviews()
    {
        return $this->purviews;
    }
}

