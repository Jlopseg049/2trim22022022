<?php

namespace App\Form;

use App\Entity\Reserva;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class ReservaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('cliente', HiddenType::class, [               'required' => true,'attr' =>['placeholder' => 'Fecha de inicio'],
        'empty_data' => '',
        'mapped' => false])
        ->add('canal', HiddenType::class, [               'required' => true,'attr' =>['placeholder' => 'Fecha de inicio'],
        'empty_data' => '',
        'mapped' => false])
        ->add('precio', HiddenType::class, [               'required' => true,'attr' =>['placeholder' => 'Fecha de inicio'],
        'empty_data' => '',
        'mapped' => false])
            ->add('fechaInicio', TextType::class,[
                'required' => true,'attr' =>['placeholder' => 'Fecha de inicio'],
                'empty_data' => '',
                'mapped' => false])
            ->add('fechaFin',    TextType::class,[
                'required' => true,'attr' =>['placeholder' => 'Fecha de fin'],
                'empty_data' => '',
                'mapped' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reserva::class,
        ]);
    }
}
