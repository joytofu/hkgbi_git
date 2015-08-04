<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2List
 *
 * @ORM\Table(name="juniu2_list", indexes={@ORM\Index(name="module_id", columns={"module_id", "cate_id", "title"})})
 * @ORM\Entity
 */
class Juniu2List
{
    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cate_id", type="integer", nullable=true)
     */
    private $cateId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255, nullable=true)
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=true)
     */
    private $style;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=true)
     */
    private $hidden;

    /**
     * @var string
     *
     * @ORM\Column(name="link_url", type="string", length=255, nullable=true)
     */
    private $linkUrl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="target", type="boolean", nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=100, nullable=true)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="author_type", type="string", nullable=true)
     */
    private $authorType;

    /**
     * @var string
     *
     * @ORM\Column(name="seotitle", type="string", length=255, nullable=true)
     */
    private $seotitle;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=100, nullable=true)
     */
    private $identifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=true)
     */
    private $hits;

    /**
     * @var integer
     *
     * @ORM\Column(name="good_hits", type="integer", nullable=true)
     */
    private $goodHits;

    /**
     * @var integer
     *
     * @ORM\Column(name="bad_hits", type="integer", nullable=true)
     */
    private $badHits;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_date", type="integer", nullable=true)
     */
    private $postDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="modify_date", type="integer", nullable=true)
     */
    private $modifyDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb_id", type="integer", nullable=true)
     */
    private $thumbId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="istop", type="boolean", nullable=true)
     */
    private $istop;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isvouch", type="boolean", nullable=true)
     */
    private $isvouch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isbest", type="boolean", nullable=true)
     */
    private $isbest;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=true)
     */
    private $langid;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=100, nullable=true)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="replydate", type="integer", nullable=true)
     */
    private $replydate;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxis", type="integer", nullable=true)
     */
    private $taxis;

    /**
     * @var string
     *
     * @ORM\Column(name="htmltype", type="string", nullable=true)
     */
    private $htmltype;

    /**
     * @var string
     *
     * @ORM\Column(name="tplfile", type="string", length=100, nullable=true)
     */
    private $tplfile;

    /**
     * @var float
     *
     * @ORM\Column(name="star", type="float", precision=10, scale=0, nullable=true)
     */
    private $star;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_currency", type="string", length=3, nullable=true)
     */
    private $priceCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer", nullable=true)
     */
    private $qty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_qty", type="boolean", nullable=true)
     */
    private $isQty;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_unit", type="string", length=20, nullable=true)
     */
    private $qtyUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="s_rg", type="string", length=222, nullable=true)
     */
    private $sRg;

    /**
     * @var string
     *
     * @ORM\Column(name="s_qx", type="string", length=222, nullable=true)
     */
    private $sQx;

    /**
     * @var string
     *
     * @ORM\Column(name="s_ns", type="string", length=22, nullable=true)
     */
    private $sNs;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=255, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="qx", type="string", length=222, nullable=true)
     */
    private $qx;

    /**
     * @var string
     *
     * @ORM\Column(name="ns", type="string", length=222, nullable=true)
     */
    private $ns;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set moduleId
     *
     * @param integer $moduleId
     * @return Juniu2List
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
     * Set cateId
     *
     * @param integer $cateId
     * @return Juniu2List
     */
    public function setCateId($cateId)
    {
        $this->cateId = $cateId;
    
        return $this;
    }

    /**
     * Get cateId
     *
     * @return integer 
     */
    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2List
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
     * Set subtitle
     *
     * @param string $subtitle
     * @return Juniu2List
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    
        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string 
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Juniu2List
     */
    public function setStyle($style)
    {
        $this->style = $style;
    
        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2List
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
     * Set hidden
     *
     * @param boolean $hidden
     * @return Juniu2List
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    
        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set linkUrl
     *
     * @param string $linkUrl
     * @return Juniu2List
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
    
        return $this;
    }

    /**
     * Get linkUrl
     *
     * @return string 
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * Set target
     *
     * @param boolean $target
     * @return Juniu2List
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
     * Set author
     *
     * @param string $author
     * @return Juniu2List
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set authorType
     *
     * @param string $authorType
     * @return Juniu2List
     */
    public function setAuthorType($authorType)
    {
        $this->authorType = $authorType;
    
        return $this;
    }

    /**
     * Get authorType
     *
     * @return string 
     */
    public function getAuthorType()
    {
        return $this->authorType;
    }

    /**
     * Set seotitle
     *
     * @param string $seotitle
     * @return Juniu2List
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
     * @return Juniu2List
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
     * @return Juniu2List
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
     * Set note
     *
     * @param string $note
     * @return Juniu2List
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
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2List
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
     * Set hits
     *
     * @param integer $hits
     * @return Juniu2List
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
    
        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set goodHits
     *
     * @param integer $goodHits
     * @return Juniu2List
     */
    public function setGoodHits($goodHits)
    {
        $this->goodHits = $goodHits;
    
        return $this;
    }

    /**
     * Get goodHits
     *
     * @return integer 
     */
    public function getGoodHits()
    {
        return $this->goodHits;
    }

    /**
     * Set badHits
     *
     * @param integer $badHits
     * @return Juniu2List
     */
    public function setBadHits($badHits)
    {
        $this->badHits = $badHits;
    
        return $this;
    }

    /**
     * Get badHits
     *
     * @return integer 
     */
    public function getBadHits()
    {
        return $this->badHits;
    }

    /**
     * Set postDate
     *
     * @param integer $postDate
     * @return Juniu2List
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    
        return $this;
    }

    /**
     * Get postDate
     *
     * @return integer 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set modifyDate
     *
     * @param integer $modifyDate
     * @return Juniu2List
     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;
    
        return $this;
    }

    /**
     * Get modifyDate
     *
     * @return integer 
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * Set thumbId
     *
     * @param integer $thumbId
     * @return Juniu2List
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
     * Set istop
     *
     * @param boolean $istop
     * @return Juniu2List
     */
    public function setIstop($istop)
    {
        $this->istop = $istop;
    
        return $this;
    }

    /**
     * Get istop
     *
     * @return boolean 
     */
    public function getIstop()
    {
        return $this->istop;
    }

    /**
     * Set isvouch
     *
     * @param boolean $isvouch
     * @return Juniu2List
     */
    public function setIsvouch($isvouch)
    {
        $this->isvouch = $isvouch;
    
        return $this;
    }

    /**
     * Get isvouch
     *
     * @return boolean 
     */
    public function getIsvouch()
    {
        return $this->isvouch;
    }

    /**
     * Set isbest
     *
     * @param boolean $isbest
     * @return Juniu2List
     */
    public function setIsbest($isbest)
    {
        $this->isbest = $isbest;
    
        return $this;
    }

    /**
     * Get isbest
     *
     * @return boolean 
     */
    public function getIsbest()
    {
        return $this->isbest;
    }

    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2List
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
     * Set points
     *
     * @param integer $points
     * @return Juniu2List
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Juniu2List
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
     * Set replydate
     *
     * @param integer $replydate
     * @return Juniu2List
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
     * Set taxis
     *
     * @param integer $taxis
     * @return Juniu2List
     */
    public function setTaxis($taxis)
    {
        $this->taxis = $taxis;
    
        return $this;
    }

    /**
     * Get taxis
     *
     * @return integer 
     */
    public function getTaxis()
    {
        return $this->taxis;
    }

    /**
     * Set htmltype
     *
     * @param string $htmltype
     * @return Juniu2List
     */
    public function setHtmltype($htmltype)
    {
        $this->htmltype = $htmltype;
    
        return $this;
    }

    /**
     * Get htmltype
     *
     * @return string 
     */
    public function getHtmltype()
    {
        return $this->htmltype;
    }

    /**
     * Set tplfile
     *
     * @param string $tplfile
     * @return Juniu2List
     */
    public function setTplfile($tplfile)
    {
        $this->tplfile = $tplfile;
    
        return $this;
    }

    /**
     * Get tplfile
     *
     * @return string 
     */
    public function getTplfile()
    {
        return $this->tplfile;
    }

    /**
     * Set star
     *
     * @param float $star
     * @return Juniu2List
     */
    public function setStar($star)
    {
        $this->star = $star;
    
        return $this;
    }

    /**
     * Get star
     *
     * @return float 
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Juniu2List
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceCurrency
     *
     * @param string $priceCurrency
     * @return Juniu2List
     */
    public function setPriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
    
        return $this;
    }

    /**
     * Get priceCurrency
     *
     * @return string 
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return Juniu2List
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     * @return Juniu2List
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    
        return $this;
    }

    /**
     * Get qty
     *
     * @return integer 
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set isQty
     *
     * @param boolean $isQty
     * @return Juniu2List
     */
    public function setIsQty($isQty)
    {
        $this->isQty = $isQty;
    
        return $this;
    }

    /**
     * Get isQty
     *
     * @return boolean 
     */
    public function getIsQty()
    {
        return $this->isQty;
    }

    /**
     * Set qtyUnit
     *
     * @param string $qtyUnit
     * @return Juniu2List
     */
    public function setQtyUnit($qtyUnit)
    {
        $this->qtyUnit = $qtyUnit;
    
        return $this;
    }

    /**
     * Get qtyUnit
     *
     * @return string 
     */
    public function getQtyUnit()
    {
        return $this->qtyUnit;
    }

    /**
     * Set sRg
     *
     * @param string $sRg
     * @return Juniu2List
     */
    public function setSRg($sRg)
    {
        $this->sRg = $sRg;
    
        return $this;
    }

    /**
     * Get sRg
     *
     * @return string 
     */
    public function getSRg()
    {
        return $this->sRg;
    }

    /**
     * Set sQx
     *
     * @param string $sQx
     * @return Juniu2List
     */
    public function setSQx($sQx)
    {
        $this->sQx = $sQx;
    
        return $this;
    }

    /**
     * Get sQx
     *
     * @return string 
     */
    public function getSQx()
    {
        return $this->sQx;
    }

    /**
     * Set sNs
     *
     * @param string $sNs
     * @return Juniu2List
     */
    public function setSNs($sNs)
    {
        $this->sNs = $sNs;
    
        return $this;
    }

    /**
     * Get sNs
     *
     * @return string 
     */
    public function getSNs()
    {
        return $this->sNs;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return Juniu2List
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    
        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set qx
     *
     * @param string $qx
     * @return Juniu2List
     */
    public function setQx($qx)
    {
        $this->qx = $qx;
    
        return $this;
    }

    /**
     * Get qx
     *
     * @return string 
     */
    public function getQx()
    {
        return $this->qx;
    }

    /**
     * Set ns
     *
     * @param string $ns
     * @return Juniu2List
     */
    public function setNs($ns)
    {
        $this->ns = $ns;
    
        return $this;
    }

    /**
     * Get ns
     *
     * @return string 
     */
    public function getNs()
    {
        return $this->ns;
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
