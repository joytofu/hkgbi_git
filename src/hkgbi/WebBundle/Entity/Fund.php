<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 9:47
 */

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Slider
 *
 * @ORM\Table(name="fund")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Fund
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
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255,name="image_name",nullable=true)
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $intro;

    /**
     * @ORM\Column(type="float")
     */
    protected $fund_value;

    /**
     * @ORM\Column(type="string")
     */
    protected $latest_date;

    /**
     * @ORM\Column(type="string")
     */
    protected $create_date;

    /**
     * @ORM\Column(type="float")
     */
    protected $yield_rate;


    public function __construct(){
        $this->updatedAt = new \DateTime('now');
    }


    public function getId(){
        return $this->id;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
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

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getIntro(){
        return $this->intro;
    }

    public function setIntro($intro){
        $this->intro = $intro;
    }

    public function getFundValue(){
        return $this->fund_value;
    }

    public function setFundValue($fund_value){
        $this->fund_value = $fund_value;
    }

    public function getLatestDate(){
        return $this->latest_date;
    }

    public function setLatestDate($latest_date){
        $this->latest_date = $latest_date;
    }

    public function getCreateDate(){
        return $this->create_date;
    }

    public function setCreateDate($create_date){
        $this->create_date = $create_date;
    }

    public function getYieldRate(){
        return $this->yield_rate;
    }

    public function setYieldRate($yield_rate){
        $this->yield_rate = $yield_rate;
    }


}