<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-13
 * Time: 9:22
 */

namespace hkgbi\WebBundle\Controller\backend;


use hkgbi\WebBundle\Entity\Article;
use hkgbi\WebBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AboutUsController extends Controller
{

    /**
     * @Route("/aboutuslist",name="aboutuslist")
     */
    public function aboutus(){
        $em = $this->em();
        $module = $em->getRepository('hkgbiWebBundle:Module')->find(6);
        $aboutuses = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('module'=>$module));
        return $this->render('@hkgbiWeb/backend/aboutus/aboutus_list.html.twig',array('aboutses'=>$aboutuses));
    }

    /**
     * @Route("/create_aboutus",name="create_about")
     */
    public function newAboutUs(Request $request){
        $em = $this->em();
        $article = new Article();
        $aboutus = $em->getRepository('hkgbiWebBundle:Module')->find(6);
        $form = $this->createForm(new ArticleType(),$article);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $article->setModule($aboutus);
            $em->persist($aboutus);
            $em->flush();
            return new Response("<script>alert('添加信息成功!')</script>");
        }

        return $this->render('hkgbiWebBundle:backend/aboutus:createaboutus.html.twig',array('form'=>$form->createView()));

    }

    /**
     * @Route("/edit_aboutus/{id}",name="edit_aboutus")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     */
    public function editAboutUs(Article $article,Request $request,$id){
        $em = $this->em();
        $content = $article->getContent();
        $form = $this->createForm(new ArticleType(),$article);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->flush();
            return new Response("<script>alert('修改成功');window.location.href='/admin/aboutuslist'</script>");
        }
        return $this->render('hkgbiWebBundle:backend/aboutus:editaboutus.html.twig',array('form'=>$form->createView(),'id'=>$id,'content'=>$content));
    }

    public function aboutusList(){

    }

    protected function em(){
        return $em = $this->getDoctrine()->getManager();
    }

}