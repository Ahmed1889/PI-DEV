<?php

namespace BackBundle\Form;

use BackBundle\Entity\Fournisseur;
use BackBundle\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandefType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantite')->add('idcf',EntityType::class, [
            // looks for choices from this entity
            'class' => Fournisseur::class,
            'choice_label' => 'nomf',
        ])->add('idcp',EntityType::class, [
            // looks for choices from this entity
            'class' => Produit::class,

            // uses the User.username property as the visible option string
            'choice_label' => 'libelleP',

            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Commandef'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backbundle_commandef';
    }


}
