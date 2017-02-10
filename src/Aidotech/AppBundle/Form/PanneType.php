<?php

namespace Aidotech\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            'choice_label' => function ($application) {
                return $application->getEditeur() . ' ' .
                    $application->getNom() . ' ' . $application->getVersion();
            }
        ])
        ->add('systemeExploitation', EntityType::class, [
            'class' => 'AidotechAppBundle:SystemeExploitation', 
            'choice_label' => function ($systemeExploitation) {
                return $systemeExploitation->getEditeur() . ' ' .
                    $systemeExploitation->getNom() . ' ' . $systemeExploitation->getVersion();
            }
        ])
        ->add('modele', ChoiceType::class)
        ->add('reseau', ChoiceType::class)
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
