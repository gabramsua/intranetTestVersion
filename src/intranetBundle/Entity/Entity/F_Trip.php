<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Trip
 */
class F_Trip
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
     * @var string
     */
    private $date2;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $nameCongress;

    /**
     * @var string
     */
    private $reasons;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $isread;

    /**
     * @var string
     */
    private $type;

      /**
       * @var string
       */
      private $send;


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
     * @return F_Trip
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
     * Set date2
     *
     * @param string $date2
     * @return F_Trip
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get date2
     *
     * @return string
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return F_Trip
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set nameCongress
     *
     * @param string $nameCongress
     * @return F_Trip
     */
    public function setNameCongress($nameCongress)
    {
        $this->nameCongress = $nameCongress;

        return $this;
    }

    /**
     * Get nameCongress
     *
     * @return string
     */
    public function getNameCongress()
    {
        return $this->nameCongress;
    }

    /**
     * Set reasons
     *
     * @param string $reasons
     * @return F_Trip
     */
    public function setReasons($reasons)
    {
        $this->reasons = $reasons;

        return $this;
    }

    /**
     * Get reasons
     *
     * @return string
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set read
     *
     * @param integer read
     * @return F_Hours
     */
    public function setIsread($isread)
    {
        $this->isread = $isread;

        return $this;
    }

    /**
     * Get read
     *
     * @return integer
     */
    public function getIsread()
    {
        return $this->isread;
    }



    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get send
     *
     * @return string
     */
    public function getSend()
    {
        return $this->send;
    }
    /**
     * Set status
     *
     * @param integer status
     * @return F_Hours
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set type
     *
     * @param string type
     * @return F_Hours
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set send
     *
     * @param string send
     * @return F_Hours
     */
    public function setSend($send)
    {
        $this->send = $send;

        return $this;
    }

}
