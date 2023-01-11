<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoSaisiesController extends AbstractController
{
    #[Route('/info-saisies', name: 'app_info_saisies')]
    public function index(): Response
    {
        return $this->render('info_saisies/index.html.twig', [
            'controller_name' => 'InfoSaisiesController',
        ]);
    }
}
