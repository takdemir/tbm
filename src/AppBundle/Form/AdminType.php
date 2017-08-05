<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('musteriid')
            ->add('name')
            ->add('username')
            ->add('password', PasswordType::class)
            ->add('cdate')
            ->add('roles',ChoiceType::class,
                ['choices'=>[   'Super Admin'=>'ROLE_SUPERADMIN',
                                'Admin'=>'ROLE_ADMIN',
                                'Operator'=>'ROLE_OPERATOR',
                                'Müşteri Temsilcisi'=>'ROLE_USER']])
            ->add('statu',ChoiceType::class,['choices'=>['Aktif'=>1,'Pasif'=>0]])
            ->add('save',SubmitType::class,['label'=>'Kaydet']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Admin',
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_admin';
    }


}
