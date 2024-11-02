<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // $builder
        //     ->add('Nombre')
        //     ->add('Apellidos')
        //     ->add('Grado')
        //     ->add('Edad')
        //     ->add('Seccion')
        //     ->add('Guardar',SubmitType::class)
        // ;

        $builder
                ->add('Nombre' , TextType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'form-label'],
                ])
                ->add('Apellidos' , TextType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'form-label'],
                ])
                ->add('Grado' , TextType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'form-label'],
                ])
                ->add('Edad' , TextType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'form-label'],
                ])
                ->add('Seccion' , TextType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'form-label'],
                ])

                ->add('foto' , FileType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label_attr' => ['class' => 'form-label'],
                ])

                ->add('Guardar',SubmitType::class)
            ;


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
