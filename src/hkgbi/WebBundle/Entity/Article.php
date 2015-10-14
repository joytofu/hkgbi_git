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

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
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
     * @ORM\Column(type="datetime",nullable=true)
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @ORM\ManyToMany(targetEntity="hkgbi\WebBundle\Entity\Category", mappedBy="articles",cascade={"persist"})
     */
    protected $categories;

    /**
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Module",inversedBy="articles")
     * @ORM\JoinColumn(name="module_id",referencedColumnName="id")
     */
    protected $module;

    public function __construct(){
        $this->createdAt = new \DateTime('now');
        $this->categories = new ArrayCollection();
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

    public function getCategories(){
        return $this->categories;
    }

    public function setCategories(Category $category){
        $this->categories[] = $category;
        return $this;
    }

    public function removeCategory(Category $categories){
        $this->categories->removeElement($categories);

    }

    public function getModule(){
        return $this->module;
    }

    public function setModule(Module $module=null){
        $this->module = $module;
    }
    

}