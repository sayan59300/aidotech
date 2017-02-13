<?php

namespace Aidotech\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AidotechAppBundle:Default:index.html.twig');
    }
}
