<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hours_data
 */
class hours_data
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idForm;

    /**
     * @var int
     */
    private $idData;


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
     * Set idForm
     *
     * @param integer $idForm
     * @return hours_data
     */
    public function setIdForm($idForm)
    {
        $this->idForm = $idForm;

        return $this;
    }

    /**
     * Get idForm
     *
     * @return integer 
     */
    public function getIdForm()
    {
        return $this->idForm;
    }

    /**
     * Set idData
     *
     * @param integer $idData
     * @return hours_data
     */
    public function setIdData($idData)
    {
        $this->idData = $idData;

        return $this;
    }

    /**
     * Get idData
     *
     * @return integer 
     */
    public function getIdData()
    {
        return $this->idData;
    }
}
