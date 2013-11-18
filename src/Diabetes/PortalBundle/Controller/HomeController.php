<?php

namespace Diabetes\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('PortalBundle:Home:home.html.twig');
    }
}