<?php

namespace Komay\PrtgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KomayPrtgBundle:Default:index.html.twig');
    }
}
