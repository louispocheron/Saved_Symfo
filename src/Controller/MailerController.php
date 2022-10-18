<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\MailerService;




class MailerController extends AbstractController
{
    #[Route('/mailer', name: 'app_mailer')]
    public function index(MailerInterface $mailer, Request $request): Response
    {
        $form = $this->createForm(MailerService::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $emailAdress = $form->get('email')->getData();
            $content = $form->get('content')->getData();
            
            $email = (new Email())
                    ->from($emailAdress)
                    ->to('yo@example.com')
                    ->subject('saved nous contacter')
                    ->text($content)
            ;
            $mailer->send($email);
        }


        return $this->renderForm('mailer/index.html.twig', [
            'form' => $form,
        ]);


    }
    
}
