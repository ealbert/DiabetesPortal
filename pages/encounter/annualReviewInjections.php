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
        <h2>Annual Review (Injections)</h2>
        <div style="clear: both;"/>
    </header>
    <?php require('/../common/patientBoard.php');?>
    <?php require('encounter_common.php');?>
</article>
<br/>
<article id="ReviewDetails" class="body">
    <section>
        <form id="reviewForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset class="formOne">
                <input type="button" value="Next" onclick="showForm('formOne', 'formTwo')" style="float: right;" />
                <input type="button" value="Cancel" onclick="history.back()" /><br/><br/>
                <?php require('doc_main_form.php');?>
            </fieldset>
            <fieldset class="formTwo" style="display: none;">
                <input type="button" value="Next" onclick="showForm('formTwo', 'formThree')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formTwo', 'formOne')" /><br/><br/>
                <?php require('doc_injection_form.php');?>
            </fieldset>
            <fieldset class="formThree" style="display: none;">
                <input type="button" value="Next" onclick="showForm('formThree', 'formFour')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formThree', 'formTwo')" /><br/><br/>
                <?php require('doc_carb_ratios.php');?>
            </fieldset>
            <fieldset class="formFour" style="display: none;">
                <input type="button" value="Next" onclick="showForm('formFour', 'formFive')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formFour', 'formThree')" /><br/><br/>
                <?php require('nurse_notes.php');?>
            </fieldset>
            <fieldset class="formFive" style="display: none;">
                <input type="button" value="Next" onclick="showForm('formFive', 'formSix')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formFive', 'formFour')" /><br/><br/>
                <?php require('dietitian_notes.php');?>
            </fieldset>
            <fieldset class="formSix" style="display: none;">
                <input type="button" value="Next" onclick="showForm('formSix', 'formSeven')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formSix', 'formFive')" /><br/><br/>
                <?php require('doc_annual_notes.php');?>
            </fieldset>
            <fieldset class="formSeven" style="display: none;">
                <input type="button" value="Previous" onclick="showForm('formSeven', 'formSix')" /><br/><br/>
                <?php require('doc_review_comments.php');?>
                <input type="submit" value="Save" style="float: right;"/>
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