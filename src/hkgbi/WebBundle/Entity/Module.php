<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 10:46
 */

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity
 */
class Module
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
     * @ORM\Column(type="boolean")
     */
    protected $in_menus = false;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $identifier;


    /**
     * @ORM\OneToMany(targetEntity="hkgbi\WebBundle\Entity\Category",mappedBy="module",cascade={"persist"})
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="hkgbi\WebBundle\Entity\Article",mappedBy="module",cascade={"persist"})
     */
    protected $articles;


    public function __construct(){
        $this->categories = new ArrayCollection();
        $this->articles = new ArrayCollection();
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

    public function addCategory(Category $categories){
        $this->categories[] = $categories;
        return $this;
    }

    public function removeCategory(Category $categories){
        $this->categories->removeElement($categories);
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function isInMenus(){
        return $this->in_menus;
    }

    public function setInMenus($boolean){
        $this->in_menus = (Boolean) $boolean;
        return $this;
    }

    public function getIdentifier(){
        return $this->identifier;
    }


    public function setIdentifier($identifier){
        $this->identifier = $identifier;
    }

    public function addArticle(Article $articles){
        $this->articles[] = $articles;
        return $this;
    }

    public function removeArticle(Article $articles){
        $this->articles->removeElement($articles);
    }

    public function getArticles()
    {
        return $this->articles;
    }

}