<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Langs
 *
 * @ORM\Table(name="juniu2_langs", indexes={@ORM\Index(name="tbl_id", columns={"tbl_id"})})
 * @ORM\Entity
 */
class Juniu2Langs
{
    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=32, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="tbl", type="string", length=100, nullable=false)
     */
    private $tbl;

    /**
     * @var integer
     *
     * @ORM\Column(name="tbl_id", type="integer", nullable=false)
     */
    private $tblId;

    /**
     * @var string
     *
     * @ORM\Column(name="keys", type="string", length=100, nullable=false)
     */
    private $keys;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=255, nullable=false)
     */
    private $val;

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
     * @return Juniu2Langs
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
     * Set tbl
     *
     * @param string $tbl
     * @return Juniu2Langs
     */
    public function setTbl($tbl)
    {
        $this->tbl = $tbl;
    
        return $this;
    }

    /**
     * Get tbl
     *
     * @return string 
     */
    public function getTbl()
    {
        return $this->tbl;
    }

    /**
     * Set tblId
     *
     * @param integer $tblId
     * @return Juniu2Langs
     */
    public function setTblId($tblId)
    {
        $this->tblId = $tblId;
    
        return $this;
    }

    /**
     * Get tblId
     *
     * @return integer 
     */
    public function getTblId()
    {
        return $this->tblId;
    }

    /**
     * Set keys
     *
     * @param string $keys
     * @return Juniu2Langs
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;
    
        return $this;
    }

    /**
     * Get keys
     *
     * @return string 
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * Set val
     *
     * @param string $val
     * @return Juniu2Langs
     */
    public function setVal($val)
    {
        $this->val = $val;
    
        return $this;
    }

    /**
     * Get val
     *
     * @return string 
     */
    public function getVal()
    {
        return $this->val;
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
