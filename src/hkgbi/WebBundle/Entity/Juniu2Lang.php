<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Lang
 *
 * @ORM\Table(name="juniu2_lang")
 * @ORM\Entity
 */
class Juniu2Lang
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifdefault", type="boolean", nullable=false)
     */
    private $ifdefault;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifsystem", type="boolean", nullable=false)
     */
    private $ifsystem;

    /**
     * @var string
     *
     * @ORM\Column(name="ico", type="string", length=255, nullable=false)
     */
    private $ico;

    /**
     * @var string
     *
     * @ORM\Column(name="small_pic", type="string", length=255, nullable=false)
     */
    private $smallPic;

    /**
     * @var string
     *
     * @ORM\Column(name="medium_pic", type="string", length=255, nullable=false)
     */
    private $mediumPic;

    /**
     * @var string
     *
     * @ORM\Column(name="big_pic", type="string", length=255, nullable=false)
     */
    private $bigPic;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $langid;



    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Lang
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
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Lang
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
     * Set note
     *
     * @param string $note
     * @return Juniu2Lang
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Lang
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
     * Set ifdefault
     *
     * @param boolean $ifdefault
     * @return Juniu2Lang
     */
    public function setIfdefault($ifdefault)
    {
        $this->ifdefault = $ifdefault;
    
        return $this;
    }

    /**
     * Get ifdefault
     *
     * @return boolean 
     */
    public function getIfdefault()
    {
        return $this->ifdefault;
    }

    /**
     * Set ifsystem
     *
     * @param boolean $ifsystem
     * @return Juniu2Lang
     */
    public function setIfsystem($ifsystem)
    {
        $this->ifsystem = $ifsystem;
    
        return $this;
    }

    /**
     * Get ifsystem
     *
     * @return boolean 
     */
    public function getIfsystem()
    {
        return $this->ifsystem;
    }

    /**
     * Set ico
     *
     * @param string $ico
     * @return Juniu2Lang
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
    
        return $this;
    }

    /**
     * Get ico
     *
     * @return string 
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Set smallPic
     *
     * @param string $smallPic
     * @return Juniu2Lang
     */
    public function setSmallPic($smallPic)
    {
        $this->smallPic = $smallPic;
    
        return $this;
    }

    /**
     * Get smallPic
     *
     * @return string 
     */
    public function getSmallPic()
    {
        return $this->smallPic;
    }

    /**
     * Set mediumPic
     *
     * @param string $mediumPic
     * @return Juniu2Lang
     */
    public function setMediumPic($mediumPic)
    {
        $this->mediumPic = $mediumPic;
    
        return $this;
    }

    /**
     * Get mediumPic
     *
     * @return string 
     */
    public function getMediumPic()
    {
        return $this->mediumPic;
    }

    /**
     * Set bigPic
     *
     * @param string $bigPic
     * @return Juniu2Lang
     */
    public function setBigPic($bigPic)
    {
        $this->bigPic = $bigPic;
    
        return $this;
    }

    /**
     * Get bigPic
     *
     * @return string 
     */
    public function getBigPic()
    {
        return $this->bigPic;
    }

    /**
     * Get langid
     *
     * @return string 
     */
    public function getLangid()
    {
        return $this->langid;
    }
}
