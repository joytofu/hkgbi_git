<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2ModuleFields
 *
 * @ORM\Table(name="juniu2_module_fields", indexes={@ORM\Index(name="module_id", columns={"module_id"})})
 * @ORM\Entity
 */
class Juniu2ModuleFields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=32, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_post", type="boolean", nullable=false)
     */
    private $ifPost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_guest", type="boolean", nullable=false)
     */
    private $ifGuest;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_left", type="string", length=60, nullable=false)
     */
    private $subLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_note", type="string", length=120, nullable=false)
     */
    private $subNote;

    /**
     * @var string
     *
     * @ORM\Column(name="input", type="string", length=50, nullable=false)
     */
    private $input;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=20, nullable=false)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=20, nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="default_val", type="string", length=50, nullable=false)
     */
    private $defaultVal;

    /**
     * @var string
     *
     * @ORM\Column(name="list_val", type="string", length=255, nullable=false)
     */
    private $listVal;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_id", type="integer", nullable=false)
     */
    private $linkId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_must", type="boolean", nullable=false)
     */
    private $ifMust;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_html", type="boolean", nullable=false)
     */
    private $ifHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="error_note", type="string", length=255, nullable=false)
     */
    private $errorNote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_system", type="boolean", nullable=false)
     */
    private $ifSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="tbl", type="string", nullable=false)
     */
    private $tbl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_html", type="boolean", nullable=false)
     */
    private $showHtml;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_js", type="boolean", nullable=false)
     */
    private $ifJs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_search", type="boolean", nullable=false)
     */
    private $ifSearch;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set moduleId
     *
     * @param integer $moduleId
     * @return Juniu2ModuleFields
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;
    
        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2ModuleFields
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    
        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2ModuleFields
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
     * Set ifPost
     *
     * @param boolean $ifPost
     * @return Juniu2ModuleFields
     */
    public function setIfPost($ifPost)
    {
        $this->ifPost = $ifPost;
    
        return $this;
    }

    /**
     * Get ifPost
     *
     * @return boolean 
     */
    public function getIfPost()
    {
        return $this->ifPost;
    }

    /**
     * Set ifGuest
     *
     * @param boolean $ifGuest
     * @return Juniu2ModuleFields
     */
    public function setIfGuest($ifGuest)
    {
        $this->ifGuest = $ifGuest;
    
        return $this;
    }

    /**
     * Get ifGuest
     *
     * @return boolean 
     */
    public function getIfGuest()
    {
        return $this->ifGuest;
    }

    /**
     * Set subLeft
     *
     * @param string $subLeft
     * @return Juniu2ModuleFields
     */
    public function setSubLeft($subLeft)
    {
        $this->subLeft = $subLeft;
    
        return $this;
    }

    /**
     * Get subLeft
     *
     * @return string 
     */
    public function getSubLeft()
    {
        return $this->subLeft;
    }

    /**
     * Set subNote
     *
     * @param string $subNote
     * @return Juniu2ModuleFields
     */
    public function setSubNote($subNote)
    {
        $this->subNote = $subNote;
    
        return $this;
    }

    /**
     * Get subNote
     *
     * @return string 
     */
    public function getSubNote()
    {
        return $this->subNote;
    }

    /**
     * Set input
     *
     * @param string $input
     * @return Juniu2ModuleFields
     */
    public function setInput($input)
    {
        $this->input = $input;
    
        return $this;
    }

    /**
     * Get input
     *
     * @return string 
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return Juniu2ModuleFields
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return Juniu2ModuleFields
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set defaultVal
     *
     * @param string $defaultVal
     * @return Juniu2ModuleFields
     */
    public function setDefaultVal($defaultVal)
    {
        $this->defaultVal = $defaultVal;
    
        return $this;
    }

    /**
     * Get defaultVal
     *
     * @return string 
     */
    public function getDefaultVal()
    {
        return $this->defaultVal;
    }

    /**
     * Set listVal
     *
     * @param string $listVal
     * @return Juniu2ModuleFields
     */
    public function setListVal($listVal)
    {
        $this->listVal = $listVal;
    
        return $this;
    }

    /**
     * Get listVal
     *
     * @return string 
     */
    public function getListVal()
    {
        return $this->listVal;
    }

    /**
     * Set linkId
     *
     * @param integer $linkId
     * @return Juniu2ModuleFields
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
    
        return $this;
    }

    /**
     * Get linkId
     *
     * @return integer 
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2ModuleFields
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
     * Set ifMust
     *
     * @param boolean $ifMust
     * @return Juniu2ModuleFields
     */
    public function setIfMust($ifMust)
    {
        $this->ifMust = $ifMust;
    
        return $this;
    }

    /**
     * Get ifMust
     *
     * @return boolean 
     */
    public function getIfMust()
    {
        return $this->ifMust;
    }

    /**
     * Set ifHtml
     *
     * @param boolean $ifHtml
     * @return Juniu2ModuleFields
     */
    public function setIfHtml($ifHtml)
    {
        $this->ifHtml = $ifHtml;
    
        return $this;
    }

    /**
     * Get ifHtml
     *
     * @return boolean 
     */
    public function getIfHtml()
    {
        return $this->ifHtml;
    }

    /**
     * Set errorNote
     *
     * @param string $errorNote
     * @return Juniu2ModuleFields
     */
    public function setErrorNote($errorNote)
    {
        $this->errorNote = $errorNote;
    
        return $this;
    }

    /**
     * Get errorNote
     *
     * @return string 
     */
    public function getErrorNote()
    {
        return $this->errorNote;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2ModuleFields
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
     * Set ifSystem
     *
     * @param boolean $ifSystem
     * @return Juniu2ModuleFields
     */
    public function setIfSystem($ifSystem)
    {
        $this->ifSystem = $ifSystem;
    
        return $this;
    }

    /**
     * Get ifSystem
     *
     * @return boolean 
     */
    public function getIfSystem()
    {
        return $this->ifSystem;
    }

    /**
     * Set tbl
     *
     * @param string $tbl
     * @return Juniu2ModuleFields
     */
    public function setTbl($tbl)
    {
        $this->tbl = $tbl;
    
        return $this;
    }

    /**
     * Get tbl
     *
     * @return string 
     */
    public function getTbl()
    {
        return $this->tbl;
    }

    /**
     * Set showHtml
     *
     * @param boolean $showHtml
     * @return Juniu2ModuleFields
     */
    public function setShowHtml($showHtml)
    {
        $this->showHtml = $showHtml;
    
        return $this;
    }

    /**
     * Get showHtml
     *
     * @return boolean 
     */
    public function getShowHtml()
    {
        return $this->showHtml;
    }

    /**
     * Set ifJs
     *
     * @param boolean $ifJs
     * @return Juniu2ModuleFields
     */
    public function setIfJs($ifJs)
    {
        $this->ifJs = $ifJs;
    
        return $this;
    }

    /**
     * Get ifJs
     *
     * @return boolean 
     */
    public function getIfJs()
    {
        return $this->ifJs;
    }

    /**
     * Set ifSearch
     *
     * @param boolean $ifSearch
     * @return Juniu2ModuleFields
     */
    public function setIfSearch($ifSearch)
    {
        $this->ifSearch = $ifSearch;
    
        return $this;
    }

    /**
     * Get ifSearch
     *
     * @return boolean 
     */
    public function getIfSearch()
    {
        return $this->ifSearch;
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
