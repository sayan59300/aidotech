<?php

namespace Aidotech\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('AidotechCoreBundle:Default:index.html.twig');
  }

  public function contactAction(Request $request) {
    $form = $this->createFormBuilder();
    $form->add('nom', TextType::class, ['label' => 'Votre nom'])
        ->add('prenom', TextType::class, ['label' => 'Votre prénom'])
        ->add('email', EmailType::class, ['label' => 'Votre email'])
        ->add('objet', TextType::class, ['label' => 'Objet du message'])
        ->add('message', TextareaType::class);
    $finalForm = $form->getForm();

    return $this->render('AidotechCoreBundle:Default:contact.html.twig', array(
        'contactForm' => $finalForm->createView()
    ));
  }

  public function mentionsAction() {
    return $this->render('AidotechCoreBundle:Default:mentions-legales.html.twig');
  }

}
