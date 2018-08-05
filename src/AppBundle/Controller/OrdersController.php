<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends Controller
{
    /**
     * @Route("/orders", name="orders")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository('AppBundle:Orders')
            ->findAll();

        return $this->render('orders/index.html.twig', [
            'page_title' => 'Orders',
            'orders' => $orders,
        ]);
    }

    /**
     * @Route("/order/add", name="add_order")
     */
    public function addAction()
    {
        return $this->render('orders/add.html.twig', [
            'page_title' => 'Add new order',
        ]);
    }
}
