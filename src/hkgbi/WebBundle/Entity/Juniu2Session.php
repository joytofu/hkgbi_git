<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Session
 *
 * @ORM\Table(name="juniu2_session")
 * @ORM\Entity
 */
class Juniu2Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="lasttime", type="integer", nullable=false)
     */
    private $lasttime;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set data
     *
     * @param string $data
     * @return Juniu2Session
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set lasttime
     *
     * @param integer $lasttime
     * @return Juniu2Session
     */
    public function setLasttime($lasttime)
    {
        $this->lasttime = $lasttime;
    
        return $this;
    }

    /**
     * Get lasttime
     *
     * @return integer 
     */
    public function getLasttime()
    {
        return $this->lasttime;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
