<?php


namespace hkgbi\WebBundle\Controller\backend;


use hkgbi\WebBundle\Entity\Product;
use hkgbi\WebBundle\Form\ProductType;
use hkgbi\WebBundle\Form\ValueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hkgbi\WebBundle\Entity\Value;

/**
 * @Route("/admin/product")
 */
class ProductController extends Controller
{
    /**
     * @Route("/new",name="create_product")
     */
    public function newProduct(Request $request){
        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $form = $this->createForm(new ProductType(),$product);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($product);
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'products'));
            return new Response("<script>alert('添加产品成功!');window.location.href='$redirect_url';</script>");
        }

        return $this->render('@hkgbiWeb/backend/create_product.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/list",name="productlist")
     */
    public function productListAction(){
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('hkgbiWebBundle:Product')->findBy(array(),array('createdAt'=>'DESC'));
        return $this->render('@hkgbiWeb/backend/products_list.html.twig',array('products'=>$products));
    }

    /**
     * @Route("/edit/{id}",name="edit_product")
     * @ParamConverter("product", class="hkgbiWebBundle:Product")
     */
    public function editProduct(Product $product, Request $request){
        $em = $this->getDoctrine()->getManager();
        $edit = 'edit';
        $thumb = $product->getImageFile();
        $thumb_name = $product->getImageName();
        $form = $this->createForm(new ProductType(),$product);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            if(!isset($_POST['product']['imageFile']['file'])){
                $product->setImageName($thumb_name);
            }
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'products'));
            return new Response("<script>alert('修改成功!');window.location.href='$redirect_url';</script>");
        }
        return $this->render('@hkgbiWeb/backend/create_product.html.twig',array('form'=>$form->createView(),'edit'=>$edit,'thumb'=>$thumb,'product'=>$product));
    }

    /**
     * @Route("/delete/{id}",name="delete_product")
     * @ParamConverter("product", class="hkgbiWebBundle:Product")
     */
    public function deleteProduct(Product $product){
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        return $this->redirectToRoute('productlist');
    }

    /**
     * @Route("/value/new",name="create_value")
     * @Method({"POST"})
     */
    public function newValueAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $value = new Value();
        $form = $this->createForm(new ValueType(),$value);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($value);
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'products'));
            return new Response("<script>alert('添加净值成功!');window.location.href='$redirect_url';</script>");
        }
        return $this->render('@hkgbiWeb/backend/create_value.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/value/list/{product_id}",name="value_list")
     */
    public function valueListAction($product_id){
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('hkgbiWebBundle:Product')->find($product_id);
        $values = $em->getRepository('hkgbiWebBundle:Value')->findBy(array('product'=>$product),array('value_date'=>'DESC'));
        $content = array();
        foreach($values as $value){
            $content[] = "<ul class='todo-list ui-sortable' id='value_list'><li><span class='text'>{$value->getValueDate()->format("Y-m-d")}</span> | <span class='text'>{$value->getValue()}</span>
                                                         <div class='tools'>
                                                             <a href='javascript:void(0)' id='edit_value_button' value={$value->getId()}><i class='fa fa-edit' style='font-size:18px'></i></a>
                                                             <a href='javascript:void(0)' onclick=''><i class='fa fa-trash-o' style='font-size:18px'></i></a>
                                                         </div>
                                                     </li></ul>";
        }
        $value_list = implode('',$content);
        return new Response("$value_list");
    }

    /**
     * @Route("/value/edit/{id}",name="edit_value")
     * @ParamConverter("value", class="hkgbiWebBundle:Value")
     */
    public function editValueAction(Value $value, Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new ValueType(),$value);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'products'));
            return new Response("<script>alert('净值修改成功!');window.location.href='$redirect_url';</script>");
        }
        $template = $this->renderView('@hkgbiWeb/backend/edit_value.html.twig',array('form'=>$form->createView(),'id'=>$id));
        return new Response($template);

    }

    /**
     * @Route("/{pid}/sort/{sort}",name="sort_product")
     */
    public function setSort($pid,$sort){
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('hkgbiWebBundle:Product')->find($pid);
        $product->setSort($sort);
        $em->flush();
        return new Response();
    }

}