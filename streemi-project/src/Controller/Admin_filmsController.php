<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminFilmsController extends AbstractController
{
    #[Route(path: "/admin_films", name: "admin_films")]
    public function admin_films()
    {
        return $this->render(view: "admin_films.html.twig");
    }
}