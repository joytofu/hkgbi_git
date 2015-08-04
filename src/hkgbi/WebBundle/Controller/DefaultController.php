<?php

namespace hkgbi\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query;


class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder('c')
            ->WHERE('c.identifier >:id')
            ->setParameter('c.identifier','pros')
            ->getQuery();

        $res = $query->getResult();


        return $this->render('hkgbiWebBundle:Default:index.html.twig', array('res'=>$res));
    }
}
