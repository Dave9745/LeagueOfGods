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
}
