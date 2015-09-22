<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 10:05
 */

namespace hkgbi\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $fund_name;

    /**
     * @ORM\Column(type="string")
     * @Assert\Choice(
     *    choices={"广州分部","南海分部","顺德分部","天河分部","肇庆分部","成都一部","成都二部"},
     *    message= "请选择服务分部"
     * )
     */
    protected $department;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="bigint",nullable=true)
     * @Assert\Length(max="11",maxMessage="手机号码过长，请重新输入！")
     * @Assert\Length(min="11",minMessage="手机号码过短，请重新输入！")
     * @Assert\Regex(pattern="/^(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/", message="手机号码不正确，请重新输入!")
     */
    protected $cellphone;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $company;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    protected $fax;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $remark;

    public function getId(){
        return $this->id;
    }

    public function getFundName(){
        return $this->fund_name;
    }

    public function setFundName($fund_name){
        $this->fund_name = $fund_name;
    }

    public function getDepartment(){
        return $this->department;
    }

    public function setDepartMent($department){
        $this->department = $department;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getCellphone(){
        return $this->cellphone;
    }

    public function setCellphone($cellphone){
       $this->cellphone = $cellphone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getCompany(){
        return $this->company;
    }

    public function setCompany($company){
        $this->company = $company;
    }

    public function getFax(){
        return $this->fax;
    }

    public function setFax($fax){
        $this->fax = $fax;
    }
}