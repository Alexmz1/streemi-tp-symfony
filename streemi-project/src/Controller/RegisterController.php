<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route(path: "/register", name: "register")]
    public function register()
    {
        return $this->render(view: "register.html.twig");
    }
}