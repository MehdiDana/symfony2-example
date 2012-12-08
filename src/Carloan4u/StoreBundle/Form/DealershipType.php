<?php

namespace Carloan4u\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DealershipType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('opening_hours')
            ->add('number_of_car')
            ->add('image')
            ->add('approved')
        ;
    }

    public function getName()
    {
        return 'carloan4u_storebundle_dealershiptype';
    }
}
