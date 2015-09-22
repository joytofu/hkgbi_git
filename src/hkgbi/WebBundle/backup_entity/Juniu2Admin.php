<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Admin
 *
 * @ORM\Table(name="juniu2_admin")
 * @ORM\Entity
 */
class Juniu2Admin
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=false)
     */
    private $pass;

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
     * @ORM\Column(name="popedom", type="text", nullable=false)
     */
    private $popedom;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=255, nullable=false)
     */
    private $langid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return Juniu2Admin
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Juniu2Admin
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Juniu2Admin
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    
        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Admin
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
     * @return Juniu2Admin
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
     * Set popedom
     *
     * @param string $popedom
     * @return Juniu2Admin
     */
    public function setPopedom($popedom)
    {
        $this->popedom = $popedom;
    
        return $this;
    }

    /**
     * Get popedom
     *
     * @return string 
     */
    public function getPopedom()
    {
        return $this->popedom;
    }

    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Admin
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
