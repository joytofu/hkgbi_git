<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Gd
 *
 * @ORM\Table(name="juniu2_gd")
 * @ORM\Entity
 */
class Juniu2Gd
{
    /**
     * @var string
     *
     * @ORM\Column(name="pictype", type="string", length=50, nullable=false)
     */
    private $pictype;

    /**
     * @var string
     *
     * @ORM\Column(name="picsubject", type="string", length=255, nullable=false)
     */
    private $picsubject;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="water", type="string", length=255, nullable=false)
     */
    private $water;

    /**
     * @var string
     *
     * @ORM\Column(name="picposition", type="string", length=100, nullable=false)
     */
    private $picposition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trans", type="boolean", nullable=false)
     */
    private $trans;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cuttype", type="boolean", nullable=false)
     */
    private $cuttype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quality", type="boolean", nullable=false)
     */
    private $quality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="border", type="boolean", nullable=false)
     */
    private $border;

    /**
     * @var string
     *
     * @ORM\Column(name="bordercolor", type="string", length=10, nullable=false)
     */
    private $bordercolor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="padding", type="boolean", nullable=false)
     */
    private $padding;

    /**
     * @var string
     *
     * @ORM\Column(name="bgcolor", type="string", length=10, nullable=false)
     */
    private $bgcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="bgimg", type="string", length=255, nullable=false)
     */
    private $bgimg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_default", type="boolean", nullable=false)
     */
    private $editDefault;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set pictype
     *
     * @param string $pictype
     * @return Juniu2Gd
     */
    public function setPictype($pictype)
    {
        $this->pictype = $pictype;
    
        return $this;
    }

    /**
     * Get pictype
     *
     * @return string 
     */
    public function getPictype()
    {
        return $this->pictype;
    }

    /**
     * Set picsubject
     *
     * @param string $picsubject
     * @return Juniu2Gd
     */
    public function setPicsubject($picsubject)
    {
        $this->picsubject = $picsubject;
    
        return $this;
    }

    /**
     * Get picsubject
     *
     * @return string 
     */
    public function getPicsubject()
    {
        return $this->picsubject;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return Juniu2Gd
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Juniu2Gd
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set water
     *
     * @param string $water
     * @return Juniu2Gd
     */
    public function setWater($water)
    {
        $this->water = $water;
    
        return $this;
    }

    /**
     * Get water
     *
     * @return string 
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set picposition
     *
     * @param string $picposition
     * @return Juniu2Gd
     */
    public function setPicposition($picposition)
    {
        $this->picposition = $picposition;
    
        return $this;
    }

    /**
     * Get picposition
     *
     * @return string 
     */
    public function getPicposition()
    {
        return $this->picposition;
    }

    /**
     * Set trans
     *
     * @param boolean $trans
     * @return Juniu2Gd
     */
    public function setTrans($trans)
    {
        $this->trans = $trans;
    
        return $this;
    }

    /**
     * Get trans
     *
     * @return boolean 
     */
    public function getTrans()
    {
        return $this->trans;
    }

    /**
     * Set cuttype
     *
     * @param boolean $cuttype
     * @return Juniu2Gd
     */
    public function setCuttype($cuttype)
    {
        $this->cuttype = $cuttype;
    
        return $this;
    }

    /**
     * Get cuttype
     *
     * @return boolean 
     */
    public function getCuttype()
    {
        return $this->cuttype;
    }

    /**
     * Set quality
     *
     * @param boolean $quality
     * @return Juniu2Gd
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    
        return $this;
    }

    /**
     * Get quality
     *
     * @return boolean 
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set border
     *
     * @param boolean $border
     * @return Juniu2Gd
     */
    public function setBorder($border)
    {
        $this->border = $border;
    
        return $this;
    }

    /**
     * Get border
     *
     * @return boolean 
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Set bordercolor
     *
     * @param string $bordercolor
     * @return Juniu2Gd
     */
    public function setBordercolor($bordercolor)
    {
        $this->bordercolor = $bordercolor;
    
        return $this;
    }

    /**
     * Get bordercolor
     *
     * @return string 
     */
    public function getBordercolor()
    {
        return $this->bordercolor;
    }

    /**
     * Set padding
     *
     * @param boolean $padding
     * @return Juniu2Gd
     */
    public function setPadding($padding)
    {
        $this->padding = $padding;
    
        return $this;
    }

    /**
     * Get padding
     *
     * @return boolean 
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * Set bgcolor
     *
     * @param string $bgcolor
     * @return Juniu2Gd
     */
    public function setBgcolor($bgcolor)
    {
        $this->bgcolor = $bgcolor;
    
        return $this;
    }

    /**
     * Get bgcolor
     *
     * @return string 
     */
    public function getBgcolor()
    {
        return $this->bgcolor;
    }

    /**
     * Set bgimg
     *
     * @param string $bgimg
     * @return Juniu2Gd
     */
    public function setBgimg($bgimg)
    {
        $this->bgimg = $bgimg;
    
        return $this;
    }

    /**
     * Get bgimg
     *
     * @return string 
     */
    public function getBgimg()
    {
        return $this->bgimg;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Gd
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Gd
     */
    public function setTaxis($taxis)
    {
        $this->taxis = $taxis;
    
        return $this;
    }

    /**
     * Get taxis
     *
     * @return boolean 
     */
    public function getTaxis()
    {
        return $this->taxis;
    }

    /**
     * Set editDefault
     *
     * @param boolean $editDefault
     * @return Juniu2Gd
     */
    public function setEditDefault($editDefault)
    {
        $this->editDefault = $editDefault;
    
        return $this;
    }

    /**
     * Get editDefault
     *
     * @return boolean 
     */
    public function getEditDefault()
    {
        return $this->editDefault;
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
