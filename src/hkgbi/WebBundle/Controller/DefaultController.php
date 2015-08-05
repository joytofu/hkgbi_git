<?php

namespace hkgbi\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query;
use Symfony\Bridge\Doctrine;


class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT j.cateName FROM hkgbiWebBundle:Juniu2Cate j WHERE j.identifier = :id')->setParameter('id','pros');
        $data = $query->getSingleResult();
        $res = $data['cateName'];



        return $this->render('hkgbiWebBundle:Default:index.html.twig', array('res'=>$res));
    }
}
