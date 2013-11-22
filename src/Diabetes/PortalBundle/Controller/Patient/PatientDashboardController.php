<?php

namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientDashboardController extends Controller
{
    public function indexAction($id)
    {
        $logger = $this->get('logger');
        $logger->info('Log a line');

        return $this->render('PortalBundle:Patient/Dashboard:index.html.twig', array ('id' => $id));
    }
}
