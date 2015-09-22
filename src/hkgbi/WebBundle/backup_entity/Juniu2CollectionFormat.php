<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2CollectionFormat
 *
 * @ORM\Table(name="juniu2_collection_format", indexes={@ORM\Index(name="lid", columns={"lid"})})
 * @ORM\Entity
 */
class Juniu2CollectionFormat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lid", type="integer", nullable=false)
     */
    private $lid;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=100, nullable=false)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set lid
     *
     * @param integer $lid
     * @return Juniu2CollectionFormat
     */
    public function setLid($lid)
    {
        $this->lid = $lid;
    
        return $this;
    }

    /**
     * Get lid
     *
     * @return integer 
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return Juniu2CollectionFormat
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Juniu2CollectionFormat
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
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
