<?php

namespace hkgbi\WebBundle\Controller\frontend;

use hkgbi\WebBundle\Entity\Article;
use hkgbi\WebBundle\Entity\Reservation;
use hkgbi\WebBundle\Form\ReservationType;
use Proxies\__CG__\hkgbi\WebBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query;
use Symfony\Bridge\Doctrine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use hkgbi\WebBundle\Entity\Module;
use hkgbi\WebBundle\Controller\MyMemcached;


/**
 * @Route("/")
 */
class DefaultController extends Controller
{
    //操作Memcached
    protected function mem($key,$itemFetchedFromDB){
        $mem_obj = new MyMemcached();

        if($mem_obj->doFetch($key)){
            $item = $mem_obj->doFetch($key);
        }else{
            $item = $itemFetchedFromDB;
            $mem_obj->doSave($key,$itemFetchedFromDB,0);
        }
        return $item;
    }

    /**
     * @Route("",name="frontend_index")
     */
    public function indexAction()
    {
        //head内容
        $site_title = "广东巨牛投资阳光私募基金";
        $site_keywords = "巨牛投资,巨牛,阳光私募,私募投资基金,中小家庭资产配置";
        $site_description = "广东巨牛投资是GBF香港巨牛金融集团在中国大陆的全资公司。公司为是全球化金融服务、投资理财机构，公司成就享誉全球，专注中小投资者家庭财富管理。";
        $site_url = "http://www.hkgbi.com";
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository('hkgbiWebBundle:Slider')->findBy(array(),array('sort'=>'DESC'));
        $count = count($images);
        $article = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('recommended'=>true),array('createdAt'=>'DESC'),1);
        return $this->render('@hkgbiWeb/frontend/index.html.twig',array(
            'site_title'=>$site_title,
            'site_keywords'=>$site_keywords,
            'site_description'=>$site_description,
            'site_url'=>$site_url,
            'images'=>$images,
            'count'=>$count,
            'article'=>$article[0]
//            'contact'=>$contact,
            // 'bottom_nav'=>$bottom_nav
        ));
    }

    /**
     * @Route("module/{identifier}/{article_id}",name="module")
     * @ParamConverter("module", class="hkgbiWebBundle:Module")
     */
    public function moduleAction(Module $module,Request $request,$article_id=null){
        $em = $this->getDoctrine()->getManager();
        $content = null;
        if($module->getIdentifier()=="about_us" || $module->getIdentifier()=="service"){
            if($module->getIdentifier()=="about_us"){
                $contentFromDB = $em->getRepository('hkgbiWebBundle:Article')->find(3)->getContent();
                $content = $this->mem("article_3",$contentFromDB);
            }else{
                $contentFromDB = $em->getRepository('hkgbiWebBundle:Article')->find(14)->getContent();
                $content = $this->mem("article_14",$contentFromDB);
            }
        }
        $category_list = $em->getRepository('hkgbiWebBundle:Category')->findBy(array('module'=>$module));
        $reservation = new Reservation();
            $form = $this->createForm(new ReservationType(),$reservation);
            $form->handleRequest($request);
            if($form->isSubmitted()&&$form->isValid()){
                $em->persist($reservation);
                $em->flush();
                return new Response("<script>alert('您的预约已成功，请等待工作人员与您联系!');window.location.href='/';</script>");
            }
            return $this->render('@hkgbiWeb/frontend/inner_page.html.twig',array(
                'category_list'=>$category_list,
                'module'=>$module,
                'content'=>$content,
                'form'=>$form->createView(),
                'article_id'=>$article_id));

    }

    /**
     * @Route("category/{id}",name="category")
     * @ParamConverter("category", class="hkgbiWebBundle:Category")
     */
    public function categoryAction(\hkgbi\WebBundle\Entity\Category $category){
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('category'=>$category),array('createdAt'=>'DESC'));
        $list = array();
        foreach($articles as $article){
            $title = $article->getTitle();
            $value = $article->getId();
                $list[] = "<div style='width:100%; border-bottom:1px dashed #ccc; padding-bottom:10px; overflow:hidden; margin-bottom:10px;'>
        <p><a style='font-size:16px;' href='javascript:;' value='{$value}' title='{$title}'>$title</a></p>
</div>";
        }
        $article_list = implode("",$list);
        return new Response("$article_list");
    }


    public function navAction(){
        $em = $this->getDoctrine()->getManager();
        $menuFromDB = $em->getRepository('hkgbiWebBundle:Module')->findBy(array('in_menus'=>true));
        $menu = $this->mem("menu",$menuFromDB);
        return $this->render('@hkgbiWeb/frontend/nav.html.twig',array('menu'=>$menu));
    }

    public function footerAction(){
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('title'=>'底部联系电话'));
        $footer = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('title'=>'底部信息'));
        return $this->render('@hkgbiWeb/frontend/footer.html.twig',array('contact'=>$contact[0],'footer'=>$footer[0]));
    }

    public function bannerAction(){
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('hkgbiWebBundle:Banner')->findAll();
        return $this->render('@hkgbiWeb/frontend/inner_banner.html.twig',array('banners'=>$banners));
    }

    /**
     * @Route("getmodule/article/{id}",name="article")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     */
    public function getArticleAction(Article $article,$id){
        if($article->getModule()->getIdentifier() == "about_us"){
            $mem_obj = $this->mem();
            if($mem_obj->doFetch("article_{$id}")){
                $content = $mem_obj->doFetch("article_{$id}");
            }else{
                $content = $article->getContent();
                $mem_obj->doSave("article_{$id}",$content,0);
            }
        }else{
            $content = $article->getContent();
        }
        return new Response("$content");

    }

    public function JoinUsCoverAction(){
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('hkgbiWebBundle:Category')->find(19);
        $cover = $em->getRepository('hkgbiWebBundle:Article')->findBy(array('category'=>$category));
        $content = $cover[0]->getContent();
        return $this->render('@hkgbiWeb/frontend/join_us_cover.html.twig',array('content'=>$content));
    }

    /**
     * @Route("reservation",name="reservation")
     * @Method({"POST"})
     */
    public function reserveAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $reservation = new Reservation();
        $form = $this->createForm(new ReservationType(),$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($reservation);
            $em->flush();
            return new Response("<script>alert('您的预约已成功，请等待工作人员与您联系!');window.location.href='/';</script>");
        }
        return $this->render('@hkgbiWeb/frontend/reservation.html.twig',array('form'=>$form->createView()));
    }

    public function indexFundAction(){
        $em = $this->getDoctrine()->getManager();
        $products= $em->getRepository('hkgbiWebBundle:Product')->findBy(array(),array('sort'=>'DESC'),3);
        return $this->render('@hkgbiWeb/frontend/index_fund.html.twig',array('products'=>$products));
    }

    public function innerBannerAction(){
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('hkgbiWebBundle:Banner')->findAll();
        return $this->render('@hkgbiWeb/frontend/inner_banner.html.twig',array('banners'=>$banners));
    }

    public function indexCertificateAction(){
        $em = $this->getDoctrine()->getManager();
        $certificates = $em->getRepository('hkgbiWebBundle:Certificate')->findBy(array(),array('createdAt'=>'DESC'));
        return $this->render('@hkgbiWeb/frontend/certificate.html.twig',array('certificates'=>$certificates));
    }

}
