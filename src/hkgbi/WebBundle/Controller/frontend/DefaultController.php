<?php

namespace hkgbi\WebBundle\Controller\frontend;

use hkgbi\WebBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query;
use Symfony\Bridge\Doctrine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use hkgbi\WebBundle\Entity\Module;


/**
 * @Route("/")
 */
class DefaultController extends Controller
{
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

        /*//footer内容
        $footer = $em->getRepository('hkgbiWebBundle:Juniu2List')->findOneBy(array('identifier'=>'lx'));
        $contact = $footer->getNote();
        $footer = $em->getRepository('hkgbiWebBundle:Juniu2List')->findOneBy(array('identifier'=>'dibu'));
        $bottom_nav = $footer->getNote();*/


        return $this->render('@hkgbiWeb/frontend/index.html.twig',array(
            'site_title'=>$site_title,
            'site_keywords'=>$site_keywords,
            'site_description'=>$site_description,
            'site_url'=>$site_url,
            'images'=>$images,
            'count'=>$count
//            'contact'=>$contact,
            // 'bottom_nav'=>$bottom_nav
        ));
    }

    /**
     * @Route("module/{identifier}",name="module")
     * @ParamConverter("module", class="hkgbiWebBundle:Module")
     */
    public function moduleAction(Module $module){
        $em = $this->getDoctrine()->getManager();
        $category_list = $em->getRepository('hkgbiWebBundle:Category')->findBy(array('module'=>$module));
        return $this->render('@hkgbiWeb/frontend/inner_page.html.twig',array('category_list'=>$category_list,'module'=>$module));
    }


    public function navAction(){
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('hkgbiWebBundle:Module')->findBy(array('in_menus'=>true));
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
     * @Route("module/article/{id}",name="article")
     * @ParamConverter("article", class="hkgbiWebBundle:Article")
     */
    public function getArticle(Article $article){
        $content = $article->getContent();
        return new Response("$content");
    }
}
