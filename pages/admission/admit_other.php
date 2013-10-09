<?php
session_start();
$page_title = "Review";
$header_stylesheet = '<link href="../../css/review.css" rel="stylesheet" />';
$header_scripts = '';
$today = date("Y-m-d");
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body">
    <header>
        <h2>Other Admission</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
</article>
<br/>
<article id="AdmissionDetails" class="body">
    <section>
        <form id="admissionForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset class="formOne">
                <fieldset class="withBorder">
                    <legend>Admission Details</legend>
                    <label class="wideLabel">Type of Admission:</label>
                    <select>
                        <option selected>Other</option>
                        <option>Intercurrent illness</option>
                        <option>Surgical procedure</option>
                        <option>Stabilisation/reeducation</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Date of Admission:</label><input type="date"/><br/>
                    <label class="wideLabel">Date of Discharge:</label><input type="date"/><br/>
                </fieldset>
                <br/>
                <h2>Medical Notes</h2>
                <textarea rows="6" cols="50"></textarea>
                <input type="submit" value="Save" style="float: right;" />
                <input type="button" value="Cancel" onclick="history.back()" />
            </fieldset>
        </form>
    </section>
</article>

<script type="text/javascript">
    $(document).ready(function(){
        getChart();
    });
</script>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/routineVisit.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>