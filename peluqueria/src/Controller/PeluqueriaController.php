<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PeluqueriaController extends AbstractController
{
    #[Route('/', name: 'app_peluqueria')]
    public function index(): Response
    {
        return $this->render('peluqueria/index.html.twig');
    }
}
