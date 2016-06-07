<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * NewFeed
 */
class NewFeed
{
    /**
     * @var int
     * @XmlElement(cdata=false)
     */
    private $id;

    /**
     * @var string
     * @XmlElement(cdata=false)
     */
    private $date;

    /**
     * @var string
     * @XmlElement(cdata=false)
     */
    private $time;

    /**
     * @var string
     * @XmlElement(cdata=false)
     */
    private $title;

    /**
     * @var string
     * @XmlElement(cdata=false)
     */
    private $content;


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
     * Set date
     *
     * @param string $date
     * @return NewFeed
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return NewFeed
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return NewFeed
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return NewFeed
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
