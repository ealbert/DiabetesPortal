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
        Our Ladys Children's Hospital Crumlin<br/>
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

<article class="body">
    <h2>Home Page</h2>
    <section style="width: 50%; margin-right: auto; margin-left: auto; margin-top: 20%;">
        <hgroup>
            <h3>Page in progress</h3>
        </hgroup>
        <fieldset>
        <p>
            This page could contain a dashboard/summary panel for the user.
        </p>
        <p>
            The page should also include a comprehensive section in regards disclaimers, rules,
            policies and so on.
        </p>
        </fieldset>
    </section>
</article>
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
        if(!isset($_SESSION['HomePageComments'])){
         echo 'showComments = true;';
         $_SESSION['HomePageComments'] = true;
        }
    ?>
    $(document).ready(function () {
        if (showComments) {
            $("#dialog-message").dialog('open');
        }
    });
</script>
<div id="dialog-message" title="Design Comments">

    <h3>Home Page Functionality</h3>
    <p>
        Once the user is authenticated, the user is taken to the Home Page.<br/>
        All pages, for the moment, have a similar design/aspect, on the top section, some
        header generic information that displays the user name and other basic details is rendered. Also
        a link is available so the user can logout if needed, the link takes the user back to the login web page.
        Then a menu bar contains some of the main functions:  Search Patient, Add New Patient and so on, we need to discuss
        what menus need to be added in this section. Currently only the Patient>Search menu works.
    </p>

    <h3>Some Aspects To Discuss</h3>
    <ul>
        <li>Define content for this page</li>
        <li>List of main menus/actions</li>
    </ul>
    <h3>Next Step</h3>
    <p>
        Select the Search option under the Patient menu.
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 23-Aug-2013 - v 0.01
    </small>
</div>
</body>
</html>