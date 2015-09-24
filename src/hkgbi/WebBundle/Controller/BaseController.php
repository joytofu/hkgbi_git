<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-24
 * Time: 10:32
 */

namespace hkgbi\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BaseController extends Controller
{

    public function getModules(){
        $em = $this->getDoctrine()->getManager();
        global $modules;
        $modules = $em->getRepository('hkgbiWebBundle:Module')->findAll();

        return $this->render('@hkgbiWeb/backend/layout_admin.html.twig',array('modules'=>$modules));

    }

}