<?php
$page_title = "Login";
$header_stylesheet = '<link href="../../css/login-box.css" rel="stylesheet" type="text/css"/>';
$header_scripts = '';
require_once('/../common/header.php');
?>
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
        <a class="noHoverEffect" href="../home/home.php"><img src="../../images/login-btn.png"/></a>
    </div>
</article>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/login.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>