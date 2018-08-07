<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Orders;
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
     * @Route("/order/add", name="order_add")
     */
    public function addAction(Request $request)
    {
        $form = $this->createForm(OrderFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $order = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();

            $this->addFlash('success', 'Order created!');

            return $this->redirectToRoute('orders');
        }

        return $this->render('orders/add.html.twig', [
            'page_title' => 'Add Order',
            'orderForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/order/{id}/edit", name="order_edit")
     */
    public function editAction(Request $request, Orders $order)
    {
        $form = $this->createForm(OrderFormType::class, $order);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $order = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();

            $this->addFlash('success', 'Order updated!');

            return $this->redirectToRoute('orders');
        }

        return $this->render('orders/edit.html.twig', [
            'page_title' => 'Edit Order',
            'orderForm' => $form->createView()
        ]);
    }
}
