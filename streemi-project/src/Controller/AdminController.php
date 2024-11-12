<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route(path: "/admin", name: "admin")]
    public function admin()
    {
        return $this->render(view: "admin.html.twig");
    }
}