<?php

namespace ActiviteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ActiviteType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('designation')
                ->add('dureeMin')
                ->add('dureeMax')
                ->add('nbEnfantsMin')
                ->add('nbEnfantsMax')
                ->add('dureeTransport')
                ->add('typesActivite', null, array('required' => true))
                ->add('OK', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'ActiviteBundle\Entity\Activite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'activitebundle_activite';
    }


}
