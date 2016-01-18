<?php

namespace AppBundle\Entity;

/**
 * AzApply
 */
class AzApply
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $product;

    /**
     * @var integer
     */
    private $mid;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $inserttime;


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
     * Set name
     *
     * @param string $name
     *
     * @return AzApply
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
     * Set company
     *
     * @param string $company
     *
     * @return AzApply
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return AzApply
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return AzApply
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set product
     *
     * @param string $product
     *
     * @return AzApply
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return AzApply
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

    /**
     * Set desc
     *
     * @param string $description
     *
     * @return AzApply
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
     * Set inserttime
     *
     * @param integer $inserttime
     *
     * @return AzApply
     */
    public function setInserttime($inserttime)
    {
        $this->inserttime = $inserttime;

        return $this;
    }

    /**
     * Get inserttime
     *
     * @return integer
     */
    public function getInserttime()
    {
        return $this->inserttime;
    }
}

