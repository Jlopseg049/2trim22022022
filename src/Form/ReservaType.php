<?php

namespace App\Form;

use App\Entity\Reserva;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechaInicio', DateTimeType::class,[
                'widget'=>'single_text',
                'required' => true
            ])
            ->add('fechaFin',    DateTimeType::class,[
                'widget'=>'single_text',
                'required' => true
            ])
            ->add('precio',
            NumberType::class,
            array('attr' => array('scale'=>2,'placeholder' => 'Precio por hora en')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reserva::class,
        ]);
    }
}
