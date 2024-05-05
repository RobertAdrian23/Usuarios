<?php
// src/Controller/MotocicletaController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Motocicleta;

class MotocicletaController extends AbstractController
{
    /**
     * @Route("/motocicleta", name="motocicleta_index")
     */
    #[Route('/motocicleta')]
    public function index(): Response
    {
        $motocicleta = new Motocicleta();
        $motocicleta->setMarca('Kawasaki');
        $motocicleta->setModelo('Z400');
        $motocicleta->setColor('Verde');
        $motocicleta->setPrecio('25.000 Bs');

        return $this->render('motocicleta/index.html.twig', [
            'motocicleta' => $motocicleta,
        ]);
    }
}
