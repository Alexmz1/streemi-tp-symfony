<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminUsersController extends AbstractController
{
    #[Route(path: "/admin_users", name: "admin_users")]
    public function admin_users()
    {
        return $this->render(view: "admin_users.html.twig");
    }
}