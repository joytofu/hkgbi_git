<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2ModuleLink
 *
 * @ORM\Table(name="juniu2_module_link")
 * @ORM\Entity
 */
class Juniu2ModuleLink
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
     * @ORM\Column(name="ico", type="string", length=255, nullable=false)
     */
    private $ico;

    /**
     * @var string
     *
     * @ORM\Column(name="linkurl", type="string", length=200, nullable=false)
     */
    private $linkurl;

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
     * @return Juniu2ModuleLink
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
     * @return Juniu2ModuleLink
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
     * Set ico
     *
     * @param string $ico
     * @return Juniu2ModuleLink
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
     * Set linkurl
     *
     * @param string $linkurl
     * @return Juniu2ModuleLink
     */
    public function setLinkurl($linkurl)
    {
        $this->linkurl = $linkurl;
    
        return $this;
    }

    /**
     * Get linkurl
     *
     * @return string 
     */
    public function getLinkurl()
    {
        return $this->linkurl;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2ModuleLink
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
     * @return Juniu2ModuleLink
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
