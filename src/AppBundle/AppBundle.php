<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle
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
