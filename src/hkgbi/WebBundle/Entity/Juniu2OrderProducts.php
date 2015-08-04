<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2OrderProducts
 *
 * @ORM\Table(name="juniu2_order_products")
 * @ORM\Entity
 */
class Juniu2OrderProducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="integer", nullable=false)
     */
    private $orderid;

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
     * @ORM\Column(name="amount", type="smallint", nullable=false)
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
     * @ORM\Column(name="price_currency", type="string", length=5, nullable=false)
     */
    private $priceCurrency;

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
     * Set orderid
     *
     * @param integer $orderid
     * @return Juniu2OrderProducts
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    
        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set proid
     *
     * @param integer $proid
     * @return Juniu2OrderProducts
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
     * @return Juniu2OrderProducts
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
     * @return Juniu2OrderProducts
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
     * @return Juniu2OrderProducts
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
     * @return Juniu2OrderProducts
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
     * Set thumbId
     *
     * @param integer $thumbId
     * @return Juniu2OrderProducts
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
