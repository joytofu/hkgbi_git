<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Collection
 *
 * @ORM\Table(name="juniu2_collection")
 * @ORM\Entity
 */
class Juniu2Collection
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="linkurl", type="string", length=255, nullable=false)
     */
    private $linkurl;

    /**
     * @var string
     *
     * @ORM\Column(name="url_charset", type="string", length=20, nullable=false)
     */
    private $urlCharset;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalcount", type="integer", nullable=false)
     */
    private $totalcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cateid", type="integer", nullable=false)
     */
    private $cateid;

    /**
     * @var string
     *
     * @ORM\Column(name="listurl", type="text", nullable=false)
     */
    private $listurl;

    /**
     * @var string
     *
     * @ORM\Column(name="list_tags_start", type="string", length=255, nullable=false)
     */
    private $listTagsStart;

    /**
     * @var string
     *
     * @ORM\Column(name="list_tags_end", type="string", length=255, nullable=false)
     */
    private $listTagsEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="url_tags", type="string", length=255, nullable=false)
     */
    private $urlTags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_gzip", type="boolean", nullable=false)
     */
    private $isGzip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_proxy", type="boolean", nullable=false)
     */
    private $isProxy;

    /**
     * @var string
     *
     * @ORM\Column(name="proxy_service", type="string", length=255, nullable=false)
     */
    private $proxyService;

    /**
     * @var string
     *
     * @ORM\Column(name="proxy_user", type="string", length=100, nullable=false)
     */
    private $proxyUser;

    /**
     * @var string
     *
     * @ORM\Column(name="proxy_pass", type="string", length=100, nullable=false)
     */
    private $proxyPass;

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
     * @return Juniu2Collection
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
     * Set linkurl
     *
     * @param string $linkurl
     * @return Juniu2Collection
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
     * Set urlCharset
     *
     * @param string $urlCharset
     * @return Juniu2Collection
     */
    public function setUrlCharset($urlCharset)
    {
        $this->urlCharset = $urlCharset;
    
        return $this;
    }

    /**
     * Get urlCharset
     *
     * @return string 
     */
    public function getUrlCharset()
    {
        return $this->urlCharset;
    }

    /**
     * Set totalcount
     *
     * @param integer $totalcount
     * @return Juniu2Collection
     */
    public function setTotalcount($totalcount)
    {
        $this->totalcount = $totalcount;
    
        return $this;
    }

    /**
     * Get totalcount
     *
     * @return integer 
     */
    public function getTotalcount()
    {
        return $this->totalcount;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     * @return Juniu2Collection
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
     * Set cateid
     *
     * @param integer $cateid
     * @return Juniu2Collection
     */
    public function setCateid($cateid)
    {
        $this->cateid = $cateid;
    
        return $this;
    }

    /**
     * Get cateid
     *
     * @return integer 
     */
    public function getCateid()
    {
        return $this->cateid;
    }

    /**
     * Set listurl
     *
     * @param string $listurl
     * @return Juniu2Collection
     */
    public function setListurl($listurl)
    {
        $this->listurl = $listurl;
    
        return $this;
    }

    /**
     * Get listurl
     *
     * @return string 
     */
    public function getListurl()
    {
        return $this->listurl;
    }

    /**
     * Set listTagsStart
     *
     * @param string $listTagsStart
     * @return Juniu2Collection
     */
    public function setListTagsStart($listTagsStart)
    {
        $this->listTagsStart = $listTagsStart;
    
        return $this;
    }

    /**
     * Get listTagsStart
     *
     * @return string 
     */
    public function getListTagsStart()
    {
        return $this->listTagsStart;
    }

    /**
     * Set listTagsEnd
     *
     * @param string $listTagsEnd
     * @return Juniu2Collection
     */
    public function setListTagsEnd($listTagsEnd)
    {
        $this->listTagsEnd = $listTagsEnd;
    
        return $this;
    }

    /**
     * Get listTagsEnd
     *
     * @return string 
     */
    public function getListTagsEnd()
    {
        return $this->listTagsEnd;
    }

    /**
     * Set urlTags
     *
     * @param string $urlTags
     * @return Juniu2Collection
     */
    public function setUrlTags($urlTags)
    {
        $this->urlTags = $urlTags;
    
        return $this;
    }

    /**
     * Get urlTags
     *
     * @return string 
     */
    public function getUrlTags()
    {
        return $this->urlTags;
    }

    /**
     * Set isGzip
     *
     * @param boolean $isGzip
     * @return Juniu2Collection
     */
    public function setIsGzip($isGzip)
    {
        $this->isGzip = $isGzip;
    
        return $this;
    }

    /**
     * Get isGzip
     *
     * @return boolean 
     */
    public function getIsGzip()
    {
        return $this->isGzip;
    }

    /**
     * Set isProxy
     *
     * @param boolean $isProxy
     * @return Juniu2Collection
     */
    public function setIsProxy($isProxy)
    {
        $this->isProxy = $isProxy;
    
        return $this;
    }

    /**
     * Get isProxy
     *
     * @return boolean 
     */
    public function getIsProxy()
    {
        return $this->isProxy;
    }

    /**
     * Set proxyService
     *
     * @param string $proxyService
     * @return Juniu2Collection
     */
    public function setProxyService($proxyService)
    {
        $this->proxyService = $proxyService;
    
        return $this;
    }

    /**
     * Get proxyService
     *
     * @return string 
     */
    public function getProxyService()
    {
        return $this->proxyService;
    }

    /**
     * Set proxyUser
     *
     * @param string $proxyUser
     * @return Juniu2Collection
     */
    public function setProxyUser($proxyUser)
    {
        $this->proxyUser = $proxyUser;
    
        return $this;
    }

    /**
     * Get proxyUser
     *
     * @return string 
     */
    public function getProxyUser()
    {
        return $this->proxyUser;
    }

    /**
     * Set proxyPass
     *
     * @param string $proxyPass
     * @return Juniu2Collection
     */
    public function setProxyPass($proxyPass)
    {
        $this->proxyPass = $proxyPass;
    
        return $this;
    }

    /**
     * Get proxyPass
     *
     * @return string 
     */
    public function getProxyPass()
    {
        return $this->proxyPass;
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
