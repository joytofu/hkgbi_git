<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Module
 *
 * @ORM\Table(name="juniu2_module", indexes={@ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class Juniu2Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=32, nullable=false)
     */
    private $identifier;

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
     * @ORM\Column(name="ctrl_init", type="string", length=100, nullable=false)
     */
    private $ctrlInit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_system", type="boolean", nullable=false)
     */
    private $ifSystem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_cate", type="boolean", nullable=false)
     */
    private $ifCate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_biz", type="boolean", nullable=false)
     */
    private $ifBiz;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_propety", type="boolean", nullable=false)
     */
    private $ifPropety;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_hits", type="boolean", nullable=false)
     */
    private $ifHits;

    /**
     * @var string
     *
     * @ORM\Column(name="popedom", type="string", length=255, nullable=false)
     */
    private $popedom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_thumb", type="boolean", nullable=false)
     */
    private $ifThumb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_thumb_m", type="boolean", nullable=false)
     */
    private $ifThumbM;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_point", type="boolean", nullable=false)
     */
    private $ifPoint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_url_m", type="boolean", nullable=false)
     */
    private $ifUrlM;

    /**
     * @var string
     *
     * @ORM\Column(name="inpic", type="string", length=100, nullable=false)
     */
    private $inpic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="insearch", type="boolean", nullable=false)
     */
    private $insearch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_content", type="boolean", nullable=false)
     */
    private $ifContent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_email", type="boolean", nullable=false)
     */
    private $ifEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="psize", type="boolean", nullable=false)
     */
    private $psize;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_subtitle", type="boolean", nullable=false)
     */
    private $ifSubtitle;

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
     * @ORM\Column(name="tplset", type="string", nullable=false)
     */
    private $tplset;

    /**
     * @var string
     *
     * @ORM\Column(name="title_nickname", type="string", length=50, nullable=false)
     */
    private $titleNickname;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle_nickname", type="string", length=50, nullable=false)
     */
    private $subtitleNickname;

    /**
     * @var string
     *
     * @ORM\Column(name="sign_nickname", type="string", length=50, nullable=false)
     */
    private $signNickname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_sign_m", type="boolean", nullable=false)
     */
    private $ifSignM;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_ext", type="boolean", nullable=false)
     */
    private $ifExt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_des", type="boolean", nullable=false)
     */
    private $ifDes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_list", type="boolean", nullable=false)
     */
    private $ifList;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_msg", type="boolean", nullable=false)
     */
    private $ifMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="layout", type="string", length=255, nullable=false)
     */
    private $layout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_hidden", type="boolean", nullable=false)
     */
    private $ifHidden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lock_identifier", type="boolean", nullable=false)
     */
    private $lockIdentifier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="if_pl_add", type="boolean", nullable=false)
     */
    private $ifPlAdd;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return Juniu2Module
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    
        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Module
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
     * Set identifier
     *
     * @param string $identifier
     * @return Juniu2Module
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
     * Set title
     *
     * @param string $title
     * @return Juniu2Module
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
     * @return Juniu2Module
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
     * Set ctrlInit
     *
     * @param string $ctrlInit
     * @return Juniu2Module
     */
    public function setCtrlInit($ctrlInit)
    {
        $this->ctrlInit = $ctrlInit;
    
        return $this;
    }

    /**
     * Get ctrlInit
     *
     * @return string 
     */
    public function getCtrlInit()
    {
        return $this->ctrlInit;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Module
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
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Module
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
     * Set ifSystem
     *
     * @param boolean $ifSystem
     * @return Juniu2Module
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
     * Set ifCate
     *
     * @param boolean $ifCate
     * @return Juniu2Module
     */
    public function setIfCate($ifCate)
    {
        $this->ifCate = $ifCate;
    
        return $this;
    }

    /**
     * Get ifCate
     *
     * @return boolean 
     */
    public function getIfCate()
    {
        return $this->ifCate;
    }

    /**
     * Set ifBiz
     *
     * @param boolean $ifBiz
     * @return Juniu2Module
     */
    public function setIfBiz($ifBiz)
    {
        $this->ifBiz = $ifBiz;
    
        return $this;
    }

    /**
     * Get ifBiz
     *
     * @return boolean 
     */
    public function getIfBiz()
    {
        return $this->ifBiz;
    }

    /**
     * Set ifPropety
     *
     * @param boolean $ifPropety
     * @return Juniu2Module
     */
    public function setIfPropety($ifPropety)
    {
        $this->ifPropety = $ifPropety;
    
        return $this;
    }

    /**
     * Get ifPropety
     *
     * @return boolean 
     */
    public function getIfPropety()
    {
        return $this->ifPropety;
    }

    /**
     * Set ifHits
     *
     * @param boolean $ifHits
     * @return Juniu2Module
     */
    public function setIfHits($ifHits)
    {
        $this->ifHits = $ifHits;
    
        return $this;
    }

    /**
     * Get ifHits
     *
     * @return boolean 
     */
    public function getIfHits()
    {
        return $this->ifHits;
    }

    /**
     * Set popedom
     *
     * @param string $popedom
     * @return Juniu2Module
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
     * Set ifThumb
     *
     * @param boolean $ifThumb
     * @return Juniu2Module
     */
    public function setIfThumb($ifThumb)
    {
        $this->ifThumb = $ifThumb;
    
        return $this;
    }

    /**
     * Get ifThumb
     *
     * @return boolean 
     */
    public function getIfThumb()
    {
        return $this->ifThumb;
    }

    /**
     * Set ifThumbM
     *
     * @param boolean $ifThumbM
     * @return Juniu2Module
     */
    public function setIfThumbM($ifThumbM)
    {
        $this->ifThumbM = $ifThumbM;
    
        return $this;
    }

    /**
     * Get ifThumbM
     *
     * @return boolean 
     */
    public function getIfThumbM()
    {
        return $this->ifThumbM;
    }

    /**
     * Set ifPoint
     *
     * @param boolean $ifPoint
     * @return Juniu2Module
     */
    public function setIfPoint($ifPoint)
    {
        $this->ifPoint = $ifPoint;
    
        return $this;
    }

    /**
     * Get ifPoint
     *
     * @return boolean 
     */
    public function getIfPoint()
    {
        return $this->ifPoint;
    }

    /**
     * Set ifUrlM
     *
     * @param boolean $ifUrlM
     * @return Juniu2Module
     */
    public function setIfUrlM($ifUrlM)
    {
        $this->ifUrlM = $ifUrlM;
    
        return $this;
    }

    /**
     * Get ifUrlM
     *
     * @return boolean 
     */
    public function getIfUrlM()
    {
        return $this->ifUrlM;
    }

    /**
     * Set inpic
     *
     * @param string $inpic
     * @return Juniu2Module
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
     * Set insearch
     *
     * @param boolean $insearch
     * @return Juniu2Module
     */
    public function setInsearch($insearch)
    {
        $this->insearch = $insearch;
    
        return $this;
    }

    /**
     * Get insearch
     *
     * @return boolean 
     */
    public function getInsearch()
    {
        return $this->insearch;
    }

    /**
     * Set ifContent
     *
     * @param boolean $ifContent
     * @return Juniu2Module
     */
    public function setIfContent($ifContent)
    {
        $this->ifContent = $ifContent;
    
        return $this;
    }

    /**
     * Get ifContent
     *
     * @return boolean 
     */
    public function getIfContent()
    {
        return $this->ifContent;
    }

    /**
     * Set ifEmail
     *
     * @param boolean $ifEmail
     * @return Juniu2Module
     */
    public function setIfEmail($ifEmail)
    {
        $this->ifEmail = $ifEmail;
    
        return $this;
    }

    /**
     * Get ifEmail
     *
     * @return boolean 
     */
    public function getIfEmail()
    {
        return $this->ifEmail;
    }

    /**
     * Set psize
     *
     * @param boolean $psize
     * @return Juniu2Module
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
     * Set ifSubtitle
     *
     * @param boolean $ifSubtitle
     * @return Juniu2Module
     */
    public function setIfSubtitle($ifSubtitle)
    {
        $this->ifSubtitle = $ifSubtitle;
    
        return $this;
    }

    /**
     * Get ifSubtitle
     *
     * @return boolean 
     */
    public function getIfSubtitle()
    {
        return $this->ifSubtitle;
    }

    /**
     * Set ico
     *
     * @param string $ico
     * @return Juniu2Module
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
     * @return Juniu2Module
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
     * @return Juniu2Module
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
     * @return Juniu2Module
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
     * Set tplset
     *
     * @param string $tplset
     * @return Juniu2Module
     */
    public function setTplset($tplset)
    {
        $this->tplset = $tplset;
    
        return $this;
    }

    /**
     * Get tplset
     *
     * @return string 
     */
    public function getTplset()
    {
        return $this->tplset;
    }

    /**
     * Set titleNickname
     *
     * @param string $titleNickname
     * @return Juniu2Module
     */
    public function setTitleNickname($titleNickname)
    {
        $this->titleNickname = $titleNickname;
    
        return $this;
    }

    /**
     * Get titleNickname
     *
     * @return string 
     */
    public function getTitleNickname()
    {
        return $this->titleNickname;
    }

    /**
     * Set subtitleNickname
     *
     * @param string $subtitleNickname
     * @return Juniu2Module
     */
    public function setSubtitleNickname($subtitleNickname)
    {
        $this->subtitleNickname = $subtitleNickname;
    
        return $this;
    }

    /**
     * Get subtitleNickname
     *
     * @return string 
     */
    public function getSubtitleNickname()
    {
        return $this->subtitleNickname;
    }

    /**
     * Set signNickname
     *
     * @param string $signNickname
     * @return Juniu2Module
     */
    public function setSignNickname($signNickname)
    {
        $this->signNickname = $signNickname;
    
        return $this;
    }

    /**
     * Get signNickname
     *
     * @return string 
     */
    public function getSignNickname()
    {
        return $this->signNickname;
    }

    /**
     * Set ifSignM
     *
     * @param boolean $ifSignM
     * @return Juniu2Module
     */
    public function setIfSignM($ifSignM)
    {
        $this->ifSignM = $ifSignM;
    
        return $this;
    }

    /**
     * Get ifSignM
     *
     * @return boolean 
     */
    public function getIfSignM()
    {
        return $this->ifSignM;
    }

    /**
     * Set ifExt
     *
     * @param boolean $ifExt
     * @return Juniu2Module
     */
    public function setIfExt($ifExt)
    {
        $this->ifExt = $ifExt;
    
        return $this;
    }

    /**
     * Get ifExt
     *
     * @return boolean 
     */
    public function getIfExt()
    {
        return $this->ifExt;
    }

    /**
     * Set ifDes
     *
     * @param boolean $ifDes
     * @return Juniu2Module
     */
    public function setIfDes($ifDes)
    {
        $this->ifDes = $ifDes;
    
        return $this;
    }

    /**
     * Get ifDes
     *
     * @return boolean 
     */
    public function getIfDes()
    {
        return $this->ifDes;
    }

    /**
     * Set ifList
     *
     * @param boolean $ifList
     * @return Juniu2Module
     */
    public function setIfList($ifList)
    {
        $this->ifList = $ifList;
    
        return $this;
    }

    /**
     * Get ifList
     *
     * @return boolean 
     */
    public function getIfList()
    {
        return $this->ifList;
    }

    /**
     * Set ifMsg
     *
     * @param boolean $ifMsg
     * @return Juniu2Module
     */
    public function setIfMsg($ifMsg)
    {
        $this->ifMsg = $ifMsg;
    
        return $this;
    }

    /**
     * Get ifMsg
     *
     * @return boolean 
     */
    public function getIfMsg()
    {
        return $this->ifMsg;
    }

    /**
     * Set layout
     *
     * @param string $layout
     * @return Juniu2Module
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    
        return $this;
    }

    /**
     * Get layout
     *
     * @return string 
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set ifHidden
     *
     * @param boolean $ifHidden
     * @return Juniu2Module
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
     * Set lockIdentifier
     *
     * @param boolean $lockIdentifier
     * @return Juniu2Module
     */
    public function setLockIdentifier($lockIdentifier)
    {
        $this->lockIdentifier = $lockIdentifier;
    
        return $this;
    }

    /**
     * Get lockIdentifier
     *
     * @return boolean 
     */
    public function getLockIdentifier()
    {
        return $this->lockIdentifier;
    }

    /**
     * Set ifPlAdd
     *
     * @param boolean $ifPlAdd
     * @return Juniu2Module
     */
    public function setIfPlAdd($ifPlAdd)
    {
        $this->ifPlAdd = $ifPlAdd;
    
        return $this;
    }

    /**
     * Get ifPlAdd
     *
     * @return boolean 
     */
    public function getIfPlAdd()
    {
        return $this->ifPlAdd;
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
