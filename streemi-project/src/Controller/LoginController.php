<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route(path: "/login", name: "login")]

    public function login()
    {
        return $this->render(view: "login.html.twig");
    }
}