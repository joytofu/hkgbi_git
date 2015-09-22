<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Upfiles
 *
 * @ORM\Table(name="juniu2_upfiles")
 * @ORM\Entity
 */
class Juniu2Upfiles
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb", type="string", length=255, nullable=false)
     */
    private $thumb;

    /**
     * @var integer
     *
     * @ORM\Column(name="postdate", type="integer", nullable=false)
     */
    private $postdate;

    /**
     * @var string
     *
     * @ORM\Column(name="ftype", type="string", length=10, nullable=false)
     */
    private $ftype;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="flv_pic", type="string", length=255, nullable=false)
     */
    private $flvPic;

    /**
     * @var string
     *
     * @ORM\Column(name="sessid", type="string", length=50, nullable=false)
     */
    private $sessid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Upfiles
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
     * Set filename
     *
     * @param string $filename
     * @return Juniu2Upfiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return Juniu2Upfiles
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    
        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set postdate
     *
     * @param integer $postdate
     * @return Juniu2Upfiles
     */
    public function setPostdate($postdate)
    {
        $this->postdate = $postdate;
    
        return $this;
    }

    /**
     * Get postdate
     *
     * @return integer 
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Set ftype
     *
     * @param string $ftype
     * @return Juniu2Upfiles
     */
    public function setFtype($ftype)
    {
        $this->ftype = $ftype;
    
        return $this;
    }

    /**
     * Get ftype
     *
     * @return string 
     */
    public function getFtype()
    {
        return $this->ftype;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return Juniu2Upfiles
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set flvPic
     *
     * @param string $flvPic
     * @return Juniu2Upfiles
     */
    public function setFlvPic($flvPic)
    {
        $this->flvPic = $flvPic;
    
        return $this;
    }

    /**
     * Get flvPic
     *
     * @return string 
     */
    public function getFlvPic()
    {
        return $this->flvPic;
    }

    /**
     * Set sessid
     *
     * @param string $sessid
     * @return Juniu2Upfiles
     */
    public function setSessid($sessid)
    {
        $this->sessid = $sessid;
    
        return $this;
    }

    /**
     * Get sessid
     *
     * @return string 
     */
    public function getSessid()
    {
        return $this->sessid;
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
