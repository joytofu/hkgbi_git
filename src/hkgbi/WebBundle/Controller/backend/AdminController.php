<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 15:11
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Entity\Slider;
use hkgbi\WebBundle\Form\SliderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("",name="index")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request){
        $form = $this->UploadSliderPics($request);

        return $this->render(':admin:index_admin.html.twig',array('form'=>$form->createView()));
    }

    /**
     * handle uploaded pics
     * @return \Symfony\Component\Form\Form
     */
    protected function UploadSliderPics(Request $request){
        $em = $this->getDoctrine()->getManager();
        $slider = $em->getRepository('hkgbiWebBundle:Slider')->find('1');
        $form = $this->createForm(new SliderType(),$slider);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->flush();
        }

        return $form;

    }

}