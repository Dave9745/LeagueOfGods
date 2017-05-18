<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_homepage", methods={"GET"})
     */
    public function indexAction()
    {
        return $this->render(':front:index.html.twig');
    }

    /**
     * @Route("/test", name="app_homepage", methods={"GET"})
     */
    public function testAction()
    {
        return $this->render(':front:test.html.twig');
    }
}
