<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepresentantType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('prenom')
            ->add('email',EmailType::class)
            ->add('telephone',NumberType::class)
            ->add('addresse',ChoiceType::class,array(
                'choices' =>
                            array('Ariana'=> 'ariana','Beja'=> 'beja','Ben Arous'=> 'benarous','Bizerte'=> 'bizert','Gabes'=> 'gabes',
                    'Gafsa'=> 'gafsa','Jendouba'=> 'Jendouba','Kairouan'=> 'kairouan','Kasserine'=> 'kassirine','Kebili'=> 'kebeli',
                    'Le Kef'=> 'lekef','Mahdia'=> 'mahdia','La Manouba'=> 'lamanouba','Medenine'=> 'medenine','Monastir'=> 'monastir',
                    'Nabeul'=> 'nabeul','Sfax'=> 'sfax','Sidi Bouzid'=> 'sidibouzid','Siliana'=> 'siliana','Sousse'=> 'sousse',
                    'Tataouine'=> 'tataouine','Tozeur'=> 'tozeur','Tunis'=> 'tunis','Zaghouan'=> 'zaghouan',)))
            ->add('fournisseurs')
            ->add('depots');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Representant'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backbundle_representant';
    }


}
