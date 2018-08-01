<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ExpencesController extends Controller
{
  /**
   * @Route("/expences", name="expences")
   */
  public function indexAction()
  {
    return $this->render('expences/index.html.twig', [
      'page_title' => 'Expences',
    ]);
  }
}
