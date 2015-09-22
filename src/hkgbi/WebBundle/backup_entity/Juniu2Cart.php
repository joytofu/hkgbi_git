<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Cart
 *
 * @ORM\Table(name="juniu2_cart")
 * @ORM\Entity
 */
class Juniu2Cart
{
    /**
     * @var string
     *
     * @ORM\Column(name="sessid", type="string", length=50, nullable=false)
     */
    private $sessid;

    /**
     * @var integer
     *
     * @ORM\Column(name="proid", type="integer", nullable=false)
     */
    private $proid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_currency", type="string", length=3, nullable=false)
     */
    private $priceCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="postdate", type="integer", nullable=false)
     */
    private $postdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb_id", type="integer", nullable=false)
     */
    private $thumbId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set sessid
     *
     * @param string $sessid
     * @return Juniu2Cart
     */
    public function setSessid($sessid)
    {
        $this->sessid = $sessid;
    
        return $this;
    }

    /**
     * Get sessid
     *
     * @return string 
     */
    public function getSessid()
    {
        return $this->sessid;
    }

    /**
     * Set proid
     *
     * @param integer $proid
     * @return Juniu2Cart
     */
    public function setProid($proid)
    {
        $this->proid = $proid;
    
        return $this;
    }

    /**
     * Get proid
     *
     * @return integer 
     */
    public function getProid()
    {
        return $this->proid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2Cart
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
     * Set amount
     *
     * @param integer $amount
     * @return Juniu2Cart
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Juniu2Cart
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
     * @return Juniu2Cart
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
     * Set postdate
     *
     * @param integer $postdate
     * @return Juniu2Cart
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
     * Set thumbId
     *
     * @param integer $thumbId
     * @return Juniu2Cart
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
