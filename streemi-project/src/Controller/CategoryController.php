<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route(path: "/category", name: "category")]
    public function category()
    {
        return $this->render(view: "category.html.twig");
    }
}