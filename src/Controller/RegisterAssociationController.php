<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Associations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Service\GlobalVariables\GlobalVariables;

class RegisterAssociationController extends AbstractController
{
    #[Route('/assocRegister', name: 'register_association')]
    public function index(Request $request, EntityManagerInterface $entityManager,): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $association = new Associations();
        $setrole = new user();

        $form = $this->createFormBuilder($association)
                     ->add('name', TextType::class, [
                        'label' => 'Nom de l\'association',
                        'attr' => [
                            'placeholder' => 'Nom de l\'association',
                            ],
                        ])
                     ->add('logo', FileType::class, [
                        //  allow the user to not upload a file
                        'required' => false,
                        'label' => 'logo de l\'association',
                        'multiple' => false,
                        'mapped' => false,

                        'constraints' => [   
                            new Assert\File([
                                'maxSize' => '1024k',
                                'mimeTypes' => [
                                    'image/jpeg',
                                    'image/png',
                                    'image/jpg',
                                ],
                                'mimeTypesMessage' => 'Uploadez une image valide',
                            ])
                        ]])
                     ->add('description', TextType::class, [
                         'label' => 'Description',
                         'attr' => [
                            'placeholder' => 'Description de l\'association',
                            ],
                            ],
                         )
                     ->add('numeroSiret', TextType::class, [
                         'label' => 'Numéro de siret',
                         'attr' => [
                            'placeholder' => 'Numéro de siret',
                            ],
                         ])
                     ->add('region', choiceType::class, [
                            'label' => 'Région',
                            'choices' => [
                                'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                                'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté',
                                'Bretagne' => 'Bretagne',
                                'Centre-Val de Loire' => 'Centre-Val de Loire',
                                'Corse' => 'Corse',
                                'Grand Est' => 'Grand Est',
                                'Hauts-de-France' => 'Hauts-de-France',
                                'Île-de-France' => 'Île-de-France',
                                'Normandie' => 'Normandie',
                                'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
                                'Occitanie' => 'Occitanie',
                                'Pays de la Loire' => 'Pays de la Loire',
                                'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
                            ],
                            'attr' => [
                                'placeholder' => 'Région',
                                ],
                            ])
                            ->add('departement', TextType::class, [
                                'label'=>'Numero département',
                                'attr' => [
                                    'placeholder' => "ex: 39"
                                ]
                            ])
                     ->add('enregister', SubmitType::class, ['label' => 'Enregistrer'])
                     ->getform();


                     $form->handleRequest($request);

                        if($form->isSubmitted() && $form->isValid()){
                            // dd($form->get('region')->getData());
                                // RECUPERATION DE L'IMAGE
                            $file = $form->get('logo')->getData(); 
                            
                            // if(!isset($file)){
                            //     $association->setLogo()
                            // }
                            if($file){
                                // GENERATION DU NOM DU FICHIER
                            $fileName = md5(uniqid()).'.'.$file->guessExtension();
                            // dd($fileName);
                                // DEPLACEMENT DU FICHIER VERS LE DESTINATION
                            $file->move(
                                $this->getParameter('logo_directory'),
                                $fileName
                                );
                                // ENREGISTREMENT DU NOM DU FICHIER DANS L'ENTITE
                            $association->setLogo($fileName);
                            }
                            
                            $association = $form->getData();
                            $association->setUser($user);
                            // SET ROLE ADMIN
                            $entityManager->persist($association);
                            $entityManager->flush();
                            
                            // ERROR : QUAND JE FLUSH ET PERSIST L'ENTITE, LE USER EST DECONNECTE
                            // SET LE ROLE ADMIN A L'UTILISATEUR QUI CREER UNE ASSOCIATION
                            // $user->setRoles(['ROLE_ADMIN' . $association->getId()]);
                            // $entityManager->persist($user);
                            // $entityManager->flush();
                            // $isadmin = $global->

                            return $this->redirectToRoute('home');
                        }


        return $this->render('register_association/index.html.twig', [
            'controller_name' => 'RegisterAssociationController',
            'form' => $form->createView(),
        ]);
        
    }
}
