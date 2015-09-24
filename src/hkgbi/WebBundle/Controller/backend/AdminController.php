<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-23
 * Time: 13:38
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Controller\BaseController;
use hkgbi\WebBundle\Entity\Slider;
use hkgbi\WebBundle\Entity\Module;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hkgbi\WebBundle\Form\SliderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bridge\Doctrine;
use Symfony\Component\Templating\PhpEngine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * @Route("/admin")
 */
class AdminController extends BaseController
{
    /**
     * @Route("",name="index")
     */
    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $slider_form = $this->UploadSliderPics($request);
        $module_form = $this->newModule($request);
        $images = $em->getRepository('hkgbiWebBundle:Slider')->findAll();
        $modules = $em->getRepository('hkgbiWebBundle:Module')->findAll();
        $count = count($images);

        $module_edit_form = $this->createFormBuilder($modules)
            ->add('name','text')
            ->getForm();
        $module_edit_form->handleRequest($request);
        if($module_edit_form->isSubmitted()){
            print_r($_POST);exit;
        }







        return $this->render('@hkgbiWeb/backend/index_admin.html.twig',array(
            'slider_form'=>$slider_form->createView(),
            'module_form'=>$module_form->createView(),
            'module_edit_form'=>$module_edit_form->createView(),
            'images'=>$images,
            'modules'=>$modules,
            'count'=>$count));
    }

    protected function UploadSliderPics(Request $request){
        $em = $this->getDoctrine()->getManager();
        $slider = new Slider();
        $form = $this->createForm(new SliderType(),$slider);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->persist($slider);
            $em->flush();
        }
        return $form;
    }

    protected function newModule(Request $request){
        $em = $this->getDoctrine()->getManager();
        $module = new Module();
        $form = $this->createFormBuilder($module)
            ->add('name','text')
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($module);
            $em->flush();
//            return new Response("<script>alert('添加模块成功!')</script>");
        }
        return $form;
    }

    /**
     * @Route("/in_menus/{id}",name="in_menus")
     * @ParamConverter("module", class="hkgbiWebBundle:Module")
     * @Method({"POST"})
     */
    public function InMenus(Module $module){
        $module->setInMenus(true);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/disable_in_menus/{id}",name="disable_in_menus")
     * @ParamConverter("module", class="hkgbiWebBundle:Module")
     * @Method({"POST"})
     */
    public function DisableInMenus(Module $module){
        $module->setInMenus(false);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('index');
    }

}