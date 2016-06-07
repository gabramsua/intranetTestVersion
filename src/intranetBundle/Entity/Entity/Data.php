<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 */
class Data
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $date1;

    /**
     * @var int
     */
    private $hour;

    /**
     * @var int
     */
    private $minutes;


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
     * Set date1
     *
     * @param string $date1
     * @return Data
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get date1
     *
     * @return string 
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set hour
     *
     * @param integer $hour
     * @return Data
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return integer 
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set minutes
     *
     * @param integer $minutes
     * @return Data
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return integer 
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
}
