<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-16
 * Time: 14:11
 */

namespace hkgbi\WebBundle\Controller\backend\download;

use hkgbi\WebBundle\Entity\Download;
use hkgbi\WebBundle\Form\DownloadType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/admin")
 */
class DownloadController extends Controller
{
    /**
     * @Route("/file",name="file")
     */
    public function fileAction(Request $request,$category=null){
        $em = $this->getDoctrine()->getManager();
        $download = new Download();
        $form = $this->createForm(new DownloadType(),$download);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $download->setCategory($_POST['category']);
            $em->persist($download);
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'service'));
            return new Response("<script>alert('添加文件成功！');window.location.href='$redirect_url';</script>");
        }
        return $this->render('@hkgbiWeb/backend/downloadFile.html.twig',array('form'=>$form->createView(),'category'=>$category));
    }

}