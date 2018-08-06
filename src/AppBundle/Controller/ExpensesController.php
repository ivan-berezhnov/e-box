<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ExpenseFormType;
use Symfony\Component\HttpFoundation\Request;

class ExpensesController extends Controller
{
    /**
     * @Route("/expenses", name="expenses")
     */
    public function indexAction()
    {
        return $this->render('expenses/index.html.twig', [
            'page_title' => 'Expenses',
        ]);
    }

    /**
     * @Route("/expense/add", name="add_expense")
     */
    public function addAction(Request $request)
    {

        $form = $this->createForm(ExpenseFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('expenses/add.html.twig', [
            'page_title' => 'Add new Expense',
            'expenseForm' => $form->createView(),
        ]);
    }

}
