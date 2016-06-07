<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Hours
 */
class F_Hours
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numHours;


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
       * @var string
       */
      private $reasons;

      /**
       * @var string
       */
      private $ticket;




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
     * Set numHours
     *
     * @param integer $numHours
     * @return F_Hours
     */
    public function setNumHours($numHours)
    {
        $this->numHours = $numHours;

        return $this;
    }

    /**
     * Get numHours
     *
     * @return integer
     */
    public function getNumHours()
    {
        return $this->numHours;
    }

    /**
     * Set reasons
     *
     * @param string $reasons
     * @return F_Hours
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
     * Set ticket
     *
     * @param string $ticket
     * @return F_Hours
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
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
