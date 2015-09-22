<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Reply
 *
 * @ORM\Table(name="juniu2_reply", indexes={@ORM\Index(name="listid", columns={"tid", "userid"})})
 * @ORM\Entity
 */
class Juniu2Reply
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=30, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="postdate", type="integer", nullable=false)
     */
    private $postdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifydate", type="integer", nullable=false)
     */
    private $modifydate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifbest", type="boolean", nullable=false)
     */
    private $ifbest;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="admreply", type="text", nullable=false)
     */
    private $admreply;

    /**
     * @var integer
     *
     * @ORM\Column(name="replydate", type="integer", nullable=false)
     */
    private $replydate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="star", type="boolean", nullable=false)
     */
    private $star;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tid
     *
     * @param integer $tid
     * @return Juniu2Reply
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    
        return $this;
    }

    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Juniu2Reply
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Juniu2Reply
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Juniu2Reply
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Reply
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
     * Set postdate
     *
     * @param integer $postdate
     * @return Juniu2Reply
     */
    public function setPostdate($postdate)
    {
        $this->postdate = $postdate;
    
        return $this;
    }

    /**
     * Get postdate
     *
     * @return integer 
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Set modifydate
     *
     * @param integer $modifydate
     * @return Juniu2Reply
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;
    
        return $this;
    }

    /**
     * Get modifydate
     *
     * @return integer 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Reply
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
     * Set ifbest
     *
     * @param boolean $ifbest
     * @return Juniu2Reply
     */
    public function setIfbest($ifbest)
    {
        $this->ifbest = $ifbest;
    
        return $this;
    }

    /**
     * Get ifbest
     *
     * @return boolean 
     */
    public function getIfbest()
    {
        return $this->ifbest;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Juniu2Reply
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set admreply
     *
     * @param string $admreply
     * @return Juniu2Reply
     */
    public function setAdmreply($admreply)
    {
        $this->admreply = $admreply;
    
        return $this;
    }

    /**
     * Get admreply
     *
     * @return string 
     */
    public function getAdmreply()
    {
        return $this->admreply;
    }

    /**
     * Set replydate
     *
     * @param integer $replydate
     * @return Juniu2Reply
     */
    public function setReplydate($replydate)
    {
        $this->replydate = $replydate;
    
        return $this;
    }

    /**
     * Get replydate
     *
     * @return integer 
     */
    public function getReplydate()
    {
        return $this->replydate;
    }

    /**
     * Set star
     *
     * @param boolean $star
     * @return Juniu2Reply
     */
    public function setStar($star)
    {
        $this->star = $star;
    
        return $this;
    }

    /**
     * Get star
     *
     * @return boolean 
     */
    public function getStar()
    {
        return $this->star;
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
