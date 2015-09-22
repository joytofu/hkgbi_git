<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2CollectionFiles
 *
 * @ORM\Table(name="juniu2_collection_files", indexes={@ORM\Index(name="lid", columns={"lid"})})
 * @ORM\Entity
 */
class Juniu2CollectionFiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="lid", type="integer", nullable=false)
     */
    private $lid;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=100, nullable=false)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=10, nullable=false)
     */
    private $ext;

    /**
     * @var string
     *
     * @ORM\Column(name="srcurl", type="string", length=255, nullable=false)
     */
    private $srcurl;

    /**
     * @var string
     *
     * @ORM\Column(name="newurl", type="string", length=255, nullable=false)
     */
    private $newurl;

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
     * @return Juniu2CollectionFiles
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
     * Set lid
     *
     * @param integer $lid
     * @return Juniu2CollectionFiles
     */
    public function setLid($lid)
    {
        $this->lid = $lid;
    
        return $this;
    }

    /**
     * Get lid
     *
     * @return integer 
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return Juniu2CollectionFiles
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set ext
     *
     * @param string $ext
     * @return Juniu2CollectionFiles
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    
        return $this;
    }

    /**
     * Get ext
     *
     * @return string 
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set srcurl
     *
     * @param string $srcurl
     * @return Juniu2CollectionFiles
     */
    public function setSrcurl($srcurl)
    {
        $this->srcurl = $srcurl;
    
        return $this;
    }

    /**
     * Get srcurl
     *
     * @return string 
     */
    public function getSrcurl()
    {
        return $this->srcurl;
    }

    /**
     * Set newurl
     *
     * @param string $newurl
     * @return Juniu2CollectionFiles
     */
    public function setNewurl($newurl)
    {
        $this->newurl = $newurl;
    
        return $this;
    }

    /**
     * Get newurl
     *
     * @return string 
     */
    public function getNewurl()
    {
        return $this->newurl;
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
