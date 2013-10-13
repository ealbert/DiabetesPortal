<!doctype html>
<html lang="en" class="no-js">
<head>
    <!--
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    -->
    <meta charset="utf-8"/>
    <link href="../../images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <?php echo "<title>Diabetes Portal - $page_title</title>" ?>
    <!-- Styles   -->
    <link href="../../css/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="../../css/jqueryslidemenu.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/main.css" rel="stylesheet" type="text/css"/>
    <?php echo $header_stylesheet ?> <!-- Place holder for additional page stylesheets -->
    <!-- JavaScript Files    -->
    <script src="../../scripts/jquery-1.10.2.min.js"></script>
    <script src="../../scripts/jquery-ui.custom.min.js"></script>
    <script src="../../scripts/mousetrap.min.js"></script>
    <script src="../../scripts/modernizr-latest.js"></script>

    <script>
        var arrowimages={down:['downarrowclass', '../../images/down.gif', 23], right:['rightarrowclass', '../../images/right.gif']};
    </script>
    <script src="../../scripts/jqueryslidemenu.js"></script>
    <?php echo $header_scripts ?><!--  Place holder for additional page javascripts-->
</head>
<!--[if lt IE 9 ]>
<body id="index" class="home ieLegacy"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<body id="index" class="home">
<!--<![endif]-->
<header id="banner" class="body">

    <?php
    if(isset($_SESSION["UserDetails"])){
        $details = $_SESSION["UserDetails"];
        $system_date = date("l, d/M/Y");
        $userSection = <<<USER
    <section style="float:right; text-align: right; font-size: 12px;">
        {$details['name']} MCN: {$details['mcn']} <a href="../login/login.php">logout</a> <br/>
        {$details['centre']}<br/>
        $system_date
    </section>
USER;
        echo $userSection;
    }
    ?>

    <section>
        <img src="../../images/hse-logo.png" alt="HSE logo" style="float: left;"/>
        <hgroup>
            <h1>Feidhmeannacht na Seirbhíse Sláinte</h1>
            <h1>Health Service Executive</h1>
            <h1>Irish Pediatric Diabetes Portal</h1>
        </hgroup>
    </section>
    <?php
    if(isset($_SESSION["UserDetails"])){
        require_once('menu.php');
    }
    ?>

</header>