<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends Controller
{
    /**
     * @Route("/category/add", name="add_category")
     */
    public function categoryAction()
    {
        return $this->render('add/category.html.twig', [
            'page_title' => 'Add Category',
        ]);
    }

    /**
     * @Route("/product/add", name="add_product")
     */
    public function productAction()
    {
        return $this->render('add/product.html.twig', [
            'page_title' => 'Add Product',
        ]);
    }
}
