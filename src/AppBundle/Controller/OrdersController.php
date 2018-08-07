<?php

namespace AppBundle\Controller;

use AppBundle\Form\OrderFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class OrdersController extends Controller
{
    /**
     * @Route("/orders", name="orders")
     */
    public function listAction()
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
    public function newAction(Request $request)
    {
        $form = $this->createForm(OrderFormType::class);

//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//
//        }

        return $this->render('orders/add.html.twig', [
            'page_title' => 'Add new order',
            'orderForm' => $form->createView(),
        ]);
    }
}
