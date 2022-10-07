<?php

namespace App\Controller;

use App\Entity\Action;
use App\Entity\Associations;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\AssociationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


class SaisieController extends AbstractController
{



    #[Route('/saisie', name: 'saisie')]
    public function index(Request $request, EntityManagerInterface $entityManager, AssociationsRepository $repo): Response
    {

        $isSuperAdmin = false; 
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $action = new Action();
        $charge = $this->getParameter('charge');

        $form = $this->createFormBuilder($action)
                ->add('villeDepart', TextType::class, [
                    'label' => 'Ville de départ',
                    'attr' => [
                        'placeholder' => 'Ex: Paris',
                        'class' => 'villeDepart',
                    ],
                    ])
                ->add('villeArrive', TextType::class, [
                    'label' => 'Ville d\'arrivée',
                    'attr' => [
                        'placeholder' => 'Ex: Lyon',
                    ],
                    ])
                ->add('km', null, [
                    'label' => 'Kilomètres',
                    'attr' => [
                        'placeholder' => 'Ex: 25',
                        ],
                    ])

                ->add('raisons', null, [
                    'label' => 'Raisons',
                    'attr' => [
                        'placeholder' => 'Ex: déplacement pour l\'association',
                        ],
                    ])
                ->add('heureDepart', TimeType::class, [
                    'label' => 'Heure de départ',
                    
                    ])
                ->add('heureArrivee', TimeType::class, [
                    'label' => 'Heure d\'arrivée',
                    ])
                ->add('groupe', ChoiceType::class, [
                    'choices' => [
                        '1' => 10.04,
                        '2' => 10.33,
                        '3' => 11.22,
                        '4' => 11.91,
                        '5' => 13.33,
                        '6' => 16.64
                    ],
                ])
                ->add('charges', null, [
                    'label' => 'Charge',
                    'attr' => [
                        'value' => '42%',
                        'readonly' => true,
                        'placeholder' => '42%',
                    ],
                    ])
                ->add('duree', null, [
                    'label' => 'Durée',
                    'attr' => [
                        'readonly' => true,
                    ],
                    ])
                ->add('frais', null, [
                    'label' => 'Frais',
                    ])

                ->add('date', DateType::class, [
                    'required' => true,
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'html5' => false,
                    'attr' => ['class' => 'flatpickr'],
                    
                    ])

                ->add('fraisKilometrique', TextType::class, [
                    // 'disabled' => true,
                    'attr' => [
                        'readonly' => true,
                        'class' => 'disabled'
                    ],
                ])
                ->add('association', EntityType::class , [
                    'label' => 'Association',
                     "class" => Associations::class,
                     "choice_label" => "name",
                     "query_builder" => function(AssociationsRepository $assocRepo) use ($user) {
                        return $assocRepo->createQueryBuilder('associations')
                        ->andWhere(':user MEMBER OF associations.users')
                        ->setParameter('user', $user->getId())
        ;

                    }])
                ->add('dons', TextType::class, [
                    'attr' => [
                        'readonly' => true,
                    ],
                ])
                ->add('heuresValorisees', TextType::class,[
                    'attr' => [
                        'readonly' => true,
                    ],
                ])
                ->add('aPayer', TextType::class)

                ->add('enregistrer', SubmitType::class, ['label' => 'Enregistrer'])

                ->getForm();
                
        // METTRE DATE DU JOUR PAR DEFAULT 
        $issetDate = $form->get('date')->getData();
        if($issetDate == null){
            $form->get('date')->setData(new \DateTime());
        }
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $action = $form->getData();
            $issetDate = $form->get('date')->getData();
            $action->setUserID($user);
            
            $action->setCreatedAt(new \DateTime());
            $action->setCharges($charge);

            $entityManager->persist($action);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }

        $userAssoc = $this->getUser()->getAssociation()->getValues();

        $IsAssoc = $repo->findAssociationByUser($user);
       


        return $this->render('saisie/index.html.twig', [
            'controller_name' => 'SaisieController',
            'form' => $form->createView(),
            'isAssoc' => $IsAssoc,
            'assocs' => $userAssoc,
            'charges' => $charge,
        ]);
    }

    #[Route('endPointCharges/{values}', name: 'end_point_charges')]
    public function superAdminEndPoint(Request $request)
    {
        if ($this->isGranted('ROLE_ADMIN')) {
             dd($request->attributes->get('values'));
        }
    }

}
