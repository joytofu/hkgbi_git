<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-25
 * Time: 14:48
 */

namespace hkgbi\WebBundle\Controller\backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use hkgbi\WebBundle\Entity\Article;
use hkgbi\WebBundle\Form\FooterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/admin")
 */
class FooterController extends Controller
{
    /**
     * @Route("/footerlist",name="footerlist")
     */
    public function footer(){
        $em = $this->getDoctrine()->getManager();
        $module = $em->getRepository('hkgbiWebBundle:Module')->find(7);
        $footers = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('module'=>$module));
        return $this->render('@hkgbiWeb/backend/footer/footer_list.html.twig',array('footers'=>$footers));
    }


    /**
     * @Route("/create_footer",name="create_footer")
     */
    public function newFooter(Request $request){
        $article = new Article();
        $em = $this->getDoctrine()->getManager();
        $footer = $em->getRepository('hkgbiWebBundle:Module')->find(7);
        $form = $this->createForm(new FooterType(),$article);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $article->setModule($footer);
            $em->persist($article);
            $em->flush();
            return new Response("<script>alert('创建底部信息成功!');window.location.href='/footerlist'</script>");
        }

        return $this->render('@hkgbiWeb/backend/footer/createfooter.html.twig',array('form'=>$form->createView()));


    }

    /**
     * @Route("/editfooter/{id}",name="editfooter")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     * @Method({"POST","GET"})
     */
    public function editFooter(Article $article,Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $content = $article->getContent();
        $form = $this->createForm(new FooterType(),$article);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->flush();
            return new Response("<script>alert('修改成功');window.location.href='/admin/footerlist'</script>");
        }

        return $this->render('hkgbiWebBundle:backend/footer:editfooter.html.twig',array('form'=>$form->createView(),'id'=>$id,'content'=>$content));


    }

    /**
     * @Route("/deletefooter/{id}", name="deletefooter")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     * @Method({"POST","GET"})
     */
    public function deleteFooter(Article $article){
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute('footerlist');

    }

}