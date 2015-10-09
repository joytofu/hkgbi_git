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
     * @Route("/createfooter",name="createfooter")
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
        }

        return $this->render('@hkgbiWeb/backend/footer/footer.html.twig',array('form'=>$form->createView()));


    }

    public function editFooter(){

    }

    public function deleteFooter(){

    }

}