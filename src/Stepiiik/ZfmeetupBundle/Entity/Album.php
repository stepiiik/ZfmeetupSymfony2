<?php

namespace Stepiiik\ZfmeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stepiiik\ZfmeetupBundle\Entity\Album
 */
class Album
{
    /**
     * @var string $artist
     */
    private $artist;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set artist
     *
     * @param string $artist
     * @return Album
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    
        return $this;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Album
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
