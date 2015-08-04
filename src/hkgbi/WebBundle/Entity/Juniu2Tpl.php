<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Tpl
 *
 * @ORM\Table(name="juniu2_tpl")
 * @ORM\Entity
 */
class Juniu2Tpl
{
    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="folder", type="string", length=50, nullable=false)
     */
    private $folder;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=10, nullable=false)
     */
    private $ext;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autoimg", type="boolean", nullable=false)
     */
    private $autoimg;

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
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Tpl
     */
    public function setLangid($langid)
    {
        $this->langid = $langid;
    
        return $this;
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

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Tpl
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
     * Set folder
     *
     * @param string $folder
     * @return Juniu2Tpl
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
    
        return $this;
    }

    /**
     * Get folder
     *
     * @return string 
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set ext
     *
     * @param string $ext
     * @return Juniu2Tpl
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    
        return $this;
    }

    /**
     * Get ext
     *
     * @return string 
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set autoimg
     *
     * @param boolean $autoimg
     * @return Juniu2Tpl
     */
    public function setAutoimg($autoimg)
    {
        $this->autoimg = $autoimg;
    
        return $this;
    }

    /**
     * Get autoimg
     *
     * @return boolean 
     */
    public function getAutoimg()
    {
        return $this->autoimg;
    }

    /**
     * Set ifdefault
     *
     * @param boolean $ifdefault
     * @return Juniu2Tpl
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
     * @return Juniu2Tpl
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
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Tpl
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
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Tpl
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
