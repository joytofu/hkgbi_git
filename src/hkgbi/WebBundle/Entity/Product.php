<?php


namespace hkgbi\WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\OneToMany;


/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $type;

    /**
     * @ORM\Column(type="date")
     */
    protected $created_date;

    /**
     * @ORM\Column(type="text")
     */
    protected $product_overview;

    /**
     * @ORM\OneToMany(targetEntity="hkgbi\WebBundle\Entity\Value", mappedBy="product",cascade={"persist"})
     */
    protected $values;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    protected $sort;

    public function __construct(){
        $this->values = new ArrayCollection();
        $this->sort = 999;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getCreatedDate(){
        return $this->created_date;
    }

    public function setCreatedDate(\DateTime $date = null){
        $this->created_date = $date;
        return $this;
    }

    public function getProductOverview(){
        return $this->product_overview;
    }

    public function setProductOverview($product_overview){
        $this->product_overview = $product_overview;
    }

    public function getValues(){
        return $this->values;
    }

    public function addValue($value){
        $this->values[] = $value;
        return $this;
    }

    public function removeValue(Value $values){
        $this->values->removeElement($values);
    }

    public function getOrder(){
        return $this->order;
    }

    public function setOrder($order){
        $this->order = $order;
    }


}