<?php

namespace Aidotech\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Aidotech\CoreBundle\Form\ContactType;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('AidotechCoreBundle:Default:index.html.twig');
  }

  public function contactAction(Request $request) {
    $form = $this->createForm(ContactType::class);
    return $this->render('AidotechCoreBundle:Default:contact.html.twig', array(
        'contactForm' => $form->createView()
    ));
  }

  public function mentionsAction() {
    return $this->render('AidotechCoreBundle:Default:mentionsLegales.html.twig');
  }

}
