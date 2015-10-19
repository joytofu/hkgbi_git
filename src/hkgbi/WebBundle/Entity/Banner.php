<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-19
 * Time: 14:31
 */

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Banner
 *
 * @ORM\Table(name="banner")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Banner
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="upload_image", fileNameProperty="imageName")
     * @var File
     */
    protected $imageFile;

    /**
     * @ORM\Column(type="string", length=255,name="image_name",nullable=true)
     * @var string
     */
    protected $imageName;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    protected $content;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var \DateTime
     */
    protected $updatedAt;


    public function __construct(){
        $this->updatedAt = new \DateTime('now');
    }

    public function getId(){
        return $this->id;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

}