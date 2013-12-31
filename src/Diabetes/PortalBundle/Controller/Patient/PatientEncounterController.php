<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/12/13
 * Time: 15:50
 */

namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientEncounterController extends Controller
{

    public function reviewAction($reviewType, $treatmentType, $patientId)
    {
        if($reviewType == 'routine' and $treatmentType == 'pump'){
            return $this->render('PortalBundle:Patient/Encounter:routineVisitPump.html.twig', array ('id' => $patientId));
        }
    }

} 