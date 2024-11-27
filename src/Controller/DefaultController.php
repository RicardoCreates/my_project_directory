<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'Home')]
    public function index(): Response
    {
        return $this->render('homePage/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
