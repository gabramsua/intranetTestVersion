<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Users
 * @XmlRoot("user") //Allows to set the name of the top-level element if the query just returns 1 element
 */
class Users
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
     * This is not necessary, it's just an example just in case in any moment it's required that the API also returns XML format.
     * @XmlElement(cdata=false) //Avoids to print "CDATA"
     * @SerializedName("name") //Allows to set a custom property name and keep it on camelCase notation
     * @var string
     */
    private $nameU;

    /**
     * @SerializedName("surname")
     * @var string
     */
    private $surnameU;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var bool
     */
    private $onboard;

    /**
     * @var bool
     */
    private $notifications;


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
     * @return Users
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
     * Set nameU
     *
     * @param string $nameU
     * @return Users
     */
    public function setNameU($nameU)
    {
        $this->nameU = $nameU;

        return $this;
    }

    /**
     * Get nameU
     *
     * @return string
     */
    public function getNameU()
    {
        return $this->nameU;
    }

    /**
     * Set surnameU
     *
     * @param string $surnameU
     * @return Users
     */
    public function setSurnameU($surnameU)
    {
        $this->surnameU = $surnameU;

        return $this;
    }

    /**
     * Get surnameU
     *
     * @return string
     */
    public function getSurnameU()
    {
        return $this->surnameU;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Users
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }


    /**
     * Set photo
     *
     * @param string $photo
     * @return Users
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set onboard
     *
     * @param boolean $onboard
     * @return Users
     */
    public function setOnboard($onboard)
    {
        $this->onboard = $onboard;

        return $this;
    }

    /**
     * Get onboard
     *
     * @return boolean
     */
    public function getOnboard()
    {
        return $this->onboard;
    }

    /**
     * Set notifications
     *
     * @param boolean $notifications
     * @return Users
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * Get notifications
     *
     * @return boolean
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    public function getNombreCompleto(){
      return $this->nameU.$this->surnameU;
    }
}
