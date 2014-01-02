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
        if($reviewType == 'routine' and $treatmentType == 'injections'){
            return $this->render('PortalBundle:Patient/Encounter:routineVisitInjections.html.twig', array ('id' => $patientId));
        }
        if($reviewType == 'annual' and $treatmentType == 'pump'){
            return $this->render('PortalBundle:Patient/Encounter:annualReviewPump.html.twig', array ('id' => $patientId));
        }
        if($reviewType == 'annual' and $treatmentType == 'injections'){
            return $this->render('PortalBundle:Patient/Encounter:annualReviewInjections.html.twig', array ('id' => $patientId));
        }
    }

    public function telephoneCallAction($callType, $treatmentType, $patientId)
    {
        if($treatmentType == 'pump'){
            return $this->render('PortalBundle:Patient/Encounter:telephoneCallPump.html.twig', array ('id' => $patientId, 'callType' => $callType));
        }
        return $this->render('PortalBundle:Patient/Encounter:telephoneCallInjections.html.twig', array ('id' => $patientId, 'callType' => $callType));
    }

} 