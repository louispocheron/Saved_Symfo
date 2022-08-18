<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ActionRepository;


class MonCompteController extends AbstractController
{
    #[Route('/moncompte', name: 'mon_compte')]
    public function index(ActionRepository $repo): Response
    {

        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $actions = $repo->findByUsers($user);
        $actions = count($actions);
        

        return $this->render('mon_compte/index.html.twig', [
            'controller_name' => 'MonCompteController',
            'user' => $user,
            'actions' => $actions ?? false,
        ]);
    }
}
