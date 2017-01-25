<?php

namespace Aidotech\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AidotechCoreBundle:Default:index.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('AidotechCoreBundle:Default:contact.html.twig');
    }
    
    public function mentionsAction()
    {
        return $this->render('AidotechCoreBundle:Default:mentions-legales.html.twig');
    }
}
