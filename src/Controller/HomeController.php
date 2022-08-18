<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\AssociationsRepository;
use App\Repository\ActionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AssociationsRepository $repo, ActionRepository $actionRepo): Response
    {



        $user = $this->getUser();
        // redirect user to login page if not connected
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }




        $securityContext = $this->container->get('security.authorization_checker');
        $user = $this->getUser();
        

        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            
            $role = $user->getRoles()[0];
            $associations = $repo->AssociationForAdmin($this->getUser());
            $latest = $actionRepo->findLatestAction($user);
            $all = $actionRepo->findByUsers($user);
        }

     
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'associations' => $associations ?? false,
            'user' => $user ?? false,
            'latest' => $latest ?? false,
            'userIsAdmin' => count($associations) > 0,
        ]);
        
    }

    #[Route('/', name: 'base')]
public function isAdmin(AssociationsRepository $repo): Response
    {
        $user = $this->getUser();
        $admin = $repo->AssociationForAdmin($user);
        // dd($latest);
        $salut = "salut";

        return $this->render('base.html.twig', [
            'salut' => $salut,
            'admin' => count($admin) > 0,
        ]);
    }
}
