<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestController extends Controller
{
    /**
     * @Route("/test", name="app_test")
     */
    public function testAction()
    {
        $test = "Test";

        return $this->render(':default:test.html.twig', [
            'test' => $test,
        ]);
    }

}
