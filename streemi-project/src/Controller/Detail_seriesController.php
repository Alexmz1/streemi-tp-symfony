<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailSeriesController extends AbstractController
{
    #[Route(path: "/detail_series", name: "detail_series")]
    public function detail_series()
    {
        return $this->render(view: "detail_series.html.twig");
    }
}