<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route(path: "/", name: "index")]
    public function index()
    {
        return $this->render(view: "index.html.twig");
    }
}