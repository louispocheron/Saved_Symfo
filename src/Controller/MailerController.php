<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;



class MailerController extends AbstractController
{
    #[Route('/mailer', name: 'app_mailer')]
    public function index(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('test@gmail.com')
            ->to('pocheron.louis@gmail.com')
            ->text('Lorem ipsum...');


        $mailer->send($email);

    }
}
