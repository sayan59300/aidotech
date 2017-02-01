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
    $contact = new ContactForm();
    $form = $this->createForm(ContactType::class, $contact);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      if ($form->isValid()) {
        $data = $request->request->get('contact');
        $contact->setNom($data['nom']);
        $contact->setPrenom($data['prenom']);
        $contact->setEmail($data['email']);
        $contact->setObjet($data['objet']);
        $contact->setMessage($data['message']);

        $email = \Swift_Message::newInstance();
        $email->setSubject($contact->getObjet())->setFrom('contact@aidotech.fr')
            ->setTo($contact->getEmail())->setBody($this->renderView(
                'Emails/contact.html.twig', ['nom' => $contact->getNom(), 
                'prenom' => $contact->getPrenom(), 'message' => $contact->getMessage(),
                'email' => $contact->getEmail()]
            ), 'text/html'
        );
        $this->get('mailer')->send($email);
        $request->getSession()->getFlashBag()->add('notice', 'Le message a bien été envoyé');
        return $this->redirectToRoute('aidotech_core_homepage');
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
