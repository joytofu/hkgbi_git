<?php


namespace hkgbi\WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\OneToMany;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 * @Vich\Uploadable
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
     * @ORM\Column(type="text",nullable=true)
     */
    protected $intro;


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

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $createdAt;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="upload_image", fileNameProperty="imageName")
     * @var File
     */
    protected $imageFile;

    /**
     * @ORM\Column(type="string", length=255,name="image_name",nullable=true)
     * @var string
     */
    protected $imageName;

    public function __construct(){
        $this->values = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
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

    public function getSort(){
        return $this->sort;
    }

    public function setSort($sort){
        $this->sort = $sort;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $date = null){
        $this->createdAt = $date;
        return $this;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    public function getIntro(){
        return $this->intro;
    }

    public function setIntro($intro){
        $this->intro = $intro;
    }

    public function countValues(){
        return count($this->values);
    }


}