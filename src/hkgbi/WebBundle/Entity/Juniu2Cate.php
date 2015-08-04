<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Cate
 *
 * @ORM\Table(name="juniu2_cate", indexes={@ORM\Index(name="module_id", columns={"module_id"})})
 * @ORM\Entity
 */
class Juniu2Cate
{
    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=30, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="cate_name", type="string", length=100, nullable=false)
     */
    private $cateName;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="tpl_index", type="string", length=100, nullable=false)
     */
    private $tplIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="tpl_list", type="string", length=100, nullable=false)
     */
    private $tplList;

    /**
     * @var string
     *
     * @ORM\Column(name="tpl_file", type="string", length=100, nullable=false)
     */
    private $tplFile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_index", type="boolean", nullable=false)
     */
    private $ifIndex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_hidden", type="boolean", nullable=false)
     */
    private $ifHidden;

    /**
     * @var string
     *
     * @ORM\Column(name="seotitle", type="string", length=255, nullable=false)
     */
    private $seotitle;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifspec", type="boolean", nullable=false)
     */
    private $ifspec;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=false)
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="psize", type="boolean", nullable=false)
     */
    private $psize;

    /**
     * @var string
     *
     * @ORM\Column(name="inpic", type="string", length=100, nullable=false)
     */
    private $inpic;

    /**
     * @var string
     *
     * @ORM\Column(name="linkurl", type="string", length=255, nullable=false)
     */
    private $linkurl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="target", type="boolean", nullable=false)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="ordertype", type="string", length=100, nullable=false)
     */
    private $ordertype;

    /**
     * @var string
     *
     * @ORM\Column(name="subcate", type="string", length=100, nullable=false)
     */
    private $subcate;

    /**
     * @var string
     *
     * @ORM\Column(name="ico", type="string", length=255, nullable=false)
     */
    private $ico;

    /**
     * @var string
     *
     * @ORM\Column(name="small_pic", type="string", length=255, nullable=false)
     */
    private $smallPic;

    /**
     * @var string
     *
     * @ORM\Column(name="medium_pic", type="string", length=255, nullable=false)
     */
    private $mediumPic;

    /**
     * @var string
     *
     * @ORM\Column(name="big_pic", type="string", length=255, nullable=false)
     */
    private $bigPic;

    /**
     * @var string
     *
     * @ORM\Column(name="fields", type="string", length=255, nullable=false)
     */
    private $fields;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2Cate
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
     * @return Juniu2Cate
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
     * Set cateName
     *
     * @param string $cateName
     * @return Juniu2Cate
     */
    public function setCateName($cateName)
    {
        $this->cateName = $cateName;
    
        return $this;
    }

    /**
     * Get cateName
     *
     * @return string 
     */
    public function getCateName()
    {
        return $this->cateName;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return Juniu2Cate
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
     * Set moduleId
     *
     * @param integer $moduleId
     * @return Juniu2Cate
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
     * Set tplIndex
     *
     * @param string $tplIndex
     * @return Juniu2Cate
     */
    public function setTplIndex($tplIndex)
    {
        $this->tplIndex = $tplIndex;
    
        return $this;
    }

    /**
     * Get tplIndex
     *
     * @return string 
     */
    public function getTplIndex()
    {
        return $this->tplIndex;
    }

    /**
     * Set tplList
     *
     * @param string $tplList
     * @return Juniu2Cate
     */
    public function setTplList($tplList)
    {
        $this->tplList = $tplList;
    
        return $this;
    }

    /**
     * Get tplList
     *
     * @return string 
     */
    public function getTplList()
    {
        return $this->tplList;
    }

    /**
     * Set tplFile
     *
     * @param string $tplFile
     * @return Juniu2Cate
     */
    public function setTplFile($tplFile)
    {
        $this->tplFile = $tplFile;
    
        return $this;
    }

    /**
     * Get tplFile
     *
     * @return string 
     */
    public function getTplFile()
    {
        return $this->tplFile;
    }

    /**
     * Set ifIndex
     *
     * @param boolean $ifIndex
     * @return Juniu2Cate
     */
    public function setIfIndex($ifIndex)
    {
        $this->ifIndex = $ifIndex;
    
        return $this;
    }

    /**
     * Get ifIndex
     *
     * @return boolean 
     */
    public function getIfIndex()
    {
        return $this->ifIndex;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Cate
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
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Cate
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
     * Set ifHidden
     *
     * @param boolean $ifHidden
     * @return Juniu2Cate
     */
    public function setIfHidden($ifHidden)
    {
        $this->ifHidden = $ifHidden;
    
        return $this;
    }

    /**
     * Get ifHidden
     *
     * @return boolean 
     */
    public function getIfHidden()
    {
        return $this->ifHidden;
    }

    /**
     * Set seotitle
     *
     * @param string $seotitle
     * @return Juniu2Cate
     */
    public function setSeotitle($seotitle)
    {
        $this->seotitle = $seotitle;
    
        return $this;
    }

    /**
     * Get seotitle
     *
     * @return string 
     */
    public function getSeotitle()
    {
        return $this->seotitle;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Juniu2Cate
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Juniu2Cate
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ifspec
     *
     * @param boolean $ifspec
     * @return Juniu2Cate
     */
    public function setIfspec($ifspec)
    {
        $this->ifspec = $ifspec;
    
        return $this;
    }

    /**
     * Get ifspec
     *
     * @return boolean 
     */
    public function getIfspec()
    {
        return $this->ifspec;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Juniu2Cate
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
     * Set psize
     *
     * @param boolean $psize
     * @return Juniu2Cate
     */
    public function setPsize($psize)
    {
        $this->psize = $psize;
    
        return $this;
    }

    /**
     * Get psize
     *
     * @return boolean 
     */
    public function getPsize()
    {
        return $this->psize;
    }

    /**
     * Set inpic
     *
     * @param string $inpic
     * @return Juniu2Cate
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
     * Set linkurl
     *
     * @param string $linkurl
     * @return Juniu2Cate
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
     * Set target
     *
     * @param boolean $target
     * @return Juniu2Cate
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
     * Set ordertype
     *
     * @param string $ordertype
     * @return Juniu2Cate
     */
    public function setOrdertype($ordertype)
    {
        $this->ordertype = $ordertype;
    
        return $this;
    }

    /**
     * Get ordertype
     *
     * @return string 
     */
    public function getOrdertype()
    {
        return $this->ordertype;
    }

    /**
     * Set subcate
     *
     * @param string $subcate
     * @return Juniu2Cate
     */
    public function setSubcate($subcate)
    {
        $this->subcate = $subcate;
    
        return $this;
    }

    /**
     * Get subcate
     *
     * @return string 
     */
    public function getSubcate()
    {
        return $this->subcate;
    }

    /**
     * Set ico
     *
     * @param string $ico
     * @return Juniu2Cate
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
    
        return $this;
    }

    /**
     * Get ico
     *
     * @return string 
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Set smallPic
     *
     * @param string $smallPic
     * @return Juniu2Cate
     */
    public function setSmallPic($smallPic)
    {
        $this->smallPic = $smallPic;
    
        return $this;
    }

    /**
     * Get smallPic
     *
     * @return string 
     */
    public function getSmallPic()
    {
        return $this->smallPic;
    }

    /**
     * Set mediumPic
     *
     * @param string $mediumPic
     * @return Juniu2Cate
     */
    public function setMediumPic($mediumPic)
    {
        $this->mediumPic = $mediumPic;
    
        return $this;
    }

    /**
     * Get mediumPic
     *
     * @return string 
     */
    public function getMediumPic()
    {
        return $this->mediumPic;
    }

    /**
     * Set bigPic
     *
     * @param string $bigPic
     * @return Juniu2Cate
     */
    public function setBigPic($bigPic)
    {
        $this->bigPic = $bigPic;
    
        return $this;
    }

    /**
     * Get bigPic
     *
     * @return string 
     */
    public function getBigPic()
    {
        return $this->bigPic;
    }

    /**
     * Set fields
     *
     * @param string $fields
     * @return Juniu2Cate
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    
        return $this;
    }

    /**
     * Get fields
     *
     * @return string 
     */
    public function getFields()
    {
        return $this->fields;
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
