<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminAddFilmsController extends AbstractController
{
    #[Route(path: "/admin_add_films", name: "admin_add_films")]
    public function adminAddFilms()
    {
        return $this->render(view: "admin_add_films.html.twig");
    }
}