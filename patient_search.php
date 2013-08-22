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
    <link href="Content/patientSearch.css" rel="stylesheet" />
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

<?php require('PatientSearch/patientSearch.php'); ?>
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
        if(!isset($_SESSION['SearchComments'])){
         echo 'showComments = true;';
         $_SESSION['SearchComments'] = true;
        }
    ?>
    $(document).ready(function () {
        if (showComments) {
            $("#dialog-message").dialog('open');
        }
    });
</script>
<div id="dialog-message" title="Design Comments">

    <h3>Patient Search Functionality</h3>
    <p>
        The user can enter some criteria to query the database so the system can return a list patient records that contain
        a link so the user can navigate to the patient details page.
    </p>
    <h3>Some Aspect To Discuss</h3>
    <ul>
        <li>Fields to add to the search criteria</li>
        <li>List of fields to render from the patient record</li>
        <li>Do we limit the number of records that can be returned?</li>
        <li>Patients with multiple MRNs - consolidation strategy</li>
    </ul>
    <h3>Next Step</h3>
    <p>
        Currently the search function does not work, just press the Find button and then click on the MRN field for
        the record that is returned, so the browser will open the Patient Details screen.
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 21-Aug-2013 - v 0.01
    </small>
</div>
</body>
</html>