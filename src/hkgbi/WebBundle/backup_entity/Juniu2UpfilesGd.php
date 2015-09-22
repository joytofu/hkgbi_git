<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2UpfilesGd
 *
 * @ORM\Table(name="juniu2_upfiles_gd")
 * @ORM\Entity
 */
class Juniu2UpfilesGd
{
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="gdtype", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gdtype;



    /**
     * Set filename
     *
     * @param string $filename
     * @return Juniu2UpfilesGd
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return Juniu2UpfilesGd
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    
        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set gdtype
     *
     * @param string $gdtype
     * @return Juniu2UpfilesGd
     */
    public function setGdtype($gdtype)
    {
        $this->gdtype = $gdtype;
    
        return $this;
    }

    /**
     * Get gdtype
     *
     * @return string 
     */
    public function getGdtype()
    {
        return $this->gdtype;
    }
}
