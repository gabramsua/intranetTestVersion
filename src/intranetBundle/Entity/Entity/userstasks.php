<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * userstasks
 */
class userstasks
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
    private $idTask;


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
     * @return userstasks
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
     * Set idTask
     *
     * @param integer $idTask
     * @return userstasks
     */
    public function setIdTask($idTask)
    {
        $this->idTask = $idTask;

        return $this;
    }

    /**
     * Get idTask
     *
     * @return integer 
     */
    public function getIdTask()
    {
        return $this->idTask;
    }
}
