<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Order
 *
 * @ORM\Table(name="juniu2_order")
 * @ORM\Entity
 */
class Juniu2Order
{
    /**
     * @var string
     *
     * @ORM\Column(name="otype", type="string", nullable=false)
     */
    private $otype;

    /**
     * @var string
     *
     * @ORM\Column(name="sn", type="string", length=20, nullable=false)
     */
    private $sn;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=false)
     */
    private $pass;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_currency", type="string", length=5, nullable=false)
     */
    private $priceCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pay_status", type="boolean", nullable=false)
     */
    private $payStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_type", type="integer", nullable=false)
     */
    private $payType;

    /**
     * @var string
     *
     * @ORM\Column(name="pay_code", type="string", length=100, nullable=false)
     */
    private $payCode;

    /**
     * @var float
     *
     * @ORM\Column(name="pay_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $payPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="pay_currency", type="string", length=5, nullable=false)
     */
    private $payCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_date", type="integer", nullable=false)
     */
    private $payDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="postdate", type="integer", nullable=false)
     */
    private $postdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set otype
     *
     * @param string $otype
     * @return Juniu2Order
     */
    public function setOtype($otype)
    {
        $this->otype = $otype;
    
        return $this;
    }

    /**
     * Get otype
     *
     * @return string 
     */
    public function getOtype()
    {
        return $this->otype;
    }

    /**
     * Set sn
     *
     * @param string $sn
     * @return Juniu2Order
     */
    public function setSn($sn)
    {
        $this->sn = $sn;
    
        return $this;
    }

    /**
     * Get sn
     *
     * @return string 
     */
    public function getSn()
    {
        return $this->sn;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Juniu2Order
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    
        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Juniu2Order
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
     * @return Juniu2Order
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
     * Set uid
     *
     * @param integer $uid
     * @return Juniu2Order
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Juniu2Order
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Juniu2Order
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
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Order
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
     * Set payStatus
     *
     * @param boolean $payStatus
     * @return Juniu2Order
     */
    public function setPayStatus($payStatus)
    {
        $this->payStatus = $payStatus;
    
        return $this;
    }

    /**
     * Get payStatus
     *
     * @return boolean 
     */
    public function getPayStatus()
    {
        return $this->payStatus;
    }

    /**
     * Set payType
     *
     * @param integer $payType
     * @return Juniu2Order
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    
        return $this;
    }

    /**
     * Get payType
     *
     * @return integer 
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Set payCode
     *
     * @param string $payCode
     * @return Juniu2Order
     */
    public function setPayCode($payCode)
    {
        $this->payCode = $payCode;
    
        return $this;
    }

    /**
     * Get payCode
     *
     * @return string 
     */
    public function getPayCode()
    {
        return $this->payCode;
    }

    /**
     * Set payPrice
     *
     * @param float $payPrice
     * @return Juniu2Order
     */
    public function setPayPrice($payPrice)
    {
        $this->payPrice = $payPrice;
    
        return $this;
    }

    /**
     * Get payPrice
     *
     * @return float 
     */
    public function getPayPrice()
    {
        return $this->payPrice;
    }

    /**
     * Set payCurrency
     *
     * @param string $payCurrency
     * @return Juniu2Order
     */
    public function setPayCurrency($payCurrency)
    {
        $this->payCurrency = $payCurrency;
    
        return $this;
    }

    /**
     * Get payCurrency
     *
     * @return string 
     */
    public function getPayCurrency()
    {
        return $this->payCurrency;
    }

    /**
     * Set payDate
     *
     * @param integer $payDate
     * @return Juniu2Order
     */
    public function setPayDate($payDate)
    {
        $this->payDate = $payDate;
    
        return $this;
    }

    /**
     * Get payDate
     *
     * @return integer 
     */
    public function getPayDate()
    {
        return $this->payDate;
    }

    /**
     * Set postdate
     *
     * @param integer $postdate
     * @return Juniu2Order
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
