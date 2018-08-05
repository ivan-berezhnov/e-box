<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

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
    public function addAction()
    {
        return $this->render('expenses/add.html.twig', [
            'page_title' => 'Add new Expense',
        ]);
    }
}
