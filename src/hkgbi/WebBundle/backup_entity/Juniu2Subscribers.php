<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2Subscribers
 *
 * @ORM\Table(name="juniu2_subscribers", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity
 */
class Juniu2Subscribers
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="postdate", type="integer", nullable=false)
     */
    private $postdate;

    /**
     * @var string
     *
     * @ORM\Column(name="md5pass", type="string", length=32, nullable=false)
     */
    private $md5pass;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set email
     *
     * @param string $email
     * @return Juniu2Subscribers
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Juniu2Subscribers
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set postdate
     *
     * @param integer $postdate
     * @return Juniu2Subscribers
     */
    public function setPostdate($postdate)
    {
        $this->postdate = $postdate;
    
        return $this;
    }

    /**
     * Get postdate
     *
     * @return integer 
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Set md5pass
     *
     * @param string $md5pass
     * @return Juniu2Subscribers
     */
    public function setMd5pass($md5pass)
    {
        $this->md5pass = $md5pass;
    
        return $this;
    }

    /**
     * Get md5pass
     *
     * @return string 
     */
    public function getMd5pass()
    {
        return $this->md5pass;
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
