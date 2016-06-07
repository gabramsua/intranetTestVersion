<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * channelnew_feed
 */
class channelnew_feed
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
      * @ORM\OneToMany(targetEntity="Channel", mappedBy="channelnew_feed")
     */
    private $name;

    /**
     * @var int
     */
    private $idNew;

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
     * Set name
     *
     * @param string $name
     * @return channelnew_feed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idNew
     *
     * @param integer $idNew
     * @return channelnew_feed
     */
    public function setIdNew($idNew)
    {
        $this->idNew = $idNew;

        return $this;
    }

    /**
     * Get idNew
     *
     * @return integer
     */
    public function getIdNew()
    {
        return $this->idNew;
    }
}
