<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Plugins
 *
 * @ORM\Table(name="juniu2_plugins")
 * @ORM\Entity
 */
class Juniu2Plugins
{
    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=10, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=100, nullable=false)
     */
    private $identifier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

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
     * @ORM\Column(name="uninstall_sql", type="text", nullable=false)
     */
    private $uninstallSql;

    /**
     * @var string
     *
     * @ORM\Column(name="install_sql", type="text", nullable=false)
     */
    private $installSql;

    /**
     * @var string
     *
     * @ORM\Column(name="hooks", type="text", nullable=false)
     */
    private $hooks;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=20, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="postdate", type="integer", nullable=false)
     */
    private $postdate;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="text", nullable=false)
     */
    private $ext;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Plugins
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
     * @return Juniu2Plugins
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
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Plugins
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
     * Set title
     *
     * @param string $title
     * @return Juniu2Plugins
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
     * @return Juniu2Plugins
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
     * Set uninstallSql
     *
     * @param string $uninstallSql
     * @return Juniu2Plugins
     */
    public function setUninstallSql($uninstallSql)
    {
        $this->uninstallSql = $uninstallSql;
    
        return $this;
    }

    /**
     * Get uninstallSql
     *
     * @return string 
     */
    public function getUninstallSql()
    {
        return $this->uninstallSql;
    }

    /**
     * Set installSql
     *
     * @param string $installSql
     * @return Juniu2Plugins
     */
    public function setInstallSql($installSql)
    {
        $this->installSql = $installSql;
    
        return $this;
    }

    /**
     * Get installSql
     *
     * @return string 
     */
    public function getInstallSql()
    {
        return $this->installSql;
    }

    /**
     * Set hooks
     *
     * @param string $hooks
     * @return Juniu2Plugins
     */
    public function setHooks($hooks)
    {
        $this->hooks = $hooks;
    
        return $this;
    }

    /**
     * Get hooks
     *
     * @return string 
     */
    public function getHooks()
    {
        return $this->hooks;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Plugins
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
     * Set version
     *
     * @param string $version
     * @return Juniu2Plugins
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Juniu2Plugins
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
     * Set postdate
     *
     * @param integer $postdate
     * @return Juniu2Plugins
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
     * Set ext
     *
     * @param string $ext
     * @return Juniu2Plugins
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
