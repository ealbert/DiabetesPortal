<?php

namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientSearchController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortalBundle:Patient/Search:index.html.twig');
    }
}
