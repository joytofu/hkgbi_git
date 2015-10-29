<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-28
 * Time: 14:07
 */

namespace hkgbi\WebBundle\Controller\frontend;


use hkgbi\WebBundle\Entity\Product;
use hkgbi\WebBundle\Entity\Reservation;
use hkgbi\WebBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/products")
 */
class FundController extends Controller
{
    /**
     * @Route("",name="fund_products")
     */
    public function product(){
        return $this->render('@hkgbiWeb/frontend/fund_products.html.twig',array());
    }


    public function fundListAction(){
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('hkgbiWebBundle:Product')->findBy(array(),array('sort'=>'DESC'));
        $fund = "fund";
        return $this->render('@hkgbiWeb/frontend/index_fund.html.twig',array('products'=>$products,'fund'=>$fund));
    }

    public function fundFilterAction(){
        $em = $this->getDoctrine()->getManager();
        $types = array();
        $products = $em->getRepository('hkgbiWebBundle:Product')->findAll();
        foreach($products as $product){
            $types[] = $product->getType();
        }
        $types = array_unique($types);
        return $this->render('@hkgbiWeb/frontend/fund_filter.html.twig',array('types'=>$types));
    }

    /**
     * @Route("/filtered/{type}",name="filtered")
     */
    public function fundFilter($type){
        $em = $this->getDoctrine()->getManager();
        if($type=='unlimit'){
            $products = $em->getRepository('hkgbiWebBundle:Product')->findBy(array(),array('sort'=>'DESC'));
        }else{
            $products = $em->getRepository('hkgbiWebBundle:Product')->findBy(array('type'=>$type),array('sort'=>'DESC'));
        }
        $template = $this->renderView('@hkgbiWeb/frontend/filtered.html.twig',array('products'=>$products));
        return new Response($template);
    }

    /**
     * @Route("/{id}",name="fund_detail")
     * @ParamConverter("product", class="hkgbiWebBundle:Product")
     */
    public function fundDetail(Product $product, Request $request){
        $em = $this->getDoctrine()->getManager();
        $reservation = new Reservation();
        $form = $this->createForm(new ReservationType(),$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $reservation->setFundName($product->getName());
            $em->persist($reservation);
            $em->flush();
            $redirect_url = $this->generateUrl('fund_detail',array('id'=>$product->getId()));
            return new Response("<script>alert('恭喜你，预约成功，请等待工作人员与你联系！');window.location.href='$redirect_url';</script>");
        }
        return $this->render('@hkgbiWeb/frontend/fund_detail.html.twig',array('product'=>$product,'form'=>$form->createView()));
    }



}