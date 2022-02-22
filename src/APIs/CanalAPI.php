<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Canal;

class CanalAPI extends AbstractController
{
    #[Route('/canal/precio/{author}', name: 'precioCanal_show')]
        public function show(string $author, ManagerRegistry $doctrine): Response
        {
            $Canal = $doctrine->getRepository(Canal::class)->findPrecioByAuthor($author);
            
            return new Response($Canal[0]["precio"]);
        }
}