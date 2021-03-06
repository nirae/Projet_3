<?php

namespace Louvre\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class TicketType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array('class' => 'ticket'),
                'label' => 'Nom',
            ))
            ->add('firstName', TextType::class, array(
                'label' => 'Prénom',
            ))
            ->add('reducedPrice', CheckboxType::class, array(
                'label' => 'Tarif réduit*',
                'required' => false,
            ))
            ->add('birthDate', BirthdayType::class, array(
                'label' => 'Date de naissance',
                'placeholder' => array(
                    'year' => 'Année',
                    'month' => 'Mois',
                    'day' => 'Jour'
                ),
                'format' => 'dd-MM-yyyy',
            ))
            ->add('country', CountryType::class, array(
                'label' => 'Pays',
                'placeholder' => 'Choisissez dans la liste',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Louvre\ReservationBundle\Entity\Ticket'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'louvre_reservationbundle_ticket';
    }


}
