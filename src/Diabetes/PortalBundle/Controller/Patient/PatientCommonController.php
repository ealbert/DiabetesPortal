<?php
namespace Diabetes\PortalBundle\Controller\Patient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Xlab\pChartBundle\pData;
use Xlab\pChartBundle\pDraw;
use Xlab\pChartBundle\pImage;

class PatientCommonController extends Controller
{
    public function getChartAction($id)
    {
//        session_start();
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pData.class.php');
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pData.class.php');
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pDraw.class.php');
//        require_once($this->get('kernel')->getRootDir() . '/../vendor/pChart/class/pImage.class.php');

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