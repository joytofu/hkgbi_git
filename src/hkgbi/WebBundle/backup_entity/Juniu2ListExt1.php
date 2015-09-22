<?php

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juniu2ListExt1
 *
 * @ORM\Table(name="juniu2_list_ext1", indexes={@ORM\Index(name="field", columns={"field"})})
 * @ORM\Entity
 */
class Juniu2ListExt1
{
    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=255, nullable=false)
     */
    private $val;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $field;



    /**
     * Set val
     *
     * @param string $val
     * @return Juniu2ListExt1
     */
    public function setVal($val)
    {
        $this->val = $val;
    
        return $this;
    }

    /**
     * Get val
     *
     * @return string 
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Juniu2ListExt1
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
     * Set field
     *
     * @param string $field
     * @return Juniu2ListExt1
     */
    public function setField($field)
    {
        $this->field = $field;
    
        return $this;
    }

    /**
     * Get field
     *
     * @return string 
     */
    public function getField()
    {
        return $this->field;
    }
}
