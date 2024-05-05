<?php
// src/Controller/UsersController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UsersController extends AbstractController
{
   #[Route('/users', name: 'users')]
   public function ajax(): Response
   {
       return $this->render('users/index.html.twig');
   }
}
