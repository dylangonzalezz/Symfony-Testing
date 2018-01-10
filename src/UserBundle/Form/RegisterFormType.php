<?php

namespace Acme\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class)
            ->add('email',EmailType::class)
            ->add('plainPassword',RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => "The Password fields don't match",
                'required' => true
            ))
            ->getForm();
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        //Have the Form return more than an array
        $resolver->setDefaults(array(
            'data_class' => 'Acme\UserBundle\Entity\User',
        ));
    }


    public function getName()
    {
        return 'user_register';
    }
}