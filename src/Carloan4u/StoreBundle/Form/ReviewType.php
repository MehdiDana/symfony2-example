<?php

namespace Carloan4u\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('dealership')
            ->add('rate')
            ->add('name')
            ->add('email')
            ->add('review_title')
            ->add('review_description')
            ->add('approved')
        ;
    }

    public function getName()
    {
        return 'carloan4u_storebundle_reviewtype';
    }
}
