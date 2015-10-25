<?php


namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Value
 *
 * @ORM\Table(name="value")
 * @ORM\Entity
 */
class Value
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="float")
     */
    protected $value;

    /**
     * @ORM\Column(type="date")
     */
    protected $value_date;

    /**
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Product", inversedBy="values")
     * @ORM\JoinColumn(name="product_id",referencedColumnName="id")
     */
    protected $product;

    public function getId(){
        return $this->id;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;
    }

    public function getValueDate(){
        return $this->value_date;
    }

    public function setValueDate(\DateTime $date = null){
        $this->value_date = $date;
        return $this;
    }

    public function getProduct(){
        return $this->product;
    }

    public function setProduct(Product $product){
        $this->product = $product;
    }

}