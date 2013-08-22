<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!--
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    -->
    <meta charset="utf-8"/>
    <link href="Images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>Patient Portal</title>
    <!-- Styles   -->
    <link href="Content/main.css" rel="stylesheet"/>
    <link href="Content/jqueryslidemenu.css" rel="stylesheet"/>
    <link href="css/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <!-- JavaScript Files    -->
    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/mousetrap.min.js"></script>
    <script src="Scripts/modernizr-latest.js"></script>
    <script src="Scripts/jqueryslidemenu.js"></script>
    <script src="Scripts/jquery-ui.custom.min.js"></script>
</head>
<!--[if lt IE 9 ]>
<body id="index" class="home ieLegacy"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<body id="index" class="home"><!--<![endif]-->
<header id="banner" class="body">

    <section style="float:right; text-align: right; font-size: 12px;">
        Joe Bloggs MCN: 23454 <a href="index.php">logout</a> <br/>
        Our Ladys Childresn Hospital Crumlin<br/>
        Wednesday 15th July 2013
    </section>
    <section>
        <img src="Images/hse-logo.png" alt="HSE logo" style="float: left;"/>
        <hgroup>
            <h1>Feidhmeannacht na Seirbhíse Sláinte</h1>
            <h1>Health Service Executive</h1>
            <h1>Irish Pediatric Diabetes Portal</h1>
        </hgroup>
    </section>
    <?php require('main_menu.php'); ?>
</header>

<?php require('PatientDetails/patientDetails.php'); ?>
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

    var showComments = true;
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
        This page is so far the one that we worked the most. The design is based on existing documents that Glen
        created with the collaboration of Nuala and Colin, I believe. The top section contains the most relevant patient
        details, a chart on the top-right displays the HbA1c results for
        a given time. Also, a set of main metrics are displayed so the user can easily gather most of the relevant
        information very quickly.<br>
        The page comprises another five sections: Patient Details, Initial Patient Education, Ongoing Management,
        Outpatient Appointments and Annual Review. As mentioned before, there is not functionality built yet in these
        sections. I envisage that substantial changes will take place once we get feedback.
    </p>

    <h3>Some Aspect To Discuss</h3>
    <ul>
        <li>List of main metrics</li>
        <li>Metric thresholds</li>
        <li>Section discussion</li>
    </ul>
    <h3>Next Step</h3>
    <p>
        At this stage there are not more pages to demonstrate. These comments are rendered only the first time a page is open for
        the life time of a session. If you want to see them again, please, close the browser completely. If you open the page
        again in a new browser instance, the comments should be displayed again.<br/><br/>
        <b>
            Please, give me as much feedback as possible: questions, suggestions and critics are all welcome. And don't assume
            anything, in case of doubt, please ask.
        </b>
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 21-Aug-2013 - v 0.01
    </small>
</div>

</body>
</html>