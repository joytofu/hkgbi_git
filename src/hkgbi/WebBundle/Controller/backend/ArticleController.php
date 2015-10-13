<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-25
 * Time: 14:48
 */

namespace hkgbi\WebBundle\Controller\backend;

use hkgbi\WebBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use hkgbi\WebBundle\Entity\Article;
use hkgbi\WebBundle\Form\FooterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/admin/article")
 */
class ArticleController extends Controller
{
    /**
     * @Route("/{identifier}/create",name="create_article")
     */
    public function createArticle(Request $request,$identifier)
    {
        $em = $this->getDoctrine()->getManager();
        $article_obj = new Article();
        $module_obj = $em->getRepository('hkgbiWebBundle:Module')->findBy(array('identifier' => $identifier));
        $form = $this->createForm(new ArticleType(), $article_obj);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article_obj->setModule($module_obj);
            $em->persist($article_obj);
            $em->flush();
        }
        return $this->render('hkgbiWebBundle:backend/'.$identifier.':create'.$identifier.'.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/{identifier}/edit/{id}", name="edit_article")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     */
    public function editArticle(Article $article,Request $request,$identifier,$id){
        $em = $this->getDoctrine()->getManager();
        $content = $article->getContent();
        $form = $this->createForm(new ArticleType(),$article);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->flush();
        }
        return $this->render('hkgbiWebBundle:backend/'.$identifier.':edit'.$identifier.'.html.twig',array('content'=>$content,'form'=>$form->createView(),'id'=>$id));
    }

    /**
     * @Route("/{identifier}/list",name="article_list")
     */
    public function articleList($identifier){
        $em = $this->getDoctrine()->getManager();
        $module_obj = $this->getModuleObj($identifier);
        $articles = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('module' => $module_obj));
        return $this->render('hkgbiWebBundle:backend/'.$identifier.':'.$identifier.'_list.html.twig',array('articles'=>$articles));
    }

    /**
     * @Route("/{identifier}/delete/{id}",name="delete_article")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     */
    public function deleteArticle(Article $article,$identifier){
         $em = $this->getDoctrine()->getManager();
         $em->remove($article);
         $em->flush();
         return $this->redirectToRoute('article_list',array('identifier'=>$identifier));
    }

    protected function getModuleObj($module_identifier){
     return  $module_obj = $this->getDoctrine()->getRepository('hkgbiWebBundle:Module')->findBy(array('identifier'=>$module_identifier));
    }




}