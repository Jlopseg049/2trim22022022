<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapaNavController extends AbstractController
{
    #[Route('/mapaNav', name: 'mapa_nav')]
    public function index(): Response
    {
        
        return $this->render('mapa_nav/index.html.twig', [
            'controller_name' => 'MapaNavController',
        ]);
    }
}
