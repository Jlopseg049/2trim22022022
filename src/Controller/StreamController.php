<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StreamController extends AbstractController
{

    //normalmente añadiremos mas adelante el id del streamer,
    //En la fase de desarrollo, al solo tener una posible sala,
    //solo usamos la ruta stream
    #[Route('/stream', name: 'stream')]
    public function index(): Response
    {
        return $this->render('stream/index.html.twig');
    }
}
