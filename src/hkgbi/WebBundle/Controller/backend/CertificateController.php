<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-30
 * Time: 15:38
 */

namespace hkgbi\WebBundle\Controller\backend;
use hkgbi\WebBundle\Entity\Certificate;
use hkgbi\WebBundle\Form\CertificateType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/admin")
 */
class CertificateController extends Controller
{
    /**
     * @Route("/certificate/new",name="create_certificate")
     */
    public function newCertificate(Request $request){
        $em = $this->getDoctrine()->getManager();
        $certificate = new Certificate();
        $form = $this->createForm(new CertificateType(),$certificate);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($certificate);
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'certificate'));
            return new Response("<script>alert('添加凭证成功');window.location.href='$redirect_url'</script>");

        }

        return $this->render('@hkgbiWeb/backend/certificate.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/certificate/edit/{id}",name="edit_certificate")
     * @ParamConverter("certificate", class="hkgbiWebBundle:Certificate")
     */
    public function editCertificate(Request $request,$certificate){
        $edit = 'edit';
        $em = $this->getDoctrine()->getManager();
        $certificate_name = $certificate->getImageName();
        $certificate_link = $certificate->getLink();
        $form = $this->createForm(new CertificateType(),$certificate);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            if(!isset($_POST['certificate']['imageFile']['file'])){
                $certificate->setImageName($certificate_name);
            }
            if(!isset($_POST['certificate']['link'])){
                $certificate->setLink($certificate_link);
            }
            $em->flush();
            $redirect_url = $this->generateUrl('article_list',array('identifier'=>'certificate'));
            return new Response("<script>alert('修改成功');window.location.href='$redirect_url'</script>");
        }
        return $this->render('@hkgbiWeb/backend/certificate.html.twig',array('form'=>$form->createView(),'edit'=>$edit,'certificate'=>$certificate));
    }

    /**
     * @Route("/certificate/list",name="certificatelist")
     */
    public function certificateListAction(){
        $em = $this->getDoctrine()->getManager();
        $certificates = $em->getRepository('hkgbiWebBundle:Certificate')->findBy(array(),array('createdAt'=>'DESC'));
        return $this->render('@hkgbiWeb/backend/certificates_list.html.twig',array('certificates'=>$certificates));
    }

    /**
     * @Route("/certificate/delete/{id}",name="delete_certificate")
     * @ParamConverter("certificate", class="hkgbiWebBundle:Certificate")
     */
    public function deleteCertificate(Certificate $certificate){
        $em = $this->getDoctrine()->getManager();
        $em->remove($certificate);
        $em->flush();
        return $this->redirectToRoute('article_list',array('identifier'=>'certificate'));

    }

}