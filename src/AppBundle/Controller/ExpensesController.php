<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expenses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ExpenseFormType;
use Symfony\Component\HttpFoundation\Request;

class ExpensesController extends Controller
{

    /**
     * @Route("/expenses", name="expenses")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $expenses = $em->getRepository('AppBundle:Expenses')
            ->findAll();

        return $this->render('expenses/index.html.twig', [
            'page_title' => 'Expenses',
            'expenses' => $expenses,
        ]);
    }

    /**
     * @Route("/expense/add", name="expense_add")
     */
    public function addAction(Request $request)
    {

        $form = $this->createForm(ExpenseFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $expense = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($expense);
            $em->flush();

            $this->addFlash('success', 'Expense created!');

            return $this->redirectToRoute('expenses');
        }

        return $this->render('expenses/add.html.twig', [
            'page_title' => 'Add Expense',
            'expenseForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/expense/{id}/edit", name="expense_edit")
     */
    public function editAction(Request $request, Expenses $expense)
    {
        $form = $this->createForm(ExpenseFormType::class, $expense);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $expense = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($expense);
            $em->flush();

            $this->addFlash('success', 'Expense updated!');

            return $this->redirectToRoute('expenses');
        }

        return $this->render('expenses/edit.html.twig', [
            'page_title' => 'Edit Expense',
            'expenseForm' => $form->createView()
        ]);
    }
}
