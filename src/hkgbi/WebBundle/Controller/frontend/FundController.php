<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-28
 * Time: 14:07
 */

namespace hkgbi\WebBundle\Controller\frontend;


use hkgbi\WebBundle\Entity\Product;
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
    public function fundDetail(Product $product){
        return $this->render('@hkgbiWeb/frontend/fund_detail.html.twig',array('product'=>$product));
    }



}