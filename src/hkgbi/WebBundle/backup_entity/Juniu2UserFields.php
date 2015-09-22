<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2UserFields
 *
 * @ORM\Table(name="juniu2_user_fields", indexes={@ORM\Index(name="module_id", columns={"group_id"})})
 * @ORM\Entity
 */
class Juniu2UserFields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return Juniu2UserFields
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    
        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * Set subLeft
     *
     * @param string $subLeft
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
     * Set errorNote
     *
     * @param string $errorNote
     * @return Juniu2UserFields
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
     * @return Juniu2UserFields
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
