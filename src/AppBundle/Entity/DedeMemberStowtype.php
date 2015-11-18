<?php

namespace AppBundle\Entity;

/**
 * DedeMemberStowtype
 */
class DedeMemberStowtype
{
    /**
     * @var string
     */
    private $stowname;

    /**
     * @var string
     */
    private $indexname;

    /**
     * @var string
     */
    private $indexurl;


    /**
     * Get stowname
     *
     * @return string
     */
    public function getStowname()
    {
        return $this->stowname;
    }

    /**
     * Set indexname
     *
     * @param string $indexname
     *
     * @return DedeMemberStowtype
     */
    public function setIndexname($indexname)
    {
        $this->indexname = $indexname;

        return $this;
    }

    /**
     * Get indexname
     *
     * @return string
     */
    public function getIndexname()
    {
        return $this->indexname;
    }

    /**
     * Set indexurl
     *
     * @param string $indexurl
     *
     * @return DedeMemberStowtype
     */
    public function setIndexurl($indexurl)
    {
        $this->indexurl = $indexurl;

        return $this;
    }

    /**
     * Get indexurl
     *
     * @return string
     */
    public function getIndexurl()
    {
        return $this->indexurl;
    }
}

