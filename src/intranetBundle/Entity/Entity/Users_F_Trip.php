<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_F_Trip
 */
class Users_F_Trip
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var int
     */
    private $idForm;


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
     * Set login
     *
     * @param string $login
     * @return Users_F_Trip
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set idForm
     *
     * @param integer $idForm
     * @return Users_F_Trip
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
}
