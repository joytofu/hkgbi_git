<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2LangMsg
 *
 * @ORM\Table(name="juniu2_lang_msg")
 * @ORM\Entity
 */
class Juniu2LangMsg
{
    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="ltype", type="string", nullable=false)
     */
    private $ltype;

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=100, nullable=false)
     */
    private $var;

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
     * @return Juniu2LangMsg
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
     * Set ltype
     *
     * @param string $ltype
     * @return Juniu2LangMsg
     */
    public function setLtype($ltype)
    {
        $this->ltype = $ltype;
    
        return $this;
    }

    /**
     * Get ltype
     *
     * @return string 
     */
    public function getLtype()
    {
        return $this->ltype;
    }

    /**
     * Set var
     *
     * @param string $var
     * @return Juniu2LangMsg
     */
    public function setVar($var)
    {
        $this->var = $var;
    
        return $this;
    }

    /**
     * Get var
     *
     * @return string 
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * Set val
     *
     * @param string $val
     * @return Juniu2LangMsg
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
