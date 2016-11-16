<?php

namespace RessourceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FenetreHoraireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lundiDebut')->add('lundiFin')->add('mardiDebut')->add('mardiFin')->add('mercrediDebut')->add('mercrediFin')->add('jeudiDebut')->add('jeudiFin')->add('vendrediDebut')->add('vendrediFin')       ->add('Enregistrer', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RessourceBundle\Entity\FenetreHoraire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ressourcebundle_fenetrehoraire';
    }


}
