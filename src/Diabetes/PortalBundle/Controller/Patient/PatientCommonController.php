<?php
namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PatientCommonController extends Controller
{
    public function getChartAction($id)
    {
//        session_start();
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pData.class.php');
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pData.class.php');
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pDraw.class.php');
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pImage.class.php');

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

        $myPicture = new \pChart_pImage(400,140,$myData);
        $myPicture->setGraphArea(50,10,390,110);
        //$myPicture->setFontProperties(array("FontName"=>"../../pChart/fonts/trebuc.ttf","FontSize"=>8));
        $myPicture->drawScale();

        $Config = array("BreakVoid"=>FALSE);
        $myPicture->drawSplineChart($Config);
        $myPicture->drawText(340, 10, "V0.".$_SESSION['counter']);

        if(isset($_REQUEST["getImage"])){
            return $myPicture->stroke();
        }

        return $myPicture->strokeToBase64();

//        return $this->render('PortalBundle:Patient/Search:index.html.twig');
    }
}