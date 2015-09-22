<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Currency
 *
 * @ORM\Table(name="juniu2_currency")
 * @ORM\Entity
 */
class Juniu2Currency
{
    /**
     * @var float
     *
     * @ORM\Column(name="val", type="float", precision=13, scale=8, nullable=false)
     */
    private $val;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifdefault", type="boolean", nullable=false)
     */
    private $ifdefault;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol_left", type="string", length=24, nullable=false)
     */
    private $symbolLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol_right", type="string", length=24, nullable=false)
     */
    private $symbolRight;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;



    /**
     * Set val
     *
     * @param float $val
     * @return Juniu2Currency
     */
    public function setVal($val)
    {
        $this->val = $val;
    
        return $this;
    }

    /**
     * Get val
     *
     * @return float 
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set ifdefault
     *
     * @param boolean $ifdefault
     * @return Juniu2Currency
     */
    public function setIfdefault($ifdefault)
    {
        $this->ifdefault = $ifdefault;
    
        return $this;
    }

    /**
     * Get ifdefault
     *
     * @return boolean 
     */
    public function getIfdefault()
    {
        return $this->ifdefault;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Currency
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
     * Set title
     *
     * @param string $title
     * @return Juniu2Currency
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
     * Set symbolLeft
     *
     * @param string $symbolLeft
     * @return Juniu2Currency
     */
    public function setSymbolLeft($symbolLeft)
    {
        $this->symbolLeft = $symbolLeft;
    
        return $this;
    }

    /**
     * Get symbolLeft
     *
     * @return string 
     */
    public function getSymbolLeft()
    {
        return $this->symbolLeft;
    }

    /**
     * Set symbolRight
     *
     * @param string $symbolRight
     * @return Juniu2Currency
     */
    public function setSymbolRight($symbolRight)
    {
        $this->symbolRight = $symbolRight;
    
        return $this;
    }

    /**
     * Get symbolRight
     *
     * @return string 
     */
    public function getSymbolRight()
    {
        return $this->symbolRight;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Currency
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
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }
}
