<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\FileType;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('foto',        FileType::class, ['label' => 'Seleccione una foto de perfil',
        'required' => false, "data_class" => null])

        ->add('username',    TextType::class, array('label' => 'Nombre de Usuario',  'attr' => array('class' => 'input-control'
                ,'placeholder' => 'username')))

        ->add('name',        TextType::class, array('label' => 'Nombre',             'attr' => array('class' => 'input-control'
                ,'placeholder' => 'Nombre')))

        ->add('ap1',         TextType::class, array('label' => 'Apellido 1',         'attr' => array('class' => 'input-control'
                ,'placeholder' => 'Apellido 1')))

        ->add('ap2',         TextType::class, array('label' => 'Apellido 2',         'attr' => array('class' => 'input-control'
                ,'placeholder' => 'Apellido 2'),     'required' => false))
                ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
