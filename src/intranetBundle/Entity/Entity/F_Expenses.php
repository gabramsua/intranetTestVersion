<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Expenses
 */
class F_Expenses
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $date1;

    /**
     * @var string
     */
    private $concept;

    /**
     * @var string
     */
    private $amount;

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
     * Set company
     *
     * @param string $company
     * @return F_Expenses
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
     * Set date1
     *
     * @param string $date1
     * @return F_Expenses
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
     * Set concept
     *
     * @param string $concept
     * @return F_Expenses
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }

    /**
     * Get concept
     *
     * @return string
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return F_Expenses
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
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
