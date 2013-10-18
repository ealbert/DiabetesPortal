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
        <img src="../../Images/pump_logo_36.png" alt="Pump Logo" style="float: right;"/>
        <h2>Telephone Encounter (Pump) - Call <?php echo $_GET[callType] ?></h2>
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
                <div id="reviewMenu"class="jqueryslidemenu">
                    <ul>
                        <li><a href="#" onclick="showForm(event, 'doc_pump_doses')" class="currentForm">Pump Doses</a></li>
                        <li><a href="#" onclick="showForm(event, 'doc_pump_metrics')">Pump</a></li>
                        <li><a href="#" onclick="showForm(event, 'doc_carb_ratios')">Carb. Ratios</a></li>
                        <li><a href="#" onclick="showForm(event, 'doc_review_comments')">Comments</a></li>
                    </ul>
                    <br style="clear: left" />
                </div>
            </fieldset>
            <fieldset id="doc_pump_doses" class="reviewSubForm">
                <?php require('doc_pump_doses.php');?>
            </fieldset>
            <fieldset id="doc_pump_metrics" style="display: none;" class="reviewSubForm">
                <?php require('doc_pump_metrics.php');?>
            </fieldset>
            <fieldset id="doc_carb_ratios" style="display: none;" class="reviewSubForm">
                <?php require('doc_carb_ratios.php');?>
            </fieldset>
            <fieldset id="doc_review_comments" style="display: none;" class="reviewSubForm">
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