<?php

namespace AppBundle\Entity;

/**
 * DedeDiySubscribe
 */
class DedeDiySubscribe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $regtime;


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
     * Set email
     *
     * @param string $email
     *
     * @return DedeDiySubscribe
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return DedeDiySubscribe
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set regtime
     *
     * @param integer $regtime
     *
     * @return DedeDiySubscribe
     */
    public function setRegtime($regtime)
    {
        $this->regtime = $regtime;

        return $this;
    }

    /**
     * Get regtime
     *
     * @return integer
     */
    public function getRegtime()
    {
        return $this->regtime;
    }
}

