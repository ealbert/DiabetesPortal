<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 26/11/13
 * Time: 16:38
 * To change this template use File | Settings | File Templates.
 */

namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientRegisterController extends Controller
{

    public function indexAction($id)
    {
        return $this->render('PortalBundle:Patient/Register:index.html.twig', array ('id' => $id));
    }

    public function saveAction($id)
    {
        return $this->render('PortalBundle:Patient/Dashboard:index.html.twig', array ('id' => $id));
    }
}