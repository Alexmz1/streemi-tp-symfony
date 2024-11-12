<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListsController extends AbstractController
{
    #[Route(path: "/lists", name: "lists")]
    public function lists()
    {
        return $this->render(view: "lists.html.twig");
    }
}