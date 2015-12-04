<?php

namespace AppBundle\Entity;

/**
 * AzAnswer
 */
class AzAnswer
{
    /**
     * @var integer
     */
    private $aid;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var integer
     */
    private $mid;


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
     * Set answer
     *
     * @param string $answer
     *
     * @return AzAnswer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzAnswer
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid
     *
     * @return integer
     */
    public function getMid()
    {
        return $this->mid;
    }
}

