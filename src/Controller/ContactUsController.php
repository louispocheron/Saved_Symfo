<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\JsonResponse;


class ContactUsController extends AbstractController
{
    #[Route('/contact-us', name: 'app_contact_us')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $user = $this->getUser();
        $userEmail = $user->getEmail();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //     // Form data is valid, do something with it (e.g. send an email)
            //     // dd($form->get("Sujet")->getData());
            $subject = $form->get("Sujet")->getData();
            $message = $form->get("Message")->getData();
            // dd($message);
            //     // ...
            $email = (new Email())
                ->from($userEmail)
                ->to("pocheron.louis@gmail.com")
                ->subject($subject)
                ->text($message);

            $mailer->send($email);
            return new JsonResponse(array('status' => 'success'));
           
        }


        return $this->render('contact_us/index.html.twig', [
            'controller_name' => 'ContactUsController',
            'form' => $form->createView(),
        ]);
    }
}
