<?php
session_start();
$page_title = "Review";
$header_stylesheet = '<link href="../../css/review.css" rel="stylesheet" />';
$header_stylesheet .= '<link href="../../css/jquery.handsontable.full.css" rel="stylesheet" />';
$header_scripts = '<script src="../../scripts/jquery.handsontable.full.js"></script>';
$today = date("Y-m-d");
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body">
    <header>
        <img src="../../Images/injection_logo_36.png" alt="Injection Logo" style="float: right;"/>
        <h2>Routine Visit (Injections)</h2>
        <div style="clear: both;"/>
    </header>
    <?php require('/../common/patientBoard.php');?>
    <?php require('encounter_common.php');?>
</article>
<br/>
<article id="ReviewDetails" class="body">
    <section>
        <form id="reviewForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset>
                <input type="submit" value="Save" style="float: right; margin-top: 5px; margin-right: 10px; "/>
                <div id="reviewMenu"class="dynamicMenu jqueryslidemenu">
                    <ul>
                        <li><a href="#" onclick="showForm(event, 'doc_main_form')" class="currentForm">Review Notes</a></li>
                        <li><a href="#" onclick="showForm(event, 'doc_injection_form')">Injections</a></li>
                        <li><a href="#" onclick="showForm(event, 'doc_carb_ratios')">Carb. Ratios</a></li>
                        <li><a href="#" onclick="showForm(event, 'nurse_notes')">Nurse Notes</a></li>
                        <li><a href="#" onclick="showForm(event, 'dietitian_notes')">Dietitian Notes</a></li>
                        <li><a href="#" onclick="showForm(event, 'doc_review_comments')">Comments</a></li>
                    </ul>
                    <br style="clear: left" />
                </div>
            </fieldset>
            <fieldset id="doc_main_form"  class="reviewSubForm">
                <?php require('doc_main_form.php');?>
            </fieldset>
            <fieldset id="doc_injection_form" style="display: none;"  class="reviewSubForm">
                <?php require('doc_injection_form.php');?>
            </fieldset>
            <fieldset id="doc_carb_ratios" style="display: none;"  class="reviewSubForm">
                <?php require('doc_carb_ratios.php');?>
            </fieldset>
            <fieldset id="nurse_notes" style="display: none;"  class="reviewSubForm">
                <?php require('nurse_notes.php');?>
            </fieldset>
            <fieldset id="dietitian_notes" style="display: none;"  class="reviewSubForm">
                <?php require('dietitian_notes.php');?>
            </fieldset>
            <fieldset id="doc_review_comments" style="display: none;"  class="reviewSubForm">
                <?php require('doc_review_comments.php');?>
            </fieldset>
        </form>
    </section>
</article>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/routineVisit.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>