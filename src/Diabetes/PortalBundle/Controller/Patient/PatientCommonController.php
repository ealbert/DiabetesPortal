<?php
namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class PatientCommonController extends Controller
{
    public function getReviewPdfAction($patientId){

        $response = new Response();
        $pdf = new \fPdf_fPdf();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(15,10,'Routine Visit');
        $pdf->Ln();

        $pdf->SetFont('Arial','',10);

        $pdf->Cell(15,6,'MRN');
        $pdf->Cell(60,6,'56452354', "B", 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(20,6,'Date');
        $pdf->Cell(30,6,date("d/M/Y"), "B", 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(25,6,'Age');
        $pdf->Cell(30,6,'10 years', "B", 1);

        $pdf->Cell(15,6,'DOD');
        $pdf->Cell(60,6,'23-Apr-2013', "B", 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(20,6,'Height');
        $pdf->Cell(15,6,"134 cm", "B", 0);
        $pdf->Cell(15,6,"(     %)  ", 0, 0,"R");
        $pdf->Cell(5,6,'');
        $pdf->Cell(25,6,'Weight');
        $pdf->Cell(15,6,"35 Kg", 'B', 0);
        $pdf->Cell(15,6,"(     %)  ", 0, 1,"R");


        $pdf->Cell(15,6,'Name');
        $pdf->Cell(60,6,'Joe Bloggs', 'B', 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(20,6,'BP');
        $pdf->Cell(30,6,"blood presure", "B", 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(25,6,'Diabetes');
        $pdf->Cell(30,6,'T1DM', 'B', 1);

        $pdf->Cell(15,6,'Address');
        $pdf->Cell(60,6,'33 Red Avenue', 'B', 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(20,6,'HbA1c');
        $pdf->Cell(30,6,'7.8', 'B', 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(25,6,'Prev HbA1c');
        $pdf->Cell(30,6,'7.5', 'B', 1);

        $pdf->Cell(15,6,'');
        $pdf->Cell(60,6,'Model Farm Road', "B", 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(20,6,'');
        $pdf->Cell(10,6,'');
        $pdf->Cell(45,6,'Date of Diagnosis');
        $pdf->Cell(5,6,'');
        $pdf->Cell(30,6,'01/Nov/2011','B', 1);

        $pdf->Cell(15,6,'');
        $pdf->Cell(60,6,'Cork',"B", 0);
        $pdf->Cell(5,6,'');
        $pdf->Cell(20,6,'');
        $pdf->Cell(10,6,'');
        $pdf->Cell(45,6,'Date of Starting Pump');
        $pdf->Cell(5,6,'');
        $pdf->Cell(30,6,'01/Dec/2012','B', 1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,6,'Total daily dose: 12 units = xxx units/kg/day',1, 1, 'C');

        $pdf->SetFont('Arial','B',12);
        $pdf->Ln();
        $pdf->Cell(60,6,'Pump - Basal Rates', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60,6,'Blood Glucose Targets', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60,6,'Carb Ratio', 0, 0, 'C');
        $pdf->Ln();
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20, 6, 'Time', 1, 0, 'C');
        $pdf->Cell(20, 6, 'Old', 1, 0, 'C');
        $pdf->Cell(20, 6, 'New', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Old', 1, 0, 'C');
        $pdf->Cell(20, 6, 'New', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Old', 1, 0, 'C');
        $pdf->Cell(20, 6, 'New', 1, 0, 'C');
        $pdf->Ln();

        $pdf->SetFont('Arial','',10);
        $pdf->Cell(20, 6, '07:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '4.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '4.5', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Day', 1, 0, 'C');
        $pdf->Cell(20, 6, '4.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.0', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Breakfast', 1, 0, 'C');
        $pdf->Cell(20, 6, '5', 1, 0, 'C');
        $pdf->Cell(20, 6, '5', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '10:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.0', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Night', 1, 0, 'C');
        $pdf->Cell(20, 6, '4.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.0', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Lunch', 1, 0, 'C');
        $pdf->Cell(20, 6, '10', 1, 0, 'C');
        $pdf->Cell(20, 6, '15', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '12:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '6.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '6.5', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Dinner', 1, 0, 'C');
        $pdf->Cell(20, 6, '10', 1, 0, 'C');
        $pdf->Cell(20, 6, '15', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '14:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.5', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,6,'Active Insulin', 0, 0, 'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(20, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Bedtime', 1, 0, 'C');
        $pdf->Cell(20, 6, '20', 1, 0, 'C');
        $pdf->Cell(20, 6, '25', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, 'Old', 1, 0, 'C');
        $pdf->Cell(20, 6, 'New', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 0, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '4', 1, 0, 'C');
        $pdf->Cell(20, 6, '5', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(60,6,'Insulin Sensitivity Factor', 0, 0, 'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20, 6, 'Time', 1, 0, 'C');
        $pdf->Cell(20, 6, 'Old', 1, 0, 'C');
        $pdf->Cell(20, 6, 'New', 1, 0, 'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '8:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.5', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.0', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '12:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '4.0', 1, 0, 'C');
        $pdf->Cell(20, 6, '4.0', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '17:00', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.0', 1, 0, 'C');
        $pdf->Cell(20, 6, '5.5', 1, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(60, 6, '', 0, 0, 'C');
        $pdf->Cell(5, 6, '', 0, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Cell(20, 6, '', 1, 0, 'C');
        $pdf->Ln();
        $webPath = $this->get('kernel')->getRootDir() . '/../web';
        $pdf->Image($webPath."/images/hse-logo-print.gif", 168, 4, -150);

        $response->setContent($pdf->Output());
    }
    public function getChartAction($id)
    {
        $response = new Response();
        if(isset($_SESSION['counter'])){
            $_SESSION['counter'] = $_SESSION['counter'] + 1;
        }
        else{
            $_SESSION['counter'] = 1;
        }

        $myData = new \pChart_pData();
        /* Mock data */
        $myData->addPoints(array(8.1, 7.7, 7.6, 7.3, 7.5, 7.8), "hba1c");
        $myData->addPoints(array(7.7, VOID, VOID, VOID, VOID, 7.7), "avg");
        $myData->addPoints(array("Jan 12","Jun 12","Nov 12","Jan 13","May 13","Jun 13"),"Labels");

        $myData->setSerieDescription("Labels","Months");
        $myData->setAbscissa("Labels");
        $myData->setSerieWeight("hba1c", 3);
        $myData->setSerieWeight("avg", 1);
        $myData->setAxisName(0,"HbA1c %");

        $myPicture = new  \pChart_pImage(400,140,$myData);
        $myPicture->setGraphArea(50,10,390,110);
        $webPath = $this->get('kernel')->getRootDir() . '/../web';
        $fontPath = $webPath."/fonts/trebuc.ttf";

        $myPicture->setFontProperties(array("FontName"=>$fontPath,"FontSize"=>8));
        $myPicture->drawScale();

        $Config = array("BreakVoid"=>FALSE);
        $myPicture->drawSplineChart($Config);
        $myPicture->drawText(340, 10, "V0.".$_SESSION['counter']);

        if(isset($_REQUEST["getImage"])){
            $response->setContent($myPicture->stroke());
        }
        else{
            ob_start();
            imagepng($myPicture->Picture);
            $contents =  ob_get_contents();
            ob_end_clean();
            $response->setContent(base64_encode($contents));
        }

        return $response;

//        return $this->render('PortalBundle:Patient/Search:index.html.twig');
    }
}