<?php

namespace App\Controller;


use App\Repository\ActionRepository;
use App\Repository\AssociationsRepository;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Entity\Action;
use App\Entity\Associations;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class SuperAdminController extends AbstractController
{
    #[Route('/superadmin', name: 'super_admin')]
    public function index(EntityManagerInterface $em, AssociationsRepository $assocRepo, Request $request, PaginatorInterface $paginator): Response
    {

        $user = $this->getUser();

        $associations = $paginator->paginate(
            $assocRepo->findAll(),
            $request->query->getInt('page', 1),
            10
        );
    
        return $this->render('super_admin/index.html.twig', [
            'controller_name' => 'SuperAdminController',
            'associations' => $associations,
        ]);
    }

    #[Route('/superadmin/{id}', name: 'super_admin_assoc')]
    public function assoc(AssociationsRepository $repo, ActionRepository $actionRepo, Request $request): Response
    {
        $user = $this->getUser();
        $assocId = $request->attributes->get('id');


        $association = $repo->find($assocId);
        $actions = $actionRepo->findByAssociation($association);
        $userAction = $actionRepo->findByUsers($user);
        // dd($association);
        
        // get all users from $assocation
        foreach($association->getUsers() as $user){
            $users[] = $user;
        }


        return $this->render('super_admin/assoc.html.twig', [
            'association' => $association,
            'actions' => $actions ?? false,
            'users' => $users ?? false,
            'controller_name' => 'SuperAdminController',
        ]);
    }

    #[Route('/superadmin/{id}/user/{userID}', name: 'super_admin_user')]
    public function user(AssociationsRepository $repo, ActionRepository $actionRepo, Request $request, UserRepository $userRepo): Response
    {
        $user = $this->getUser();
        $assocId = $request->attributes->get('id');
        $userId = $request->attributes->get('userID');
        $userId = $userRepo->find($userId);

        $association = $repo->find($assocId);
        $action = $actionRepo->findByAssociationAndUser($association, $userId);

        //convert getDuree to hours and minutes

        return $this->render('super_admin/user.html.twig', [
            'association' => $association,
            'actions' => $action ?? false,
            'user' => $userId,
            'controller_name' => 'SuperAdminController',
        ]);
    }

    #[Route('/superadmin/{id}/deleteUser/{userID}', name: 'super_admin_user_delete')]
    public function deleteUser(AssociationsRepository $repo, ActionRepository $actionRepo, Request $request, UserRepository $userRepo, EntityManagerInterface $em): Response
    {
    
        $assocId = $request->attributes->get('id');
        $userId = $request->attributes->get('userID');
        $userId = $userRepo->find($userId);
        $association = $repo->find($assocId);
        
        $userAction = $actionRepo->findByAssociationAndUser($association, $userId);

        foreach($userAction as $action){
            $em->remove($action);
        }

        $association->removeUser($userId);
        $em->flush();

        return $this->redirectToRoute('super_admin_assoc', [
            'id' => $assocId,
        ]);
    }

    #[Route('/superadmin/{idAssoc}/user/{userId}/delete/{id}', name: 'super_admin_action_delete')]
    public function DeleteActionEndPoint(ActionRepository $actionRepo, $idAssoc, $userId, $id, EntityManagerInterface $entityManager): Response
    {
        $action = $actionRepo->find($id);
        $entityManager->remove($action);
        $entityManager->flush();
        
        return $this->redirectToRoute('super_admin_user', ['id' => $idAssoc, 'userID' => $userId]);
    }



    #[Route('/superadmin/{id}/change/admin', name: 'super_admin_action_change_admin')]
    public function changeAdmin(UserRepository $repo, $id, PaginatorInterface $paginator, Request $request, AssociationsRepository $assocRepo): Response
    {
        $association = $assocRepo->findById($id);
        $allUsers = $repo->findAll();
        $users = $paginator->paginate(
            $allUsers,
            $request->query->getInt('page', 1),
            20
        );


        return $this->render('super_admin/change.html.twig', [
            'users' => $users,
            'association' => $association,
            'controller_name' => 'change admin',
        ]);
    }
    #[Route('/superadmin/{id}/change/admin/{userId}/endpoint', name: 'super_admin_action_change_admin_endpoint')]
    public function changeAdminEndpoint($id, $userId, AssociationsRepository $assocRepo, UserRepository $userRepo, EntityManagerInterface $entityManager, Request $request):Response
    {
        $idNeeded = $request->attributes->get('id');
        $association = $assocRepo->findOneById($id);
        $user = $userRepo->findOneById($userId);

        // dd(gettype($user));
        // $user = $user[0];    
        $association->setUser($user);
        $entityManager->persist($association);
        $entityManager->flush();
        return $this->redirectToRoute('super_admin_action_change_admin', ['id' => $idNeeded]);

        // return $this->json([
        //         'code' => 200,
        //         'message' => 'ok',
        // ], 200);
    }

    #[Route('/superadmin/{idAssoc}/ajax_endpoint', name: 'data_user_admin')]
    public function DataAdminActions(ActionRepository $repo, AssociationsRepository $assocRepo, Request $request){

        $assocId = $request->attributes->get('idAssoc');
        $association = $assocRepo->find($assocId);

        $actions = $repo->findByAssociationForAjax($association);


        return new JsonResponse([
            'data' => $actions,
        ]);
    }
}
