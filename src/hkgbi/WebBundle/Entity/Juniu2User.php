<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2User
 *
 * @ORM\Table(name="juniu2_user")
 * @ORM\Entity
 */
class Juniu2User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="integer", nullable=false)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="regdate", type="integer", nullable=false)
     */
    private $regdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="codetime", type="integer", nullable=false)
     */
    private $codetime;

    /**
     * @var string
     *
     * @ORM\Column(name="chkcode", type="string", length=50, nullable=false)
     */
    private $chkcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb_id", type="integer", nullable=false)
     */
    private $thumbId;

    /**
     * @var string
     *
     * @ORM\Column(name="rname", type="string", length=222, nullable=true)
     */
    private $rname;

    /**
     * @var string
     *
     * @ORM\Column(name="mima", type="string", length=222, nullable=true)
     */
    private $mima;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @var integer
     *
     * @ORM\Column(name="jb", type="integer", nullable=true)
     */
    private $jb;

    /**
     * @var string
     *
     * @ORM\Column(name="ygzj", type="string", length=233, nullable=true)
     */
    private $ygzj;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return Juniu2User
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;
    
        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Juniu2User
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
     * Set pass
     *
     * @param string $pass
     * @return Juniu2User
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
     * Set email
     *
     * @param string $email
     * @return Juniu2User
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
     * Set regdate
     *
     * @param integer $regdate
     * @return Juniu2User
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;
    
        return $this;
    }

    /**
     * Get regdate
     *
     * @return integer 
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2User
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
     * Set codetime
     *
     * @param integer $codetime
     * @return Juniu2User
     */
    public function setCodetime($codetime)
    {
        $this->codetime = $codetime;
    
        return $this;
    }

    /**
     * Get codetime
     *
     * @return integer 
     */
    public function getCodetime()
    {
        return $this->codetime;
    }

    /**
     * Set chkcode
     *
     * @param string $chkcode
     * @return Juniu2User
     */
    public function setChkcode($chkcode)
    {
        $this->chkcode = $chkcode;
    
        return $this;
    }

    /**
     * Get chkcode
     *
     * @return string 
     */
    public function getChkcode()
    {
        return $this->chkcode;
    }

    /**
     * Set thumbId
     *
     * @param integer $thumbId
     * @return Juniu2User
     */
    public function setThumbId($thumbId)
    {
        $this->thumbId = $thumbId;
    
        return $this;
    }

    /**
     * Get thumbId
     *
     * @return integer 
     */
    public function getThumbId()
    {
        return $this->thumbId;
    }

    /**
     * Set rname
     *
     * @param string $rname
     * @return Juniu2User
     */
    public function setRname($rname)
    {
        $this->rname = $rname;
    
        return $this;
    }

    /**
     * Get rname
     *
     * @return string 
     */
    public function getRname()
    {
        return $this->rname;
    }

    /**
     * Set mima
     *
     * @param string $mima
     * @return Juniu2User
     */
    public function setMima($mima)
    {
        $this->mima = $mima;
    
        return $this;
    }

    /**
     * Get mima
     *
     * @return string 
     */
    public function getMima()
    {
        return $this->mima;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Juniu2User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set jb
     *
     * @param integer $jb
     * @return Juniu2User
     */
    public function setJb($jb)
    {
        $this->jb = $jb;
    
        return $this;
    }

    /**
     * Get jb
     *
     * @return integer 
     */
    public function getJb()
    {
        return $this->jb;
    }

    /**
     * Set ygzj
     *
     * @param string $ygzj
     * @return Juniu2User
     */
    public function setYgzj($ygzj)
    {
        $this->ygzj = $ygzj;
    
        return $this;
    }

    /**
     * Get ygzj
     *
     * @return string 
     */
    public function getYgzj()
    {
        return $this->ygzj;
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
