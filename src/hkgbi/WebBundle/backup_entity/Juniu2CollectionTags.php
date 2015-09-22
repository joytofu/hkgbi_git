<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2CollectionTags
 *
 * @ORM\Table(name="juniu2_collection_tags", indexes={@ORM\Index(name="cid", columns={"cid"})})
 * @ORM\Entity
 */
class Juniu2CollectionTags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=100, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="tags_type", type="string", nullable=false)
     */
    private $tagsType;

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="string", length=255, nullable=false)
     */
    private $rules;

    /**
     * @var string
     *
     * @ORM\Column(name="rules_start", type="string", length=255, nullable=false)
     */
    private $rulesStart;

    /**
     * @var string
     *
     * @ORM\Column(name="rules_end", type="string", length=255, nullable=false)
     */
    private $rulesEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="del", type="text", nullable=false)
     */
    private $del;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_url", type="boolean", nullable=false)
     */
    private $delUrl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_html", type="boolean", nullable=false)
     */
    private $delHtml;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_font", type="boolean", nullable=false)
     */
    private $delFont;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_table", type="boolean", nullable=false)
     */
    private $delTable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_span", type="boolean", nullable=false)
     */
    private $delSpan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_bold", type="boolean", nullable=false)
     */
    private $delBold;

    /**
     * @var string
     *
     * @ORM\Column(name="suburl_start", type="string", length=255, nullable=false)
     */
    private $suburlStart;

    /**
     * @var string
     *
     * @ORM\Column(name="suburl_end", type="string", length=255, nullable=false)
     */
    private $suburlEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="ifsystem", type="string", nullable=false)
     */
    private $ifsystem;

    /**
     * @var string
     *
     * @ORM\Column(name="post_save", type="string", nullable=false)
     */
    private $postSave;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cid
     *
     * @param integer $cid
     * @return Juniu2CollectionTags
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
     * Set title
     *
     * @param string $title
     * @return Juniu2CollectionTags
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
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2CollectionTags
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
     * Set tagsType
     *
     * @param string $tagsType
     * @return Juniu2CollectionTags
     */
    public function setTagsType($tagsType)
    {
        $this->tagsType = $tagsType;
    
        return $this;
    }

    /**
     * Get tagsType
     *
     * @return string 
     */
    public function getTagsType()
    {
        return $this->tagsType;
    }

    /**
     * Set rules
     *
     * @param string $rules
     * @return Juniu2CollectionTags
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
    
        return $this;
    }

    /**
     * Get rules
     *
     * @return string 
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set rulesStart
     *
     * @param string $rulesStart
     * @return Juniu2CollectionTags
     */
    public function setRulesStart($rulesStart)
    {
        $this->rulesStart = $rulesStart;
    
        return $this;
    }

    /**
     * Get rulesStart
     *
     * @return string 
     */
    public function getRulesStart()
    {
        return $this->rulesStart;
    }

    /**
     * Set rulesEnd
     *
     * @param string $rulesEnd
     * @return Juniu2CollectionTags
     */
    public function setRulesEnd($rulesEnd)
    {
        $this->rulesEnd = $rulesEnd;
    
        return $this;
    }

    /**
     * Get rulesEnd
     *
     * @return string 
     */
    public function getRulesEnd()
    {
        return $this->rulesEnd;
    }

    /**
     * Set del
     *
     * @param string $del
     * @return Juniu2CollectionTags
     */
    public function setDel($del)
    {
        $this->del = $del;
    
        return $this;
    }

    /**
     * Get del
     *
     * @return string 
     */
    public function getDel()
    {
        return $this->del;
    }

    /**
     * Set delUrl
     *
     * @param boolean $delUrl
     * @return Juniu2CollectionTags
     */
    public function setDelUrl($delUrl)
    {
        $this->delUrl = $delUrl;
    
        return $this;
    }

    /**
     * Get delUrl
     *
     * @return boolean 
     */
    public function getDelUrl()
    {
        return $this->delUrl;
    }

    /**
     * Set delHtml
     *
     * @param boolean $delHtml
     * @return Juniu2CollectionTags
     */
    public function setDelHtml($delHtml)
    {
        $this->delHtml = $delHtml;
    
        return $this;
    }

    /**
     * Get delHtml
     *
     * @return boolean 
     */
    public function getDelHtml()
    {
        return $this->delHtml;
    }

    /**
     * Set delFont
     *
     * @param boolean $delFont
     * @return Juniu2CollectionTags
     */
    public function setDelFont($delFont)
    {
        $this->delFont = $delFont;
    
        return $this;
    }

    /**
     * Get delFont
     *
     * @return boolean 
     */
    public function getDelFont()
    {
        return $this->delFont;
    }

    /**
     * Set delTable
     *
     * @param boolean $delTable
     * @return Juniu2CollectionTags
     */
    public function setDelTable($delTable)
    {
        $this->delTable = $delTable;
    
        return $this;
    }

    /**
     * Get delTable
     *
     * @return boolean 
     */
    public function getDelTable()
    {
        return $this->delTable;
    }

    /**
     * Set delSpan
     *
     * @param boolean $delSpan
     * @return Juniu2CollectionTags
     */
    public function setDelSpan($delSpan)
    {
        $this->delSpan = $delSpan;
    
        return $this;
    }

    /**
     * Get delSpan
     *
     * @return boolean 
     */
    public function getDelSpan()
    {
        return $this->delSpan;
    }

    /**
     * Set delBold
     *
     * @param boolean $delBold
     * @return Juniu2CollectionTags
     */
    public function setDelBold($delBold)
    {
        $this->delBold = $delBold;
    
        return $this;
    }

    /**
     * Get delBold
     *
     * @return boolean 
     */
    public function getDelBold()
    {
        return $this->delBold;
    }

    /**
     * Set suburlStart
     *
     * @param string $suburlStart
     * @return Juniu2CollectionTags
     */
    public function setSuburlStart($suburlStart)
    {
        $this->suburlStart = $suburlStart;
    
        return $this;
    }

    /**
     * Get suburlStart
     *
     * @return string 
     */
    public function getSuburlStart()
    {
        return $this->suburlStart;
    }

    /**
     * Set suburlEnd
     *
     * @param string $suburlEnd
     * @return Juniu2CollectionTags
     */
    public function setSuburlEnd($suburlEnd)
    {
        $this->suburlEnd = $suburlEnd;
    
        return $this;
    }

    /**
     * Get suburlEnd
     *
     * @return string 
     */
    public function getSuburlEnd()
    {
        return $this->suburlEnd;
    }

    /**
     * Set ifsystem
     *
     * @param string $ifsystem
     * @return Juniu2CollectionTags
     */
    public function setIfsystem($ifsystem)
    {
        $this->ifsystem = $ifsystem;
    
        return $this;
    }

    /**
     * Get ifsystem
     *
     * @return string 
     */
    public function getIfsystem()
    {
        return $this->ifsystem;
    }

    /**
     * Set postSave
     *
     * @param string $postSave
     * @return Juniu2CollectionTags
     */
    public function setPostSave($postSave)
    {
        $this->postSave = $postSave;
    
        return $this;
    }

    /**
     * Get postSave
     *
     * @return string 
     */
    public function getPostSave()
    {
        return $this->postSave;
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
