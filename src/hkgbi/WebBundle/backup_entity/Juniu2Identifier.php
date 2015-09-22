<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Identifier
 *
 * @ORM\Table(name="juniu2_identifier", indexes={@ORM\Index(name="module_id", columns={"module_id"})})
 * @ORM\Entity
 */
class Juniu2Identifier
{
    /**
     * @var string
     *
     * @ORM\Column(name="sign", type="string", length=32, nullable=false)
     */
    private $sign;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_system", type="boolean", nullable=false)
     */
    private $ifSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="g_sign", type="string", length=100, nullable=false)
     */
    private $gSign;

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
     * Set sign
     *
     * @param string $sign
     * @return Juniu2Identifier
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
    
        return $this;
    }

    /**
     * Get sign
     *
     * @return string 
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Identifier
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
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Identifier
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
     * Set moduleId
     *
     * @param integer $moduleId
     * @return Juniu2Identifier
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
     * Set ifSystem
     *
     * @param boolean $ifSystem
     * @return Juniu2Identifier
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
     * Set gSign
     *
     * @param string $gSign
     * @return Juniu2Identifier
     */
    public function setGSign($gSign)
    {
        $this->gSign = $gSign;
    
        return $this;
    }

    /**
     * Get gSign
     *
     * @return string 
     */
    public function getGSign()
    {
        return $this->gSign;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Identifier
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
