<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BoardsController extends Controller
{
  /**
   * @Route("/boards", name="boards")
   */
  public function indexAction()
  {
    return $this->render('boards/index.html.twig', [
      'page_title' => 'Boards | eCommerce Box',
    ]);
  }
}
