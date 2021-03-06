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
        <h2>Register</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
</article>
<br/>
<article id="ReviewDetails" class="body">
    <section>
        <form id="reviewForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset class="formOne">
                <fieldset class="withBorder">
                    <legend>General Information</legend>
                    <label class="wideLabel">Father Occupation:</label><input type="text"/><br/>
                    <label class="wideLabel">Mother Occupation:</label><input type="text"/><br/>
                    <label class="wideLabel">Number of Brothers:</label><input type="text" value="0"/><br/>
                    <label class="wideLabel">Number of Sisters:</label><input type="text" value="0"/><br/>
                    <label class="wideLabel">Address Location Type:</label>
                    <select form="reviewForm">
                        <option value="blank">-- select address type --</option>
                        <option value="local">Local</option>
                        <option value="rural">Rural</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Date First Insulin Inj:</label><input type="date"/><br/>
                    <label class="wideLabel">Consultant Name:</label><input type="text"/><br/>
                    <label class="wideLabel">Insurance/Welfare:</label>
                    <select form="reviewForm">
                        <option value="na" selected="selected">N/A</option>
                        <option value="medical">Medical Card</option>
                        <option value="longterm">Long-term illness</option>
                        <option value="private">Private Health Insurance</option>
                    </select>
                    <br/>
                </fieldset>
                <fieldset class="withBorder">
                    <legend class="">Symptoms</legend>
                    <label class="wideLabel">Duration in weeks:</label><input type="text"/><br/>
                    <label class="wideLabel">Polyuria:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Weight Loss:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Enuresis:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Constipation:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Other:</label><input type="text"/><br/>
                </fieldset>

                <fieldset class="withBorder">
                    <legend>Birth History</legend>
                    <label class="wideLabel">Birth Order:</label><input type="text"/><br/>
                    <label class="wideLabel">Weight:</label><input type="text"/><br/>
                    <label class="wideLabel">Gestation:</label><input type="text"/><br/>
                    <label class="wideLabel">Mode of delivery:</label>
                    <select form="reviewForm">
                        <option value="normal" selected="selected">Normal</option>
                        <option value="caesarean">Caesarean</option>
                        <option value="other">Other</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Received BCG vaccination:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <br/>

                    <label class="wideLabel">Infant Feeding</label><br/>
                    <hr/>
                    <label class="wideLabel">Breast:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Duration:</label><input type="text"/><br/>
                    <label class="wideLabel">Bottle:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Duration:</label><input type="text"/><br/>
                    <label class="wideLabel">Age at 1st solids (Months):</label><input type="text"/><br/>
                </fieldset>

                <fieldset class="withBorder">
                    <legend class="">Diabetes Family History</legend>
                    <label class="wideLabel">Mother:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Type:</label>
                    <select form="reviewForm">
                        <option value="na" selected="selected">N/A</option>
                        <option value="type1">T1DM</option>
                        <option value="type2">T2DM</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Father:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Type:</label>
                    <select form="reviewForm">
                        <option value="na" selected="selected">N/A</option>
                        <option value="type1">T1DM</option>
                        <option value="type2">T2DM</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Brother:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Type:</label>
                    <select form="reviewForm">
                        <option value="na" selected="selected">N/A</option>
                        <option value="type1">T1DM</option>
                        <option value="type2">T2DM</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Sister:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Type:</label>
                    <select form="reviewForm">
                        <option value="na" selected="selected">N/A</option>
                        <option value="type1">T1DM</option>
                        <option value="type2">T2DM</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Twin:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <label class="">Type:</label>
                    <select form="reviewForm">
                        <option value="na" selected="selected">N/A</option>
                        <option value="type1">T1DM</option>
                        <option value="type2">T2DM</option>
                    </select>
                </fieldset>
                <fieldset class="withBorder">
                    <legend class="">Associated conditions in child</legend>
                    <label class="wideLabel">Addison's disease:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Thyroid disease:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Coeliac disease:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Down's disease:</label>
                    <select form="reviewForm">
                        <option value="true">Yes</option>
                        <option value="false" selected="selected">No</option>
                    </select>
                    <br/>
                    <label class="wideLabel">Other:</label><input type="text"><br/>
                </fieldset>
                <br/>

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