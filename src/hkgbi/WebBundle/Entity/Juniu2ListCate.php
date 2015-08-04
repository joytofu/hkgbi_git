<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2ListCate
 *
 * @ORM\Table(name="juniu2_list_cate")
 * @ORM\Entity
 */
class Juniu2ListCate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cateid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cateid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Juniu2ListCate
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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

    /**
     * Set cateid
     *
     * @param integer $cateid
     * @return Juniu2ListCate
     */
    public function setCateid($cateid)
    {
        $this->cateid = $cateid;
    
        return $this;
    }

    /**
     * Get cateid
     *
     * @return integer 
     */
    public function getCateid()
    {
        return $this->cateid;
    }
}
