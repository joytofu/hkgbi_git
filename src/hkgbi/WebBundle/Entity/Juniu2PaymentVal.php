<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2PaymentVal
 *
 * @ORM\Table(name="juniu2_payment_val", indexes={@ORM\Index(name="payid", columns={"payid"})})
 * @ORM\Entity
 */
class Juniu2PaymentVal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="payid", type="integer", nullable=false)
     */
    private $payid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=100, nullable=false)
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
     * Set payid
     *
     * @param integer $payid
     * @return Juniu2PaymentVal
     */
    public function setPayid($payid)
    {
        $this->payid = $payid;
    
        return $this;
    }

    /**
     * Get payid
     *
     * @return integer 
     */
    public function getPayid()
    {
        return $this->payid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2PaymentVal
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
     * Set code
     *
     * @param string $code
     * @return Juniu2PaymentVal
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
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

    /**
     * Set val
     *
     * @param string $val
     * @return Juniu2PaymentVal
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
