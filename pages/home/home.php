<?php
// ToDo Move to login logic
session_start();
$_SESSION["UserDetails"] = array(
    "name" => "Joe Bloggs",
    "mcn" => "23454",
    "centre" => "Our Ladys Children's Hospital Crumlin"
);

$page_title = "Home";
$header_stylesheet = '<link href="../../css/patientSearch.css" rel="stylesheet" type="text/css"/>';
$header_scripts = '';
require_once('/../common/header.php');
?>
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
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/home.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>