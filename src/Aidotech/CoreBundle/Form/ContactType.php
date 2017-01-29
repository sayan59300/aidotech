<?php

namespace Aidotech\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType {
  
  /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('nom', TextType::class, ['label' => 'Votre nom'])
        ->add('prenom', TextType::class, ['label' => 'Votre prénom'])
        ->add('email', EmailType::class, ['label' => 'Votre email'])
        ->add('objet', TextType::class, ['label' => 'Objet du message'])
        ->add('message', TextareaType::class);
  }
  
}