<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Canal;
use App\Entity\Reserva;
use App\Form\ReservaType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StreamController extends AbstractController
{

    //normalmente añadiremos mas adelante el id del streamer,
    //En la fase de desarrollo, al solo tener una posible sala,
    //solo usamos la ruta stream
    #[Route('/stream/{canalId}', name: 'stream')]
    public function index(EntityManagerInterface $entityManager, Request $request, string $canalId , ManagerRegistry $doctrine): Response
    {
        $user = new User();
        $reserva = new Reserva();
        $form = $this->createForm(ReservaType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Vamos a formatear nuestro formulario de la manera que nos interesa
            //Para ello hemos deshabilitado algunas directivas de symfony
            //del fichero vendor/symfony/form/form.php que impiden modificar formularios
            //una vez esten en submitted

            //Sobre la linea 780 y 215 aprox
            $form->get('cliente')->setData($doctrine->getRepository(User::class)
            ->findOneById(intval($form->get('cliente')->getViewData())));
             
            
            $form->get('canal')->setData($doctrine->getRepository(Canal::class)
            ->findOneById(intval($form->get('canal')->getViewData())));
            $form->get('precio')->setData(number_format(floatval($form->get('precio')->getViewData()), 2));

            // $form->get('fechaInicio')->setData(\DateTime::createFromFormat('d/m/Y H:i', 
            // $form->get('fechaInicio')->getViewData()));
       
            // $form->get('fechaFin')->setData(\DateTime::createFromFormat('d/m/Y H:i', 
            // $form->get('fechaFin')->getViewData()));
            
            
            $reserva->setCliente( $form->get('cliente')->getViewData());
            $reserva->setCanal( $form->get('canal')->getViewData());
            $reserva->setPrecio( $form->get('precio')->getViewData());
            $reserva->setFechaInicio( \DateTime::createFromFormat('d/m/Y H:i', 
            $form->get('fechaInicio')->getViewData()));
            $reserva->setFechaFin( \DateTime::createFromFormat('d/m/Y H:i', 
            $form->get('fechaFin')->getViewData()));
            // dd($reserva);
            $entityManager->persist($reserva);
            $entityManager->flush();
        }
        $Canal = $doctrine->getRepository(Canal::class)->findOneById($canalId);
        //Si no existe canal, creo mi propio error 404. Más adelante el error
        // 404 tendrá su propia plantilla de twig para mostrarlo de una manera más
        // integra con la estructura de la página.
        if (!$Canal) {
            throw $this->createNotFoundException('No existe este Stream.');
        }
        if ($Canal) {
            return $this->render('stream/index.html.twig',[
                                        'canal' => $Canal,
                                        'reservaForm' => $form->createView(),
                                    ]);
        }


    }
}
