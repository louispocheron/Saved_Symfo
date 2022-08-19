<?php

namespace App\Controller;

use App\Repository\ActionRepository;
use App\Repository\UserRepository;
use App\Entity\Action;
use App\Entity\Associations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AssociationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Service\PdfService;
use Symfony\Component\Validator\Constraints\File;





class AdminController extends AbstractController
{

    private function denyeAcess(Request $request, AssociationsRepository $repo){

        $user = $this->getUser();
        $userId = $user->getId();

        $assocId = $request->attributes->get('idAssoc');
        // dd($assocId);
        $association = $repo->find($assocId);
        
        return $userId != $association->getUser()->getId();
    }


    #[Route('/admin/{idAssoc}', name: 'admin')]
    public function index(AssociationsRepository $repo, ActionRepository $actionRepo, Request $request,PaginatorInterface $paginator ): Response
    {   
        $user = $this->getUser();
        $userId = $user->getId();
        $assocId = $request->attributes->get('idAssoc');
        $association = $repo->find($assocId);

        if($this->denyeAcess($request, $repo)){
            // TU PEUX RENVOYER UNE ERREUR ICI CAR LE MEC ESSAYE DE TRICHER
            return $this->redirectToRoute('home');
        }

        $actions = $actionRepo->findByAssociation($association);
        $userAction = $actionRepo->findByUsers($user);
    
        // get all users from $assocation
        foreach($association->getUsers() as $user){
            $users[] = $user;
        }
        $users = $paginator->paginate(
            $users ?? [],
            $request->query->getInt('page', 1),
            8
        );

    
        return $this->render('admin/index.html.twig', [
            'association' => $association,
            'actions' => $actions ?? false,
            'users' => $users ?? false,
            'controller_name' => 'AdminController',
        ]);
    }




    #[Route('/admin/{idAssoc}/user/{id}', name: 'admin_user')]
    public function userInfo(Request $request, UserRepository $userRepo, AssociationsRepository $repo, ActionRepository $actionRepo): Response
{   
    if($this->denyeAcess($request, $repo)){
        // TU PEUX RENVOYER UNE ERREUR ICI CAR LE MEC ESSAYE DE TRICHER
        return $this->redirectToRoute('home');
    }

    $user = $this->getUser();
    $userId = $request->attributes->get('id');  
    $uniqueUser = $userRepo->find($userId);
  

    $association = $request->attributes->get('idAssoc');
    // RESTREINT L'ACCES A LA PAGE ADMIN . IDASSOC
    // $this ->denyAccessUnlessGranted('ROLE_ADMIN'.$association, null, 'Vous n\'avez pas accès à cette page');

    $uniqueAssociation = $repo->find($association);
    $userAction = $actionRepo->findByUsers($uniqueUser);
    $year = $request->get("year");
    $month = $request->get("month");

    if($month == ''){
            $actionYearAndMonth = $actionRepo->findByUserAndYear($uniqueUser, $year);
        }
        if($year == 'rien' && $month == ''){
            $actionYearAndMonth = $actionRepo->findAllActionByUser($uniqueUser);
        }
        if($year != 'rien' && $month != ''){
            $actionYearAndMonth = $actionRepo->findByUserAndYearAndMonth($uniqueUser, $year, $month);
        }


//    dd($actionYear);
//   ON VERIFIE SI IL Y A DE l'AJAX 
    if($request->get("ajax")){
    
        return new JsonResponse([
             'content' => $this->renderView(
                'admin/action_user.html.twig', [
                    'association' => $uniqueAssociation,
                    'user' => $uniqueUser,
                    'userAction' => $actionYearAndMonth,
                    'year' => $year,
                    'month' => $month,
                    'controller_name' => 'AdminController',
                ]
            )
        ]);
    }
    


    return $this->render('admin/user.html.twig', [
        'association' => $uniqueAssociation,
        'user' => $uniqueUser,
        'userAction' => $userAction,
        'controller_name' => 'AdminController',
    ]);
}


