<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
  /**
   * @Route("/search", name="search")
   */
  public function indexAction()
  {
    return $this->render('search/index.html.twig', [
      'page_title' => 'Product Search',
    ]);
  }
}
