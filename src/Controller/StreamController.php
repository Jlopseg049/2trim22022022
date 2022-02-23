<?php

namespace App\Controller;

use App\Entity\Canal;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StreamController extends AbstractController
{

    //normalmente añadiremos mas adelante el id del streamer,
    //En la fase de desarrollo, al solo tener una posible sala,
    //solo usamos la ruta stream
    #[Route('/stream/{canalId}', name: 'stream')]
    public function index(string $canalId , ManagerRegistry $doctrine): Response
    {
        $Canal = $doctrine->getRepository(Canal::class)->findOneById($canalId);
        //Si no existe canal, creo mi propio error 404. Más adelante el error
        // 404 tendrá su propia plantilla de twig para mostrarlo de una manera más
        // integra con la estructura de la página.
        if (!$Canal) {
            throw $this->createNotFoundException('The Stream does not exist');
        }
        if ($Canal) {
            return $this->render('stream/index.html.twig',[
                                        'canal' => $Canal
            ]);
        }


    }
}
