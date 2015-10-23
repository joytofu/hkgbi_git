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
     * @Method({"POST","GET"})
     */
    public function createArticle(Request $request,$identifier)
    {
        $em = $this->getDoctrine()->getManager();
        $article_obj = new Article();
        $module_obj = $em->getRepository('hkgbiWebBundle:Module')->findBy(array('identifier' => $identifier));
        $form = $this->createForm(new ArticleType($module_obj[0]), $article_obj);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $article_obj->setModule($module_obj[0]);
            if($_POST['article']['categories']){
                $category_obj = $em->getRepository('hkgbiWebBundle:Category')->find($_POST['article']['categories']);
            }
            $article_obj->setCategory($category_obj);
            $em->persist($article_obj);
            $em->flush();
            return new Response("<script>alert('添加信息成功!');window.location.href='/admin/article/$identifier/list';</script>");
        }
        return $this->render('hkgbiWebBundle:backend:create_article.html.twig',array('form'=>$form->createView(),'identifier'=>$identifier));
    }

    /**
     * @Route("/{identifier}/edit/{id}", name="edit_article")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     */
    public function editArticle(Article $article,Request $request,$identifier,$id){
        $em = $this->getDoctrine()->getManager();
        $module_obj = $em->getRepository('hkgbiWebBundle:Module')->findBy(array('identifier' => $identifier));
        $categories = $module_obj[0]->getCategories();
        $cate_id = null;
        if($article->getCategory()){
            $cate_id = $article->getCategory()->getId();
        }
        $form = $this->createForm(new ArticleType($module_obj[0]),$article);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            //写入选择的分类对象
            if(isset($_POST['article']['categories'])){
            $category = $em->getRepository('hkgbiWebBundle:Category')->find($_POST['article']['categories']);
            $article->setCategory($category);
            }

            $em->flush();
            $article_list_url = $this->generateUrl('article_list',array('identifier'=>$identifier));
            return new Response("<script>alert('修改成功!');window.location.href='$article_list_url'</script>");
        }
        return $this->render('hkgbiWebBundle:backend:edit_article.html.twig',array(
            'article'=>$article,
            'form'=>$form->createView(),
            'id'=>$id,
            'categories'=>$categories,
            'cate_id'=>$cate_id,
            'identifier'=>$identifier));
    }

    /**
     * @Route("/{identifier}/list",name="article_list")
     */
    public function articleList($identifier){

        $module_obj = $this->getModuleObj($identifier);
        $module = $module_obj->getName();
        $articles_array = array();
        $no_cate_articles = array();

        $categories = $module_obj->getCategories();
        if($categories[0]){
            foreach($categories as $category){
                $articles_array[] = $category->getArticles();
            }
        }else{
            $no_cate_articles = $module_obj->getArticles();
        }
        //$articles = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('module' => $module_obj));
        return $this->render('hkgbiWebBundle:backend:article_list.html.twig',array(
            'articles_array'=>$articles_array,
            'no_cate_articles'=>$no_cate_articles,
            'categories'=>$categories,
            'identifier'=>$identifier,
            'module'=>$module
            ));
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
      $module_array = $this->getDoctrine()->getRepository('hkgbiWebBundle:Module')->findBy(array('identifier'=>$module_identifier));
        return $module_obj = $module_array[0];

    }





}