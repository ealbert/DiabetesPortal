<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!--
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    -->
    <meta charset="utf-8"/>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>Patient Portal</title>
    <!-- Styles   -->
    <link href="css/main.css" rel="stylesheet"/>
    <link href="css/jqueryslidemenu.css" rel="stylesheet"/>
    <link href="css/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <!-- JavaScript Files    -->
    <script src="scripts/jquery-1.10.2.min.js"></script>
    <script src="scripts/mousetrap.min.js"></script>
    <script src="scripts/modernizr-latest.js"></script>
    <script src="scripts/jqueryslidemenu.js"></script>
    <script src="scripts/jquery-ui.custom.min.js"></script>
</head>
<!--[if lt IE 9 ]>
<body id="index" class="home ieLegacy"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<body id="index" class="home"><!--<![endif]-->
<header id="banner" class="body">

    <section style="float:right; text-align: right; font-size: 12px;">
        Joe Bloggs MCN: 23454 <a href="index.php">logout</a> <br/>
        Our Ladys Children's Hospital Crumlin<br/>
        Wednesday 15th July 2013
    </section>
    <section>
        <img src="images/hse-logo.png" alt="HSE logo" style="float: left;"/>
        <hgroup>
            <h1>Feidhmeannacht na Seirbhíse Sláinte</h1>
            <h1>Health Service Executive</h1>
            <h1>Irish Pediatric Diabetes Portal</h1>
        </hgroup>
    </section>
    <?php require('main_menu.php'); ?>
</header>

<?php require('pages/patientDetails/patientDetails.php'); ?>
<script type="text/javascript">
    $(function () {
        $("#dialog-message").dialog({
            modal: true,
            width: 1024,
            show: 2000,
            hide: 2000,
            autoOpen: false,
            buttons: {
                Ok: function () {
                    $(this).dialog("close");
                }
            }
        });
    });

    var showComments = false;
    <?php
        session_start();
        if(!isset($_SESSION['DetailsComments'])){
         echo 'showComments = true;';
         $_SESSION['DetailsComments'] = true;
        }
    ?>
    $(document).ready(function () {
        if (showComments) {
            $("#dialog-message").dialog('open');
        }
    });
</script>
<div id="dialog-message" title="Design Comments">

    <h3>Patient Details Functionality</h3>
    <p>
        This page is so far the one that we have worked the most. The design is based on existing documents that Glen
        created with the collaboration of Nuala and Colin, I believe. The top section contains the most relevant patient
        details, a chart on the top-right displays the HbA1c results for
        a given time. A set of main metrics are displayed so the clinician can easily find the most relevant
        information quickly.<br>
        The page comprises another five sections: Patient Details, Initial Patient Education, Ongoing Management,
        Outpatient Appointments and Annual Review. As mentioned before, there is not functionality built yet in these
        sections, the page displays example of the envisaged elements of this sections but there are not functions for
        amending or adding new records.
    </p>

    <h3>Some Aspects To Discuss</h3>
    <ul>
        <li>Discuss what set of main metrics to be shown in the dashboard</li>
        <li>Metric thresholds, some examples to discuss:</li>
            <ul>
                <li>HbA1c > 9%  (or a threshold to be decided)</li>
                <li>Previous DNA (did not attend clinic)</li>
                <li>Raised BMI  (threshold to be decided)</li>
                <li>Hypoglycaemia unawareness (where the patient doesn’t feel symptoms when they are low – which is really dangerous)</li>
                <li>Severe hypoglycaemia in last year</li>
            </ul>
        <li>Section design/functionality discussion</li>
        <li>Discuss which and how to record patient interactions: current problems, phone calls, appointments</li>
        <li>HbA1c metric units: mmol/mol or % -- or both</li>
        <li>Patient details scope, how much data is required. For example:</li>
            <ul>
                <li>Guardian details</li>
                <li>Social & Developmental (eg split family, parent deceased, needs interpreter, home schooling) -- is it fine to just have a comment section?</li>
            </ul>
    </ul>

    <h3>Next Step</h3>
    <p>
        There are not more pages to demonstrate in this release.<br/><br/>
        <b>
            Please, give me as much feedback as possible: questions, suggestions and critics are all welcome. And don't assume
            anything, in case of doubt, please ask, thanks.
        </b>
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 23-Aug-2013 - v 0.01
    </small>
</div>

</body>
</html>