<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 02/01/14
 * Time: 12:15
 */

namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientAdmissionController extends Controller {

    public function admissionAction($admissionType, $patientId)
    {
        return $this->render('PortalBundle:Patient/Admission:'.$admissionType.'.html.twig', array ('id' => $patientId));
    }
} 