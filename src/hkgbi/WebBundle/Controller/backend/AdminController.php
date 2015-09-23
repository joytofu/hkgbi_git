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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hkgbi\WebBundle\Form\SliderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bridge\Doctrine;



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

}