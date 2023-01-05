<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Sujet', TextType::class, [
            "label" => false,
            'attr' => [
                'placeholder' => 'Sujet',
                'class' => 'sujet-input'
            ]
        ])
        ->add('Message', TextAreaType::class, [
            "label" => false,
            'attr' => [
                'placeholder' => 'Message',
                'class' => 'message-input'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
