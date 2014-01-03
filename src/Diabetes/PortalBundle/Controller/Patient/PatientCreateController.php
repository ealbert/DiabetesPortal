<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 03/01/14
 * Time: 10:56
 */

namespace Diabetes\PortalBundle\Controller\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientCreateController extends Controller {

    public function createNewPatientAction()
    {
        return $this->render('PortalBundle:Patient/Create:patientCreate.html.twig');
    }

} 