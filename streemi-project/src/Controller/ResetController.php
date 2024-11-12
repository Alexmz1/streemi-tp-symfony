<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ResetController extends AbstractController
{
    #[Route(path: "/reset", name: "reset")]
    public function reset()
    {
        return $this->render(view: "reset.html.twig");
    }
}