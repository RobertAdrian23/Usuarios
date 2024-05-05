<?php
// src/Controller/PhotoController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PhotoController extends AbstractController
{
   #[Route('/photos', name: 'photos')]
   public function ajax(): Response
   {
       return $this->render('photos/index.html.twig');
   }
}
