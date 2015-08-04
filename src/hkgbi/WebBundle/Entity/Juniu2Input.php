<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Input
 *
 * @ORM\Table(name="juniu2_input")
 * @ORM\Entity
 */
class Juniu2Input
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxis", type="boolean", nullable=false)
     */
    private $taxis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifuser", type="boolean", nullable=false)
     */
    private $ifuser;

    /**
     * @var string
     *
     * @ORM\Column(name="input", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $input;



    /**
     * Set langid
     *
     * @param string $langid
     * @return Juniu2Input
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
     * Set name
     *
     * @param string $name
     * @return Juniu2Input
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set taxis
     *
     * @param boolean $taxis
     * @return Juniu2Input
     */
    public function setTaxis($taxis)
    {
        $this->taxis = $taxis;
    
        return $this;
    }

    /**
     * Get taxis
     *
     * @return boolean 
     */
    public function getTaxis()
    {
        return $this->taxis;
    }

    /**
     * Set ifuser
     *
     * @param boolean $ifuser
     * @return Juniu2Input
     */
    public function setIfuser($ifuser)
    {
        $this->ifuser = $ifuser;
    
        return $this;
    }

    /**
     * Get ifuser
     *
     * @return boolean 
     */
    public function getIfuser()
    {
        return $this->ifuser;
    }

    /**
     * Get input
     *
     * @return string 
     */
    public function getInput()
    {
        return $this->input;
    }
}
