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
    <link href="css/patientSearch.css" rel="stylesheet" />
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


<?php require('pages/newPatient/entryForm.php'); ?>

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
        In this web page the user can enter some criteria to query the database for patients.The application
        returns a list of patient records and the user can click on a link to bring up the patient's detail web page.
    </p>
    <h3>Some Aspects To Discuss</h3>
    <ul>
        <li>Fields to add to the search criteria</li>
        <li>List of fields to render from the patient record</li>
        <li>Do we limit the number of records that can be returned?</li>
        <li>Patients with multiple MRNs - consolidation strategy</li>
    </ul>
    <h3>Next Step</h3>
    <p>
        Currently the search function does not work, instead the application returns always the same patient record,
        regardless the entered criteria values. Just press the Find button and then click on the MRN field for
        the record that is returned, then the browser will open the Patient Details web page.
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 23-Aug-2013 - v 0.01
    </small>
</div>
</body>
</html>