<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ForgotController extends AbstractController
{
    #[Route(path: "/forgot", name: "forgot")]
    public function forgot()
    {
        return $this->render(view: "forgot.html.twig");
    }
}