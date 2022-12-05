<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactUsController extends AbstractController
{
    #[Route('/contact-us', name: 'app_contact_us')]
    public function index(): Response
    {
        return $this->render('contact_us/index.html.twig', [
            'controller_name' => 'ContactUsController',
        ]);
    }
}
