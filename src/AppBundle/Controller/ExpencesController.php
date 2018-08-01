<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class OverheadController extends Controller
{
  /**
   * @Route("/overhead", name="overhead")
   */
  public function indexAction()
  {
    return $this->render('overhead/index.html.twig', [
      'page_title' => 'Overhead',
    ]);
  }
}
