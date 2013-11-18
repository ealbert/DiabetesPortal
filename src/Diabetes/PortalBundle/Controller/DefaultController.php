<?php

namespace Diabetes\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PortalBundle:Default:index.html.twig', array('name' => $name));
    }
}
