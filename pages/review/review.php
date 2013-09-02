<?php
session_start();
$page_title = "Review";
$header_stylesheet = '<link href="../../css/main.css" rel="stylesheet" type="text/css"/>';
$header_stylesheet .= '<link href="../../css/review.css" rel="stylesheet" />';
$header_scripts = '';
$today = date("Y-m-d");
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body">
    <header>
        <h2>New Review</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
</article>
<br/>
<article id="ReviewDetails" class="body">
    <header>
        <h2>Review Details</h2>
    </header>
    <section>
        <form id="reviewForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset>
                <label class="field">Review Date:</label><input type="date" value="<?php echo $today; ?>"/> <br/>
                <label class="field">Height:</label><input type="text"/><br/>
                <label class="field">Weight:</label><input type="text"/><br/>
                <label class="field">HbA1c:</label><input type="text"/><br/>
                <label class="field">BP:</label><input type="text"/><br/>

                <label class="field">Daily Dose:</label>
                <input type="text"/>
                <label class="post-info"> = xxx units/kg/day</label>
                <br/>
                <br/>
                <fieldset class="hypo_details">
                    <legend>Hypoglycaemia</legend>
                    <label class="firstColumn">Severe Hypos in past year</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <label class="">Number:</label>
                    <input type="text"/>
                    <br/>

                    <label class="firstColumn">Convulsion</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>

                    <label class="firstColumn">Glucagon</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>

                </fieldset>
                <br/>
                <input type="submit" value="Save">
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
require_once('/../../templates/pageComments/review.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>