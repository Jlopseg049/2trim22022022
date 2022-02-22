<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('Foto')
            ->add('email',       TextType::class, array('label' => 'Correo',             'attr' => array('class' => 'input-control'
                                ,'placeholder' => 'Correo')))
            ->add('foto',        FileType::class, ['label' => 'Seleccione una foto de perfil',  'attr' => array('class' => 'input-control'),
                                'required' => false,               "constraints" => [ new Image([ 'maxSize' => '1024k'])]])
            
            ->add('username',    TextType::class, array('label' => 'Nombre de Usuario',  'attr' => array('class' => 'input-control'
                                ,'placeholder' => 'username')))
            
            ->add('name',        TextType::class, array('label' => 'Nombre',             'attr' => array('class' => 'input-control'
                                ,'placeholder' => 'Nombre')))
            
            ->add('ap1',         TextType::class, array('label' => 'Apellido 1',         'attr' => array('class' => 'input-control'
                                ,'placeholder' => 'Apellido 1')))

            ->add('ap2',         TextType::class, array('label' => 'Apellido 2',         'attr' => array('class' => 'input-control'
                                ,'placeholder' => 'Apellido 2'),     'required' => false))
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            // ->add('plainPassword', PasswordType::class, [
            //     // instead of being set onto the object directly,
            //     // this is read and encoded in the controller
            //     'label' => "Contraseña",
            //     'mapped' => false,
            //     'attr' => ['autocomplete' => 'new-password'],
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Please enter a password',
            //         ]),
            //         new Length([
            //             'min' => 6,
            //             'minMessage' => 'Your password should be at least {{ limit }} characters',
            //             // max length allowed by Symfony for security reasons
            //             'max' => 4096,
            //         ]),
            //     ],
            // ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Deben coincidir las contraseñas.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Password','attr'=>  ['placeholder' => 'Password']],
                'second_options' => ['label' => 'Repeat Password','attr' =>['placeholder' =>  'Repeat Password'] ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
