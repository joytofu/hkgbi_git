<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 11:10
 */

namespace hkgbi\WebBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\OneToMany;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Article
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
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    protected $intro;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Category", inversedBy="articles")
     * @ORM\JoinColumn(name="cate_id",referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Module",inversedBy="articles")
     * @ORM\JoinColumn(name="module_id",referencedColumnName="id")
     */
    protected $module;

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

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    protected $recommended;

    public function __construct(){
        $this->createdAt = new \DateTime('now');
        $this->recommended = false;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function getIntro(){
        return $this->intro;
    }

    public function setIntro($intro){
        $this->intro = $intro;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory(Category $category){
        $this->category = $category;
    }


    public function getModule(){
        return $this->module;
    }

    public function setModule(Module $module=null){
        $this->module = $module;
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

    public function getRecommended(){
        return $this->recommended;
    }

    public function setRecommended($boolean){
        $this->recommended = (boolean) $boolean;
        return $this;
    }
    

}