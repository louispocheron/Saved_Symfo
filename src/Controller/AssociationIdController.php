<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Associations;
use App\Repository\AssociationsRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;




class AssociationIdController extends AbstractController
{
    #[Route('/associations/{id}', name: 'unique_association')]
    public function index(AssociationsRepository $repo, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $association = $request->attributes->get('id');
        $association = $repo->find($association);


        
        return $this->render('association/association.html.twig', [
            
            'association' => $association,
            'controller_name' => 'AssociationIdController',
        ]);
    }
}