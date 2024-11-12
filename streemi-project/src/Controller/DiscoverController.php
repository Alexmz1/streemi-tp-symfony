<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DiscoverController extends AbstractController
{
    #[Route(path: "/discover", name: "discover")]
    public function discover()
    {
        return $this->render(view: "discover.html.twig");
    }
}