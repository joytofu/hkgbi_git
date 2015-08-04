<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Phpok
 *
 * @ORM\Table(name="juniu2_phpok", uniqueConstraints={@ORM\UniqueConstraint(name="identifier", columns={"identifier", "langid"})})
 * @ORM\Entity
 */
class Juniu2Phpok
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="vartext", type="string", length=255, nullable=false)
     */
    private $vartext;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=100, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxcount", type="boolean", nullable=false)
     */
    private $maxcount;

    /**
     * @var string
     *
     * @ORM\Column(name="intype", type="string", nullable=false)
     */
    private $intype;

    /**
     * @var string
     *
     * @ORM\Column(name="typetext", type="text", nullable=false)
     */
    private $typetext;

    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var string
     *
     * @ORM\Column(name="orderby", type="string", nullable=false)
     */
    private $orderby;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="inpic", type="string", length=100, nullable=false)
     */
    private $inpic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pic_required", type="boolean", nullable=false)
     */
    private $picRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="linkurl", type="string", length=255, nullable=false)
     */
    private $linkurl;

    /**
     * @var string
     *
     * @ORM\Column(name="attr", type="string", length=50, nullable=false)
     */
    private $attr;

    /**
     * @var string
     *
     * @ORM\Column(name="datatype", type="string", nullable=false)
     */
    private $datatype;

    /**
     * @var string
     *
     * @ORM\Column(name="extsign", type="string", length=100, nullable=false)
     */
    private $extsign;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Phpok
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
     * Set note
     *
     * @param string $note
     * @return Juniu2Phpok
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
     * Set vartext
     *
     * @param string $vartext
     * @return Juniu2Phpok
     */
    public function setVartext($vartext)
    {
        $this->vartext = $vartext;
    
        return $this;
    }

    /**
     * Get vartext
     *
     * @return string 
     */
    public function getVartext()
    {
        return $this->vartext;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2Phpok
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
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Phpok
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
     * Set maxcount
     *
     * @param boolean $maxcount
     * @return Juniu2Phpok
     */
    public function setMaxcount($maxcount)
    {
        $this->maxcount = $maxcount;
    
        return $this;
    }

    /**
     * Get maxcount
     *
     * @return boolean 
     */
    public function getMaxcount()
    {
        return $this->maxcount;
    }

    /**
     * Set intype
     *
     * @param string $intype
     * @return Juniu2Phpok
     */
    public function setIntype($intype)
    {
        $this->intype = $intype;
    
        return $this;
    }

    /**
     * Get intype
     *
     * @return string 
     */
    public function getIntype()
    {
        return $this->intype;
    }

    /**
     * Set typetext
     *
     * @param string $typetext
     * @return Juniu2Phpok
     */
    public function setTypetext($typetext)
    {
        $this->typetext = $typetext;
    
        return $this;
    }

    /**
     * Get typetext
     *
     * @return string 
     */
    public function getTypetext()
    {
        return $this->typetext;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     * @return Juniu2Phpok
     */
    public function setMid($mid)
    {
        $this->mid = $mid;
    
        return $this;
    }

    /**
     * Get mid
     *
     * @return integer 
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set cid
     *
     * @param integer $cid
     * @return Juniu2Phpok
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    
        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set orderby
     *
     * @param string $orderby
     * @return Juniu2Phpok
     */
    public function setOrderby($orderby)
    {
        $this->orderby = $orderby;
    
        return $this;
    }

    /**
     * Get orderby
     *
     * @return string 
     */
    public function getOrderby()
    {
        return $this->orderby;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Phpok
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
     * Set inpic
     *
     * @param string $inpic
     * @return Juniu2Phpok
     */
    public function setInpic($inpic)
    {
        $this->inpic = $inpic;
    
        return $this;
    }

    /**
     * Get inpic
     *
     * @return string 
     */
    public function getInpic()
    {
        return $this->inpic;
    }

    /**
     * Set picRequired
     *
     * @param boolean $picRequired
     * @return Juniu2Phpok
     */
    public function setPicRequired($picRequired)
    {
        $this->picRequired = $picRequired;
    
        return $this;
    }

    /**
     * Get picRequired
     *
     * @return boolean 
     */
    public function getPicRequired()
    {
        return $this->picRequired;
    }

    /**
     * Set linkurl
     *
     * @param string $linkurl
     * @return Juniu2Phpok
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
     * Set attr
     *
     * @param string $attr
     * @return Juniu2Phpok
     */
    public function setAttr($attr)
    {
        $this->attr = $attr;
    
        return $this;
    }

    /**
     * Get attr
     *
     * @return string 
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Set datatype
     *
     * @param string $datatype
     * @return Juniu2Phpok
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;
    
        return $this;
    }

    /**
     * Get datatype
     *
     * @return string 
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * Set extsign
     *
     * @param string $extsign
     * @return Juniu2Phpok
     */
    public function setExtsign($extsign)
    {
        $this->extsign = $extsign;
    
        return $this;
    }

    /**
     * Get extsign
     *
     * @return string 
     */
    public function getExtsign()
    {
        return $this->extsign;
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
