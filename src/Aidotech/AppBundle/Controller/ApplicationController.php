<?php

namespace Aidotech\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Aidotech\AppBundle\Entity\Panne;
use Aidotech\AppBundle\Form\PanneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller {

  public function addAction(Request $request) {
    $panne = new Panne();
    $form = $this->get('form.factory')->create(PanneType::class, $panne);
    
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $request->getSession()->getFlashBag()->add('notice', 'Nouvelle panne enregistrée');
      return $this->redirectToRoute('aidotech_app_homepage');
    }
    
    return $this->render('AidotechAppBundle:Application:add.html.twig', [
            'form' => $form->createView()
    ]);
  }

}
