<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2UserGroup
 *
 * @ORM\Table(name="juniu2_user_group")
 * @ORM\Entity
 */
class Juniu2UserGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="group_type", type="string", nullable=false)
     */
    private $groupType;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="popedom_post", type="text", nullable=false)
     */
    private $popedomPost;

    /**
     * @var string
     *
     * @ORM\Column(name="popedom_reply", type="text", nullable=false)
     */
    private $popedomReply;

    /**
     * @var string
     *
     * @ORM\Column(name="popedom_read", type="text", nullable=false)
     */
    private $popedomRead;

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_cert", type="boolean", nullable=false)
     */
    private $postCert;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reply_cert", type="boolean", nullable=false)
     */
    private $replyCert;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifsystem", type="boolean", nullable=false)
     */
    private $ifsystem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifdefault", type="boolean", nullable=false)
     */
    private $ifdefault;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifshow", type="boolean", nullable=false)
     */
    private $ifshow;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set groupType
     *
     * @param string $groupType
     * @return Juniu2UserGroup
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;
    
        return $this;
    }

    /**
     * Get groupType
     *
     * @return string 
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2UserGroup
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
     * Set popedomPost
     *
     * @param string $popedomPost
     * @return Juniu2UserGroup
     */
    public function setPopedomPost($popedomPost)
    {
        $this->popedomPost = $popedomPost;
    
        return $this;
    }

    /**
     * Get popedomPost
     *
     * @return string 
     */
    public function getPopedomPost()
    {
        return $this->popedomPost;
    }

    /**
     * Set popedomReply
     *
     * @param string $popedomReply
     * @return Juniu2UserGroup
     */
    public function setPopedomReply($popedomReply)
    {
        $this->popedomReply = $popedomReply;
    
        return $this;
    }

    /**
     * Get popedomReply
     *
     * @return string 
     */
    public function getPopedomReply()
    {
        return $this->popedomReply;
    }

    /**
     * Set popedomRead
     *
     * @param string $popedomRead
     * @return Juniu2UserGroup
     */
    public function setPopedomRead($popedomRead)
    {
        $this->popedomRead = $popedomRead;
    
        return $this;
    }

    /**
     * Get popedomRead
     *
     * @return string 
     */
    public function getPopedomRead()
    {
        return $this->popedomRead;
    }

    /**
     * Set postCert
     *
     * @param boolean $postCert
     * @return Juniu2UserGroup
     */
    public function setPostCert($postCert)
    {
        $this->postCert = $postCert;
    
        return $this;
    }

    /**
     * Get postCert
     *
     * @return boolean 
     */
    public function getPostCert()
    {
        return $this->postCert;
    }

    /**
     * Set replyCert
     *
     * @param boolean $replyCert
     * @return Juniu2UserGroup
     */
    public function setReplyCert($replyCert)
    {
        $this->replyCert = $replyCert;
    
        return $this;
    }

    /**
     * Get replyCert
     *
     * @return boolean 
     */
    public function getReplyCert()
    {
        return $this->replyCert;
    }

    /**
     * Set ifsystem
     *
     * @param boolean $ifsystem
     * @return Juniu2UserGroup
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
     * Set ifdefault
     *
     * @param boolean $ifdefault
     * @return Juniu2UserGroup
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
     * Set ifshow
     *
     * @param boolean $ifshow
     * @return Juniu2UserGroup
     */
    public function setIfshow($ifshow)
    {
        $this->ifshow = $ifshow;
    
        return $this;
    }

    /**
     * Get ifshow
     *
     * @return boolean 
     */
    public function getIfshow()
    {
        return $this->ifshow;
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
