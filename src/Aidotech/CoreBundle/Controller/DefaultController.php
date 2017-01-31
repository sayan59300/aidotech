<?php

namespace Aidotech\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Aidotech\CoreBundle\Form\ContactType;
use Aidotech\CoreBundle\Entity\ContactForm;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('AidotechCoreBundle:Default:index.html.twig');
  }

  public function contactAction(Request $request) {
    $email = new ContactForm();
    $form = $this->createForm(ContactType::class, $email);
    
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      if ($form->isValid()) {
        $data = $request->request->get('contact');
        $email->setNom($data['nom']);
        $email->setPrenom($data['prenom']);
        $email->setEmail($data['email']);
        $email->setObjet($data['objet']);
        $email->setMessage($data['message']);
      }
    }
    
    return $this->render('AidotechCoreBundle:Default:contact.html.twig', array(
        'contactForm' => $form->createView()
    ));
  }

  public function mentionsAction() {
    return $this->render('AidotechCoreBundle:Default:mentionsLegales.html.twig');
  }

}
