<?php

namespace Komay\PrtgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Komay\PrtgBundle\Entity\Message;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $m = new Message();
        $m->setIsArchived(false);
        $m->setText(" Un petit message");
        $m2 = $m;
        $m2->setText(" encore Un petit message");
        $serializer = $this->container->get('jms_serializer');
        return $this->render('KomayPrtgBundle:Default:index.html.twig',
            array(
                'messageSerialise' => $serializer->serialize($m2,'json'),
                'messageNonSerialise'=> $m
            ));
    }
}
