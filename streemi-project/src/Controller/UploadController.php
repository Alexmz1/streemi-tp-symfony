<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UploadController extends AbstractController
{
    #[Route(path: "/upload", name: "upload")]
    public function upload()
    {
        return $this->render(view: "upload.html.twig");
    }
}