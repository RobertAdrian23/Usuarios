<?php
// src/Controller/PersonaController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Persona;

class PersonaController extends AbstractController
{
    /**
     * @Route("/persona", name="persona_index")
     */
    #[Route('/persona')]
    public function index(): Response
    {
        $persona = new Persona("Carlos","Rodriguez");
        $persona->setNombre('Omar');
        $persona->setApellido('Alfaro');

        return $this->render('persona/index.html.twig', [
            'persona' => $persona,
        ]);
    }
}
