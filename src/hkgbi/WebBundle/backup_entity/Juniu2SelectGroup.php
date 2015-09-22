<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2SelectGroup
 *
 * @ORM\Table(name="juniu2_select_group")
 * @ORM\Entity
 */
class Juniu2SelectGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="langid", type="string", length=5, nullable=false)
     */
    private $langid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2SelectGroup
     */
    public function setLangid($langid)
    {
        $this->langid = $langid;
    
        return $this;
    }

    /**
     * Get langid
     *
     * @return string 
     */
    public function getLangid()
    {
        return $this->langid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Juniu2SelectGroup
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
