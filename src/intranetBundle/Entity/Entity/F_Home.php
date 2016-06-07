<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Home
 */
class F_Home
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
    private $reason;

    /**
     * @var int
     */
    private $wholeDay;

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
     * @return F_Home
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
     * Set reason
     *
     * @param string $reason
     * @return F_Home
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set wholeDay
     *
     * @param integer $wholeDay
     * @return F_Home
     */
    public function setWholeDay($wholeDay)
    {
        $this->wholeDay = $wholeDay;

        return $this;
    }

    /**
     * Get wholeDay
     *
     * @return integer
     */
    public function getWholeDay()
    {
        return $this->wholeDay;
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
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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

    /**
     * Get send
     *
     * @return string
     */
    public function getSend()
    {
        return $this->send;
    }

}
