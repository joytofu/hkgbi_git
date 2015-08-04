<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Menu
 *
 * @ORM\Table(name="juniu2_menu")
 * @ORM\Entity
 */
class Juniu2Menu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     */
    private $parentid;

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
     * @ORM\Column(name="link", type="string", length=100, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="link_html", type="string", length=255, nullable=false)
     */
    private $linkHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rewrite", type="string", length=255, nullable=false)
     */
    private $linkRewrite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="target", type="boolean", nullable=false)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var string
     *
     * @ORM\Column(name="highlight", type="string", length=50, nullable=false)
     */
    private $highlight;

    /**
     * @var string
     *
     * @ORM\Column(name="highlight_id", type="string", length=255, nullable=false)
     */
    private $highlightId;

    /**
     * @var string
     *
     * @ORM\Column(name="picurl", type="string", length=255, nullable=false)
     */
    private $picurl;

    /**
     * @var string
     *
     * @ORM\Column(name="picover", type="string", length=255, nullable=false)
     */
    private $picover;

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
     * Set parentid
     *
     * @param integer $parentid
     * @return Juniu2Menu
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;
    
        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Menu
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
     * @return Juniu2Menu
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
     * Set link
     *
     * @param string $link
     * @return Juniu2Menu
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set linkHtml
     *
     * @param string $linkHtml
     * @return Juniu2Menu
     */
    public function setLinkHtml($linkHtml)
    {
        $this->linkHtml = $linkHtml;
    
        return $this;
    }

    /**
     * Get linkHtml
     *
     * @return string 
     */
    public function getLinkHtml()
    {
        return $this->linkHtml;
    }

    /**
     * Set linkRewrite
     *
     * @param string $linkRewrite
     * @return Juniu2Menu
     */
    public function setLinkRewrite($linkRewrite)
    {
        $this->linkRewrite = $linkRewrite;
    
        return $this;
    }

    /**
     * Get linkRewrite
     *
     * @return string 
     */
    public function getLinkRewrite()
    {
        return $this->linkRewrite;
    }

    /**
     * Set target
     *
     * @param boolean $target
     * @return Juniu2Menu
     */
    public function setTarget($target)
    {
        $this->target = $target;
    
        return $this;
    }

    /**
     * Get target
     *
     * @return boolean 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Juniu2Menu
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Menu
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
     * Set highlight
     *
     * @param string $highlight
     * @return Juniu2Menu
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;
    
        return $this;
    }

    /**
     * Get highlight
     *
     * @return string 
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * Set highlightId
     *
     * @param string $highlightId
     * @return Juniu2Menu
     */
    public function setHighlightId($highlightId)
    {
        $this->highlightId = $highlightId;
    
        return $this;
    }

    /**
     * Get highlightId
     *
     * @return string 
     */
    public function getHighlightId()
    {
        return $this->highlightId;
    }

    /**
     * Set picurl
     *
     * @param string $picurl
     * @return Juniu2Menu
     */
    public function setPicurl($picurl)
    {
        $this->picurl = $picurl;
    
        return $this;
    }

    /**
     * Get picurl
     *
     * @return string 
     */
    public function getPicurl()
    {
        return $this->picurl;
    }

    /**
     * Set picover
     *
     * @param string $picover
     * @return Juniu2Menu
     */
    public function setPicover($picover)
    {
        $this->picover = $picover;
    
        return $this;
    }

    /**
     * Get picover
     *
     * @return string 
     */
    public function getPicover()
    {
        return $this->picover;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Menu
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
