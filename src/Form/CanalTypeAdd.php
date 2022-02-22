<?php

namespace App\Form;

use Doctrine\DBAL\Types\FloatType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CanalTypeAdd extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', 
            TextType::class, 
            array('label' => 'Correo'
                 ,'attr' => array('class' => 'input-control'
                 ,'placeholder' => 'nombre'))
            )
            ->add('descripcion',
            TextareaType::class, 
            array('label' => 'descripcion'
                ,'attr' => array('class' => 'input-control'
                ,'placeholder' => 'Descripción'), 'required'=>false))
            ->add('precio',
            NumberType::class,
            array('attr' => array('scale'=>2,'placeholder' => 'Precio por hora en')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
