<?php


namespace hkgbi\WebBundle\Controller\backend;


use hkgbi\WebBundle\Entity\Product;
use hkgbi\WebBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin/product")
 */
class ProductController extends Controller
{
    /**
     * @Route("/new",name="newproduct")
     */
    public function newProduct(Request $request){
        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $form = $this->createForm(new ProductType(),$product);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($product);
            $em->flush();
        }

        return $this->render('@hkgbiWeb/backend/create_product.html.twig',array('form'=>$form->createView()));
    }

}