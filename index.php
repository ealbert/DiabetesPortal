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
    <link href="css/login-box.css" rel="stylesheet" type="text/css"/>
    <link href="css/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <!-- JavaScript Files    -->
    <script src="scripts/jquery-1.10.2.min.js"></script>
    <script src="scripts/jquery-ui.custom.min.js"></script>
    <script src="scripts/mousetrap.min.js"></script>
    <script src="scripts/modernizr-latest.js"></script>
    <script src="scripts/jqueryslidemenu.js"></script>
</head>
<!--[if lt IE 9 ]>
<body id="index" class="home ieLegacy"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<body id="index" class="home"><!--<![endif]-->
<header id="banner" class="body">

    <section>
        <img src="images/hse-logo.png" alt="HSE logo" style="float: left;"/>
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
        <a class="noHoverEffect" href="home_page.php"><img src="images/login-btn.png"/></a>
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

    var showComments = false;
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
    <h3>New Functionality in version 0.02</h3>
    <p>
        <ul>
            <li>New Patient Page</li>
            <li>Patient Details Page</li>
            <ul>
                <li>Last Contact detail was added on the top panel</li>
            </ul>
        </ul>
    </p>
    <small style="font-size: .8em; float: right">
        Comments updated on 29-Aug-2013 - v 0.02
    </small>
</div>
</body>
</html>
