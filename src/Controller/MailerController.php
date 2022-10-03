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





class MailerController extends AbstractController
{
    #[Route('/mailer', name: 'app_mailer')]
    public function index(MailerInterface $mailer, Request $request): Response
    {
        $user = $this->getUser();
        $userMail = $user->getEmail();

        $form = $this->createFormBuilder()
                     ->add('sujet', textareaType::class, [
                        'label' => 'Sujet',
                        'attr' => [
                            'placeholder' => 'sujet'
                        ]
                     ])
                     ->add('message', textareaType::class, [
                        'label' => 'Message',
                        'attr' => [
                            'placeholder' => 'Message...'
                        ]
                     ])
                     ->add('enregistrer', SubmitType::class, ['label' => 'Enregistrer'])
                     ->getform();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ 
            $email = (new Email())
                ->from($userMail)
                ->to('pocheron.louisamazon1@gmail.com')
                ->text($form->get('message')->getData() );
                $mailer->send($email);

        }

        // $email = (new Email())
        //     ->from('test@gmail.com')
        //     ->to('pocheron.louis@gmail.com')
        //     ->text('Lorem ipsum...');


        // $mailer->send($email);
        return $this->render('mailer/index.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
