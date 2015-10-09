<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-23
 * Time: 13:38
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Entity\Slider;
use hkgbi\WebBundle\Entity\Module;
use hkgbi\WebBundle\Form\ModuleType;
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
class AdminController extends Controller
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


        return $this->render('@hkgbiWeb/backend/index_admin.html.twig',array(
            'slider_form'=>$slider_form->createView(),
            'module_form'=>$module_form->createView(),
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
        $form = $this->createForm(new ModuleType(),$module);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($module);
            $em->flush();
//            return new Response("<script>alert('���ģ��ɹ�!')</script>");
        }
        return $form;
    }


    /**
     * @Route("/edit_module/{id}", name="edit_module")
     */
    public function editModule(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $module = $em->getRepository('hkgbiWebBundle:Module')->find($id);
        $module->setName($_POST['edit_module_name']);
        $module->setIdentifier($_POST['edit_module_identifier']);
        $em->flush();

        return $this->redirectToRoute('index');
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


    /**
     * @Route("/delete_module/{id}", name="delete_module")
     * @ParamConverter("module", class="hkgbiWebBundle:Module")
     */
    public function deleteModule(Module $module){
        $em = $this->getDoctrine()->getManager();
        $em->remove($module);
        $em->flush();
        echo "<script>alert('ɾ���ɹ�')</script>";

        return $this->redirectToRoute('index');

    }

    public function navAction(){
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('hkgbiWebBundle:Module')->findAll();
        return $this->render('@hkgbiWeb/backend/nav.html.twig',array('menu'=>$menu));
    }

}