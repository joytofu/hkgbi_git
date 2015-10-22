<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-23
 * Time: 13:38
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Entity\Banner;
use hkgbi\WebBundle\Entity\Category;
use hkgbi\WebBundle\Entity\Slider;
use hkgbi\WebBundle\Entity\Module;
use hkgbi\WebBundle\Form\BannerType;
use hkgbi\WebBundle\Form\CategoryType;
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
        $banner_form = $this->UploadBannerPics($request);
        $module_form = $this->newModule($request);
        $category_form  = $this->newCategory($request);
        $sliders = $em->getRepository('hkgbiWebBundle:Slider')->findBy(array(),array('sort'=>'DESC'));
        $banners = $em->getRepository('hkgbiWebBundle:Banner')->findAll();
        $modules = $em->getRepository('hkgbiWebBundle:Module')->findAll();
        $count = count($sliders);
        $reservations = $em->getRepository('hkgbiWebBundle:Reservation')->findAll();
        $new_reservation = $em->getRepository('hkgbiWebBundle:Reservation')->findBy(array('enabled'=>false));
        $num_of_reservation = count($reservations);
        $num_of_new_reservation = count($new_reservation);


        return $this->render('@hkgbiWeb/backend/index_admin.html.twig',array(
            'slider_form'=>$slider_form->createView(),
            'banner_form'=>$banner_form->createView(),
            'module_form'=>$module_form->createView(),
            'category_form'=>$category_form->createView(),
            'sliders'=>$sliders,
            'banners'=>$banners,
            'modules'=>$modules,
            'count'=>$count,
            'num_of_reservation'=>$num_of_reservation,
            'num_of_new_reservation'=>$num_of_new_reservation));
    }

    /**
     * @Route("/module/{module_identifier}",name="redirecttomodule")
     */
    public function redirectToModule($module_identifier){
        switch($module_identifier){
            case 'notice':
                break;
            case 'products':
                break;
            case 'service':
                break;
            case 'join_us':
                break;
            case 'about_us':
                break;
            case 'footer':
                return $this->redirectToRoute('footerlist');
                break;
            case 'other_information':
                break;
        }
        return new Response();

    }

    protected function UploadSliderPics(Request $request){
        $em = $this->getDoctrine()->getManager();
        $slider = new Slider();
        $form = $this->createForm(new SliderType(),$slider);

        $form->handleRequest($request);
        $sorts = array();
        if($form->isSubmitted()){
            $sliders = $em->getRepository('hkgbiWebBundle:Slider')->findAll();
            foreach($sliders as $value){
                $sorts[] = $value->getSort();
            }
            $max_sort = max($sorts);
            $slider->setSort($max_sort+1);
            $em->persist($slider);
            $em->flush();
        }
        return $form;
    }

    protected function UploadBannerPics(Request $request){
        $em = $this->getDoctrine()->getManager();
        $banner = new Banner();
        $form = $this->createForm(new BannerType(), $banner);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($banner);
            $em->flush();
        }
        return $form;
    }

    /**
     * @Route("/slider/edit/{id}",name="edit_slider")
     * @ParamConverter("slider", class="hkgbiWebBundle:Slider")
     */
    public function editSliderAction(Request $request, Slider $slider,$id){
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new SliderType(),$slider);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->flush();
            return $this->redirectToRoute('index');
        }

        return $this->render('@hkgbiWeb/backend/edit_slider.html.twig',array('form'=>$form->createView(),'id'=>$id));
    }

    /**
     * @Route("/slider/delete/{id}",name="delete_slider")
     */
    public function deleteSlider(Slider $slider, Request $request){
        $em = $this->getDoctrine()->getManager();
        $em->remove($slider);
        $em->flush();
        return $this->redirectToRoute('index');
    }

    protected function newModule(Request $request){
        $em = $this->getDoctrine()->getManager();
        $module = new Module();
        $form = $this->createForm(new ModuleType(),$module);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($module);
            $em->flush();
//            return new Response("<script>alert('添加模块成功!')</script>");
        }
        return $form;
    }


    /**
     * @Route("/edit_module/{id}", name="edit_module")
     */
    public function editModule($id){
        $em = $this->getDoctrine()->getManager();
        $module = $em->getRepository('hkgbiWebBundle:Module')->find($id);
        $module->setName($_POST['edit_module_name']);
        $module->setIdentifier($_POST['edit_module_identifier']);
        $em->flush();

        return $this->redirectToRoute('index');
    }

    protected function newCategory(Request $request){
        $em = $this->getDoctrine()->getManager();
        $category = new Category();
        $form = $this->createForm(new CategoryType(),$category);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($category);
            $em->flush();
        }
        return $form;
    }


    /**
     * @Route("/edit_category/{id}", name="edit_category")
     */
    public function editCategory($id){
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('hkgbiWebBundle:Category')->find($id);
        $category->setName($_POST['edit_category_name']);
        $em->flush();

        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/delete_category/{id}",name="delete_category")
     * @ParamConverter("category", class="hkgbiWebBundle:Category")
     */
    public function deleteCategory(Category $category){
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
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
        echo "<script>alert('删除成功')</script>";

        return $this->redirectToRoute('index');

    }

    public function navAction(){
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('hkgbiWebBundle:Module')->findAll();
        return $this->render('@hkgbiWeb/backend/nav.html.twig',array('menu'=>$menu));
    }

    /**
     * @Route("slider/sortbackward/{id}",name="sortbackward")
     * @ParamConverter("slider", class="hkgbiWebBundle:Slider")
     */
    public function sortBackward(Slider $slider){
        $em = $this->getDoctrine()->getManager();
        $current_sort = $slider->getSort();
        $sliders = $em->getRepository('hkgbiWebBundle:Slider')->findBy(array(),array('sort'=>'DESC'));
        $key = array_search($slider,$sliders); //获取当前对象在sliders数组中的key
        if($key!==count($sliders)-1){
            $backward_sort = $sliders[$key+1]->getSort();  //获取对象后一位的sort值
            $slider->setSort($backward_sort);  //把当前对象sort值设为后一位的sort值
            $sliders[$key+1]->setSort($current_sort); //把后一位对象的sort值设为当前对象sort值
            $em->flush();
        }
        return $this->redirectToRoute('index');
    }

    /**
     * @Route("slider/sortforward/{id}",name="sortforward")
     * @ParamConverter("slider", class="hkgbiWebBundle:Slider")
     */
    public function sortForward(Slider $slider){
        $em = $this->getDoctrine()->getManager();
        $current_sort = $slider->getSort();
        $sliders = $em->getRepository('hkgbiWebBundle:Slider')->findBy(array(),array('sort'=>'DESC'));
        $key = array_search($slider,$sliders); //获取当前对象在sliders数组中的key
        if($key!==0){
            $forward_sort = $sliders[$key-1]->getSort(); //获取当前对象前一位的sort值
            $slider->setSort($forward_sort); //将当前对象sort值设为前一位的sort值
            $sliders[$key-1]->setSort($current_sort); //把前一位对象的sort值设为当前对象sort值
            $em->flush();
        }
        return $this->redirectToRoute('index');
    }




}