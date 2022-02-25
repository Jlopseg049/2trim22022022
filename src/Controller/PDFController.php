<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PDFController extends AbstractController
{
    #[Route('/pdf', name: 'p_d_f')]
    public function index(): Response
    {
  // Configure Dompdf according to your needs
  $pdfOptions = new Options();
  $pdfOptions->set('defaultFont', 'Arial');
  
  // Instantiate Dompdf with our options
  $dompdf = new Dompdf($pdfOptions);
  
  // Retrieve the HTML generated in our twig file
  $html = $this->renderView('reserva/esquema.html.twig', [
      'controller_name' => "Welcome to our PDF Test"
  ]);
  
  // Load HTML to Dompdf
  $dompdf->loadHtml($html);
  
  // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
  $dompdf->setPaper('A4', 'portrait');

  // Render the HTML as PDF
  $dompdf->render();

  // Output the generated PDF to Browser (inline view)
  $dompdf->stream("mypdf.pdf", [
      "Attachment" => false
  ]);
}
    }

