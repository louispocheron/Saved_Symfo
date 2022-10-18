<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MailerService extends AbstractType{

    public function buildForm(FormBuilderInterface $formBuilder, array $option): void
        {
            $formBuilder
                ->add('email')
                ->add('content', TextAreaType::class)
                ->add('envoyer', SubmitType::class)
                ;

        }


}


    