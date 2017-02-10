<?php

namespace Aidotech\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType {

  /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder->add('telephone', TextType::class, ['label' => 'Numéro de téléphone'])
        ->add('nom', TextType::class, ['label' => 'Nom'])
        ->add('prenom', TextType::class, ['label' => 'Prénom']);
  }

  public function getParent() {
    return 'FOS\UserBundle\Form\Type\RegistrationFormType';
  }

}
