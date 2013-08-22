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
    <link href="Content/login-box.css" rel="stylesheet" type="text/css"/>
    <link href="css/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <!-- JavaScript Files    -->
    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/jquery-ui.custom.min.js"></script>
    <script src="Scripts/mousetrap.min.js"></script>
    <script src="Scripts/modernizr-latest.js"></script>
    <script src="Scripts/jqueryslidemenu.js"></script>
</head>
<!--[if lt IE 9 ]>
<body id="index" class="home ieLegacy"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<body id="index" class="home"><!--<![endif]-->
<header id="banner" class="body">

    <section>
        <img src="Images/hse-logo.png" alt="HSE logo" style="float: left;"/>
        <hgroup>
            <h1>Feidhmeannacht na Seirbhíse Sláinte</h1>
            <h1>Health Service Executive</h1>
            <h1>Irish Pediatric Diabetes Portal</h1>
        </hgroup>
    </section>

</header>


<article id="login-wrapper">

    <div id="login-box">
        <H2>Login</H2>
        Access to this site is restricted to only authorised users.
        Contact help support in case of having problems login into the site.
        <div class="login-box-name" style="margin-top:20px;">User Id:</div>
        <div class="login-box-field">
            <input name="q" class="form-login" title="Username" value="" size="30" maxlength="2048"/>
        </div>
        <div class="login-box-name" style="margin-top: 10px;">Password:</div>
        <div class="login-box-field">
            <input name="q" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048"/>
        </div>
        <span class="login-box-options">
            <!--<input type="checkbox" name="1" value="1"> Remember Me -->
            <a href="#">Forgot password?</a></span>
        <br/>
        <br/>
        <a class="noHoverEffect" href="home_page.php"><img src="Images/login-btn.png"/></a>
    </div>
</article>
<script type="text/javascript">
    $(function () {
        $("input").keypress(function (e) {
            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                $('.noHoverEffect')[0].click();
                return false;
            } else {
                return true;
            }
        });
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

</script>
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
        if(!isset($_SESSION['LoginComments'])){
         echo 'showComments = true;';
         $_SESSION['LoginComments'] = true;
        }
    ?>
    $(document).ready(function () {
        if (showComments) {
            $("#dialog-message").dialog('open');
        }
    });
</script>
<div id="dialog-message" title="Design Comments">
    <h3>Demo - Overview</h3>

    <p>
        <!--<span class="ui-icon ui-icon-circle-check" style="float: left; margin: 0 7px 50px 0;"></span>-->
        The current version of the web site comprises four web pages: Login, Home Page, Patient Search and Patient
        Details pages. The purpose at this stage is to provide a sort of baseline to help in the definition of
        what functionality is required and how is prioritised. The screens provide an insight of how we intent
        the screens to work but currently they don't provide any functionality or very little.<br/>
        At this stage, the available pages are sufficient to discuss the process a user will follow to start
        the application, find a patient and enquiry some patient details. But so far, there is not functionality
        developed that will demonstrate how records are created or amended.
    </p>

    <h3>Login Functionality</h3>

    <p>
        When the user access the web site for the first time, this screen requires the user to enter user id and
        password.
        Once the user is authenticated, the user is taken to the home page. Currently the screen does not validate any
        input
        so pressing in the login button takes to the following screen.
    </p>

    <h3>Some Aspect To Discuss</h3>
    <ul>
        <li>Security scope: internal and public functionality</li>
        <li>Type of users and level of authorisation</li>
        <li>User ids: MCN, bord altranais number and external people</li>
        <li>Self Registration functionality</li>
    </ul>
    <h3>Next Step</h3>
    <p>
        Click on the login button to access to the Home Page
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 21-Aug-2013 - v 0.01
    </small>
</div>
</body>
</html>