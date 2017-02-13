<?php

namespace Aidotech\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PanneType extends AbstractType {

  /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('titre', TextType::class)
        ->add('description', TextareaType::class, ['attr' => array('rows' => '10')])
        ->add('user')
        ->add('application', EntityType::class, [
            'class' => 'AidotechAppBundle:Application',
            'placeholder' => '',
            'required'    => false,
            'choice_label' => function ($application) {
                return $application->getNom() . ' ' 
                    . $application->getVersion() . ' ('
                    . $application->getEditeur() . ')';
            }
        ])
        ->add('systemeExploitation', EntityType::class, [
            'class' => 'AidotechAppBundle:SystemeExploitation',
            'placeholder' => '',
            'required'    => false,
            'choice_label' => function ($systemeExploitation) {
                return $systemeExploitation->getNom() . ' ' 
                    . $systemeExploitation->getVersion() . ' (' 
                    . $systemeExploitation->getEditeur() . ')';
            }
        ])
        ->add('modele', EntityType::class, [
            'class' => 'AidotechAppBundle:Modele',
            'placeholder' => '',
            'required'    => false,
            'choice_label' => function ($modele) {
                return $modele->getType() . ' ' 
                    . $modele->getNom() . ' (' 
                    . $modele->getMarque() . ')';
            }
        ])
        ->add('reseau', EntityType::class, [
            'class' => 'AidotechAppBundle:Reseau',
            'placeholder' => '',
            'required'    => false,
            'choice_label' => function ($reseau) {
                return $reseau->getNom() . ' (' 
                    . $reseau->getType() . ')';
            }
        ])
        ->add('solution', TextareaType::class, ['attr' => array('rows' => '10')])
        ->add('enregistrer', SubmitType::class);
  }

  /**
   * {@inheritdoc}
   */
  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults(array(
        'data_class' => 'Aidotech\AppBundle\Entity\Panne'
    ));
  }

  /**
   * {@inheritdoc}
   */
  public function getBlockPrefix() {
    return 'aidotech_appbundle_panne';
  }

}
