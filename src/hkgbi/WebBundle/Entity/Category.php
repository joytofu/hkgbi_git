<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 10:55
 */

namespace hkgbi\WebBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
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
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Module",inversedBy="categories")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     */
    protected $module;

    /**
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Article",inversedBy="id")
     * @ORM\JoinColumn(name="article_id",referencedColumnName="id")
     */
    protected $article_id;

    /**
     * @ORM\ManyToMany(targetEntity="hkgbi\WebBundle\Entity\Article", inversedBy="categories")
     * @ORM\JoinTable(name="category_article",
     *      joinColumns={@ORM\JoinColumn(name="category_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="article_id", referencedColumnName="id")}
     * )
     */
    protected $articles;

    public function __construct(){
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

    public function getModule(){
        return $this->module;
    }

    public function setModule(Module $module = null){
        $this->module = $module;
    }

    public function getArticles(){
        return $this->articles;
    }

    public function addArticle(Article $article){
        $this->articles[] = $article;
        return $this;
    }

    public function removeArticle(Article $articles){
        $this->articles->removeElement($articles);
    }

}