    #[Route('/admin/{idAssoc}/user/remove/{id}', name: 'remove_user')]
    public function removeUserFromAssoc(Request $request, UserRepository $userRepo, EntityManagerInterface $entityManager, AssociationsRepository $repo, ActionRepository $actionRepo): Response
    {

        if($this->denyeAcess($request, $repo)){
            // TU PEUX RENVOYER UNE ERREUR ICI CAR LE MEC ESSAYE DE TRICHER
            return $this->redirectToRoute('home');
        }


        // DELETE USER FROM ASSOC AND ALL ACTIONS HE HAS DONE WITH THIS ASSOC
        $user = $this->getUser();
        $userId = $request->attributes->get('id');
        $uniqueUser = $userRepo->find($userId);
        $association = $request->attributes->get('idAssoc');
        $uniqueAssociation = $repo->find($association);

        $userAction = $actionRepo->findByAssociationAndUser($uniqueAssociation, $uniqueUser);

        foreach($userAction as $action){
            $entityManager->remove($action);
        }

        // remove selected user from association
        $uniqueAssociation->removeUser($uniqueUser);
        $entityManager->flush();
    

        return $this->redirectToRoute('admin', ['idAssoc' => $association]);
    }


    #[Route('/admin/{idAssoc}/user/{id}/remove/{action}', name: 'remove_action')]
    public function removeAction(EntityManagerInterface $em, Request $request, ActionRepository $actionRepo, AssociationsRepository $repo, $action): Response
    {

        if($this->denyeAcess($request, $repo)){
            // TU PEUX RENVOYER UNE ERREUR ICI CAR LE MEC ESSAYE DE TRICHER
            return $this->redirectToRoute('home');
        }

        
        $association = $request->attributes->get('idAssoc');
        $userId = $request->attributes->get('id');
        $actionId = $actionRepo->find($action);
        $em -> remove($actionId);
        $em -> flush();

        return $this->redirectToRoute('admin_user', ['idAssoc' => $association, 'id' => $userId]);
    }
    
    #[Route('/admin/user/{userId}/pdf/{actionId}/{idAssoc}', name: 'pdf_action')]
    public function pdfAction(ActionRepository $actionRepo, $userId, PdfService $pdfService, $actionId, Request $request, AssociationsRepository $repo)
    {

        $user = $this->getUser();
        // if($this->denyeAcess($request, $repo)){
        //     // TU PEUX RENVOYER UNE ERREUR ICI CAR LE MEC ESSAYE DE TRICHER
        //     return $this->redirectToRoute('home');
        // }

        $action = $actionRepo->find($actionId);
        $html = $this->renderView('admin/pdf.html.twig', [
            'action' => $action,
            'user' => $user,
        ]);
        $pdfService->generatePdf($html);

    }

    #[Route('/choose', name: 'admin_choose')]
    public function chooseAssociation(Request $request, AssociationsRepository $repo): Response
    {
        $user = $this->getUser();

        $admin = $repo->AssociationForAdmin($user);

        // formbuilder to change association's logo

        return $this->render('admin/choose.html.twig', [
            'admin' => $admin,
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/{idAssoc}/changeLogo', name: 'change_logo')]
    public function changeLogo(Request $request, AssociationsRepository $repo, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $association = $repo->find($request->get('idAssoc'));

        // dd($request);
        $logo = $request->files->get('logo');
        $violations = $validator->validate(
            $logo,
            new File([
                'maxSize' => '1024k',
                'mimeTypes' => [
                    'image/png',
                    'image/jpeg',
                    'image/jpg',
                ],
                'maxSizeMessage' => 'Le fichier est trop volumineux. ({{ size }} {{ suffix }}). La taille maximum est de {{ limit }} {{ suffix }}.',
                'mimeTypesMessage' => 'Le fichier doit être une image.',
            ])
        );
        if($violations->count() > 0){
            /** @var ConstraintViolation $violation */
            $violation = $violations[0];
            $this->addFlash('error', $violation->getMessage());
        }
        $hasLogo = $association->getLogo();
         if(!isset($hasLogo)){
            $fileName = md5(uniqid()).'.'.$logo->guessExtension();
            $logo->move($this->getParameter('logo_directory'), $fileName);
            $association->setLogo($fileName);
            $em->flush();
            
            // DANS LE ELSE ON UNLIK DEJA LE LOGO PRESENT
        } else {
                $fileName = md5(uniqid()).'.'.$logo->guessExtension();
                $logo->move($this->getParameter('logo_directory'), $fileName);
                unlink($this->getParameter('logo_directory').'/'.$hasLogo);
                $association->setLogo($fileName);
                $em->flush();    
            }
        return $this->redirectToRoute('admin_choose'); 
    }

}

