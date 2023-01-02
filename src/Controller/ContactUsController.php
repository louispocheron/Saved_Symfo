<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class ContactUsController extends AbstractController
{
    #[Route('/contact-us', name: 'app_contact_us')]
    public function index(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        // $form = $this->createFormBuilder()   
        //              ->add('Apropos', TextType::class, [
        //                 'label' => 'A propos',
        //              ])
        //              ->add('message', TextType::class, [
        //                 'label' => 'Message',
        //              ])
        //              ->add('enregistrer', SubmitType::class, ['label' => 'Envoyer'])
        //             ->getForm();

        //             $form->handleRequest($request);
                    
        // if($form->isSubmitted() && $form->isValid()){
        //     dd($form->getData());
        // }
        

        return $this->render('contact_us/index.html.twig', [
            'controller_name' => 'ContactUsController',
            // 'form' => $form->createView(),
        ]);
    }
}
