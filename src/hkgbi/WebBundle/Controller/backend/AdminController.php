<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-23
 * Time: 13:38
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Entity\Slider;
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
        $form = $this->UploadSliderPics($request);
        $images = $em->getRepository('hkgbiWebBundle:Slider')->findAll();
        $count = count($images);

        return $this->render('@hkgbiWeb/backend/index_admin.html.twig',array('form'=>$form->createView(),'images'=>$images,'count'=>$count));

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

}