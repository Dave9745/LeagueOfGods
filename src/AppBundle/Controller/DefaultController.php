<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_homepage", methods={"GET"})
     */
    public function indexAction()
    {
        $salute = "Hello World";

        return $this->render(':default:index.html.twig', [
            'salute' => $salute,
        ]);
    }

}
