<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 10:55
 */

namespace hkgbi\WebBundle\Entity;
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
    private $module;

    /**
     * @ORM\Column(type="integer",nullable=true)
     * @ORM\ManyToOne(targetEntity="hkgbi\WebBundle\Entity\Article",inversedBy="id")
     */
    private $article_id;

    /**
     * @ORM\ManyToMany(targetEntity="hkgbi\WebBundle\Entity\Article", inversedBy="categories")
     * @ORM\JoinTable(name="category_article",
     *      joinColumns={@ORM\JoinColumn(name="category_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="article_id", referencedColumnName="id")}
     * )
     */
    private $articles;

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

}