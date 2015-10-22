<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-22
 * Time: 15:09
 */

namespace hkgbi\WebBundle\Controller\backend;


use hkgbi\WebBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use hkgbi\WebBundle\Form\ReservationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/reservation")
 */
class ReservationController extends Controller
{
    public function getAllReservationsAction(){
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('hkgbiWebBundle:Reservation')->findBy(array(),array('enabled'=>'ASC','createdAt'=>'DESC'));
        return $this->render('@hkgbiWeb/backend/reservation_list.html.twig',array('reservations'=>$reservations));
    }

    /**
     * @Route("/delete/{id}",name="delete_reservation")
     * @ParamConverter("reservation", class="hkgbiWebBundle:Reservation")
     */
    public function deleteReservation(Reservation $reservation){
        $em = $this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush();
    }

    /**
     * @Route("/setgranted/{id}",name="set_granted")
     * @ParamConverter("reservation", class="hkgbiWebBundle:Reservation")
     */
    public function setGranted(Reservation $reservation){
        $em = $this->getDoctrine()->getManager();
        $reservation->setEnabled(true);
        $em->flush();
        return new Response('');
    }

    /**
     * @Route("/undogranted/{id}",name="undo_granted")
     * @ParamConverter("reservation", class="hkgbiWebBundle:Reservation")
     */
    public function undoGranted(Reservation $reservation){
        $em = $this->getDoctrine()->getManager();
        $reservation->setEnabled(false);
        $em->flush();
        return new Response('');
    }

}