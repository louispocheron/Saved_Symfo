<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ActionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\AssociationsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;


class RecapitulatifController extends AbstractController
{
    #[Route('/recapitulatif', name: 'recapitulatif')]
    public function index(ActionRepository $actionRepo, PaginatorInterface $paginator, Request $request, UserRepository $userRepo): Response
    {

        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $actions = $actionRepo->findByUsers($user);
        $latest = $actionRepo->findLatestAction($user);	

        $actions = $paginator->paginate(
            $actions,
            $request->query->getInt('page', 1),
            100000000
        );

        $userId = $user->getId();
        $uniqueUser = $userRepo->find($userId);
        
        $year = $request->get("year");
        $month = $request->get("month");
        // $all = $request->get("all");
   
        
        //  dd($actionRepo->findByUserAndMonth($uniqueUser, 3));


        // REFACTOR EN SWITCH CASE APRES PSQ DEGUEU CA 
        if($year != "rien" && $month == '') {
            $actionYearAndMonth = $actionRepo->findByUserAndYear($uniqueUser, $year);
            // $actionYearAndMonth = "hey";
        }
        if($year == "rien" && $month == '') {
            $actionYearAndMonth = $actionRepo->findByUser($uniqueUser);
            // $actionYearAndMonth = "hey";
        }
        if($year != 'rien' && $month != ''){
            $actionYearAndMonth = $actionRepo->findByUserAndYearAndMonth($uniqueUser, $year, $month);
            // $actionYearAndMonth = "hey1";
        }
        if($year == 'rien' && $month != ''){
            $actionYearAndMonth = $actionRepo->findByUserAndMonth($uniqueUser, $month);
            // $actionYearAndMonth = "hey2";
        }

        if($request->get("ajax")){
            return new JsonResponse([
                'content' => $this->renderView(
                   'recapitulatif/action_recap.html.twig', [
                        'actions' => $actionYearAndMonth,
                        'user' => $uniqueUser,
                        'year' => $year,
                        'month' => $month,
                   ]),
           ]);
        }
    
         
        return $this->render('recapitulatif/index.html.twig', [
            'controller_name' => 'RecapitulatifController',
            'user' => $user,
            'actions' => $actions,
            'latest' => $latest,
        ]);
    }

#[Route('/recapitulatif/remove/{id}', name: 'recapitulatif_remove')]
    public function removeAction(ActionRepository $repo, $id, EntityManagerInterface $entityManager){
        $action = $repo->find($id);
        $entityManager->remove($action);
        $entityManager->flush();

        return $this->redirectToRoute('recapitulatif');
    }


    #[Route('/recapitulatif/pdf/{id}/{userId}', name: 'recapitulatif_pdf')]
    public function pdfAction(ActionRepository $repo, $id, $userId){

        $user = $this->getUser();
        $userRealId = $user->getId();
        $action = $repo->find($id);
        if($userId != $userRealId){
            // TU PEUX RENVOYER UNE ERREUR ICI CAR LE MEC ESSAYE DE TRICHER
            return $this->redirectToRoute('home');
        }
        // else{
        //    dd('salut');
        return $this->render('pdf/test.html.twig', [
            'action' => $action
        ]);
            //  return $this->redirectToRoute('pdf/test.html.twig');
    }

    #[Route('/recapitulatif/{id}', name: 'recapitulatif_more')]
    public function presiseAction(ActionRepository $repo, $id){
        $action = $repo->find($id);


        return $this->render('recapitulatif/information.html.twig', [
            'action' => $action, 
        ]);
    }

}
