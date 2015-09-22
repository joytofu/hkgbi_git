<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2ModuleGroup
 *
 * @ORM\Table(name="juniu2_module_group")
 * @ORM\Entity
 */
class Juniu2ModuleGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=32, nullable=false)
     */
    private $langid;

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
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var string
     *
     * @ORM\Column(name="js_function", type="string", length=100, nullable=false)
     */
    private $jsFunction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_system", type="boolean", nullable=false)
     */
    private $ifSystem;

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
     * @return Juniu2ModuleGroup
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
     * @return Juniu2ModuleGroup
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
     * @return Juniu2ModuleGroup
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
     * @return Juniu2ModuleGroup
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
     * Set jsFunction
     *
     * @param string $jsFunction
     * @return Juniu2ModuleGroup
     */
    public function setJsFunction($jsFunction)
    {
        $this->jsFunction = $jsFunction;
    
        return $this;
    }

    /**
     * Get jsFunction
     *
     * @return string 
     */
    public function getJsFunction()
    {
        return $this->jsFunction;
    }

    /**
     * Set ifSystem
     *
     * @param boolean $ifSystem
     * @return Juniu2ModuleGroup
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
