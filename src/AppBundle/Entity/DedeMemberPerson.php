<?php

namespace AppBundle\Entity;

/**
 * DedeMemberPerson
 */
class DedeMemberPerson
{
    /**
     * @var integer
     */
    private $mid = '0';

    /**
     * @var boolean
     */
    private $onlynet = '1';

    /**
     * @var boolean
     */
    private $sex = '0';

    /**
     * @var string
     */
    private $uname = '';

    /**
     * @var string
     */
    private $qq = '';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $mobile = '';

    /**
     * @var integer
     */
    private $place = '0';

    /**
     * @var integer
     */
    private $oldplace = '0';

    /**
     * @var \DateTime
     */
    private $birthday = '1980-01-01';

    /**
     * @var integer
     */
    private $income = '0';

    /**
     * @var integer
     */
    private $education = '0';

    /**
     * @var string
     */
    private $vocation = '0';

    /**
     * @var integer
     */
    private $marital = '0';

    /**
     * @var integer
     */
    private $drink = '0';

    /**
     * @var string
     */
    private $address = '';

    /**
     * @var string
     */
    private $company = '';

    /**
     * @var integer
     */
    private $job = '0';


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
     * Set onlynet
     *
     * @param boolean $onlynet
     *
     * @return DedeMemberPerson
     */
    public function setOnlynet($onlynet)
    {
        $this->onlynet = $onlynet;

        return $this;
    }

    /**
     * Get onlynet
     *
     * @return boolean
     */
    public function getOnlynet()
    {
        return $this->onlynet;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     *
     * @return DedeMemberPerson
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set uname
     *
     * @param string $uname
     *
     * @return DedeMemberPerson
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set qq
     *
     * @param string $qq
     *
     * @return DedeMemberPerson
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return DedeMemberPerson
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return DedeMemberPerson
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set place
     *
     * @param integer $place
     *
     * @return DedeMemberPerson
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set oldplace
     *
     * @param integer $oldplace
     *
     * @return DedeMemberPerson
     */
    public function setOldplace($oldplace)
    {
        $this->oldplace = $oldplace;

        return $this;
    }

    /**
     * Get oldplace
     *
     * @return integer
     */
    public function getOldplace()
    {
        return $this->oldplace;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return DedeMemberPerson
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set income
     *
     * @param integer $income
     *
     * @return DedeMemberPerson
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return integer
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set education
     *
     * @param integer $education
     *
     * @return DedeMemberPerson
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return integer
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set vocation
     *
     * @param string $vocation
     *
     * @return DedeMemberPerson
     */
    public function setVocation($vocation)
    {
        $this->vocation = $vocation;

        return $this;
    }

    /**
     * Get vocation
     *
     * @return string
     */
    public function getVocation()
    {
        return $this->vocation;
    }

    /**
     * Set marital
     *
     * @param integer $marital
     *
     * @return DedeMemberPerson
     */
    public function setMarital($marital)
    {
        $this->marital = $marital;

        return $this;
    }

    /**
     * Get marital
     *
     * @return integer
     */
    public function getMarital()
    {
        return $this->marital;
    }

    /**
     * Set drink
     *
     * @param integer $drink
     *
     * @return DedeMemberPerson
     */
    public function setDrink($drink)
    {
        $this->drink = $drink;

        return $this;
    }

    /**
     * Get drink
     *
     * @return integer
     */
    public function getDrink()
    {
        return $this->drink;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return DedeMemberPerson
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
     * Set company
     *
     * @param string $company
     *
     * @return DedeMemberPerson
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
     * Set job
     *
     * @param integer $job
     *
     * @return DedeMemberPerson
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return integer
     */
    public function getJob()
    {
        return $this->job;
    }
}

