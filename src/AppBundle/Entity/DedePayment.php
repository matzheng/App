<?php

namespace AppBundle\Entity;

/**
 * DedePayment
 */
class DedePayment
{
    /**
     * @var boolean
     */
    private $id;

    /**
     * @var string
     */
    private $code = '';

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $fee = '0';

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $rank = '0';

    /**
     * @var string
     */
    private $config;

    /**
     * @var boolean
     */
    private $enabled = '0';

    /**
     * @var boolean
     */
    private $cod = '0';

    /**
     * @var boolean
     */
    private $online = '0';


    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return DedePayment
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DedePayment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fee
     *
     * @param string $fee
     *
     * @return DedePayment
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DedePayment
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
     * Set rank
     *
     * @param boolean $rank
     *
     * @return DedePayment
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return boolean
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set config
     *
     * @param string $config
     *
     * @return DedePayment
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return DedePayment
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set cod
     *
     * @param boolean $cod
     *
     * @return DedePayment
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return boolean
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return DedePayment
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }
}

