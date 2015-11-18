<?php

namespace AppBundle\Entity;

/**
 * DedeAdvancedsearch
 */
class DedeAdvancedsearch
{
    /**
     * @var integer
     */
    private $mid;

    /**
     * @var string
     */
    private $maintable = '';

    /**
     * @var string
     */
    private $mainfields;

    /**
     * @var string
     */
    private $addontable;

    /**
     * @var string
     */
    private $addonfields;

    /**
     * @var string
     */
    private $forms;

    /**
     * @var string
     */
    private $template = '';


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
     * Set maintable
     *
     * @param string $maintable
     *
     * @return DedeAdvancedsearch
     */
    public function setMaintable($maintable)
    {
        $this->maintable = $maintable;

        return $this;
    }

    /**
     * Get maintable
     *
     * @return string
     */
    public function getMaintable()
    {
        return $this->maintable;
    }

    /**
     * Set mainfields
     *
     * @param string $mainfields
     *
     * @return DedeAdvancedsearch
     */
    public function setMainfields($mainfields)
    {
        $this->mainfields = $mainfields;

        return $this;
    }

    /**
     * Get mainfields
     *
     * @return string
     */
    public function getMainfields()
    {
        return $this->mainfields;
    }

    /**
     * Set addontable
     *
     * @param string $addontable
     *
     * @return DedeAdvancedsearch
     */
    public function setAddontable($addontable)
    {
        $this->addontable = $addontable;

        return $this;
    }

    /**
     * Get addontable
     *
     * @return string
     */
    public function getAddontable()
    {
        return $this->addontable;
    }

    /**
     * Set addonfields
     *
     * @param string $addonfields
     *
     * @return DedeAdvancedsearch
     */
    public function setAddonfields($addonfields)
    {
        $this->addonfields = $addonfields;

        return $this;
    }

    /**
     * Get addonfields
     *
     * @return string
     */
    public function getAddonfields()
    {
        return $this->addonfields;
    }

    /**
     * Set forms
     *
     * @param string $forms
     *
     * @return DedeAdvancedsearch
     */
    public function setForms($forms)
    {
        $this->forms = $forms;

        return $this;
    }

    /**
     * Get forms
     *
     * @return string
     */
    public function getForms()
    {
        return $this->forms;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return DedeAdvancedsearch
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
}

