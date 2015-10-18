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
     * @Route("/create_download",name="create_download")
     */
    public function createdownloadAction(Request $request,$category=null){
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
        return $this->render('@hkgbiWeb/backend/create_download.html.twig',array('form'=>$form->createView(),'category'=>$category));
    }

    /**
     * @Route("/download/list",name="download_list")
     */
    public function listAction($category=null){
        $em = $this->getDoctrine()->getManager();
        $downloads = $em->getRepository('hkgbiWebBundle:Download')->findBy(array('category'=>$category));
        return $this->render('@hkgbiWeb/backend/download_list.html.twig',array('downloads'=>$downloads));

    }



    /**
     * @Route("/download/delete/{id}",name="edit_download")
     * @ParamConverter("download", class="hkgbiWebBundle:Download")
     */
    public function delete_download(Download $download){
        $em = $this->getDoctrine()->getManager();
        $em->remove($download);
        $em->flush();
        return $this->redirectToRoute('article_list',array('identifier'=>'service'));
    }

}