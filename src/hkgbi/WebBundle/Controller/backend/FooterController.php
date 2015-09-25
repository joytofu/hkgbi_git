<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-25
 * Time: 14:48
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Controller\BaseController;
use hkgbi\WebBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class FooterController extends BaseController
{
    public function newFooter(){
        $footer = new Article();
        $em = $this->getDoctrine()->getManager();


    }

    public function editFooter(){

    }

    public function deleteFooter(){

    }

}