<?php

namespace App\Controller;

use App\Entity\Associations;
use App\Entity\User;
use App\Repository\AssociationsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

class AssociationController extends AbstractController
{
    #[Route('/associations', name: 'association')]
    public function index(AssociationsRepository $repo, Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {

        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $assoc = $repo->findAssociationByUser($user);
        $assocList = array();

        if($request->query->has('search')){
            $search = $request->query->get('search');
            $assocList = $repo->filterAssociationByname($search);
        }
        else{
            $assocList = $repo->findAll();
        }

        $isAjax = $request->query->get('ajax') == "1";

        $request->query->remove('ajax');
        $association = $paginator->paginate(
            $assocList,
            $request->query->getInt('page', 1),
            10
        );
    
        
        if( $isAjax == true){
            return $this->render('association/ajax_view.html.twig', [
                'controller_name' => 'AssociationController',
                'associations' => $association,
            ]);
        }
        else{ 
            return $this->render('association/index.html.twig', [
                'controller_name' => 'AssociationController',
                'associations' => $association,
            ]);
        }
    }

    // PERMET D'ADHERER A UNE ASSOCIATION
    #[Route('/associations/adherer/{id}', name: 'association_adherer')]
    public function adhererAssociation(Associations $assoc, EntityManagerInterface $entityManager, UserRepository $repo, AssociationsRepository $assocRepo): response
    {
        $user = $this->getUser();
         if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if($assoc->getUsers()->contains($user)){
            return $this->json([
                'code' => 200,
                'message' => 'deja',
                'adherer' => false
            ], 200);
        }
        else{
            $assoc->addUser($user);
                $entityManager->persist($assoc);
                $entityManager->flush();
                return $this->json([
                    'code' => 200,
                    'message' => 'Vous avez bien adhéré à l\'association',
                    'adherer' => true
                ], 200);
        }
       
    }


    #[Route('/associations/quitter/{id}', name: 'association_quitter')]
    public function quitterAssociation(Associations $assoc, EntityManagerInterface $entityManager, UserRepository $repo, AssociationsRepository $assocRepo): response
    {
        $user = $this->getUser();
         if (!$user) {
            return $this->redirectToRoute('app_login');
        }
      if($assoc->getUsers()->contains($user)){
            $assoc->removeUser($user);
            $entityManager->persist($assoc);
            $entityManager->flush();

            return $this->json([
                'code' => 200,
                'message' => 'Vous avez bien quitté l\'association',
                'adherer' => false,
                'adherant' => true
            ], 200);
        }
        else{
            return $this->json([
                'code' => 200, 
                'message'=> 'Vous n\'êtes pas adhérant a l\'association',
                'adherer' => false,
                'adherant' => false
            ], 200);
        }
    }

}
