<?php
session_start();
$page_title = "Review";
$header_stylesheet = '<link href="../../css/main.css" rel="stylesheet" type="text/css"/>';
$header_stylesheet .= '<link href="../../css/review.css" rel="stylesheet" />';
$header_stylesheet .= '<link href="../../css/jquery.handsontable.full.css" rel="stylesheet" />';
$header_scripts = '<script src="../../scripts/jquery.handsontable.full.js"></script>';
$today = date("Y-m-d");
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body">
    <header>
        <h2>New Routine Visit</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
</article>
<br/>
<article id="ReviewDetails" class="body">
    <section>
        <form id="reviewForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset class="formOne">
                <label class="field">Review Date:</label><input type="date" value="<?php echo $today; ?>"/> <br/>
                <table>
                    <tr>
                        <td width="50%">
                            <label class="field">Height:</label><input type="text"/><br/>
                            <label class="field">Weight:</label><input type="text"/><br/>
                            <label class="field">HbA1c:</label><input type="text"/><br/>
                            <label class="field">BP:</label><input type="text"/><br/>

                            <label class="field">Daily Dose:</label>
                            <input type="text"/>
                            <label class="post-info"> = xxx units/kg/day</label>
                            <br/>
                            <label class="field">Glucagon:</label><input type="text" value="0"/><br/>
                        </td>
                        <td width="50%">
                            <label class="field widerColumn">CHO Aware:</label>
                            <select>
                                <option value="true">Yes</option>
                                <option value="false" selected>No</option>
                            </select>
                            <br/>
                            <label class="field widerColumn">CHO Counting:</label>
                            <select>
                                <option value="true">Yes</option>
                                <option value="false" selected>No</option>
                            </select>
                            <br/>
                            <label class="field widerColumn">Hypo. Aware:</label>
                            <select>
                                <option value="true">Yes</option>
                                <option value="false" selected>No</option>
                            </select>
                            <br/>
                            <label class="field widerColumn">ISF:</label>
                            <input type="text"/>
                            <label class="post-info"> mmol/L</label>
                            <br/>
                        </td>
                    </tr>
                </table>

                <fieldset class="withBorder">
                    <legend>Severe Hypoglycaemia Events In The Past Year</legend>
                    <label class="firstColumn">Seizure</label>
                    <input type="text" style="float: left;" value="0"/>
                    <label class="firstColumn">&nbsp;&nbsp;Coma</label>
                    <input type="text" value="0"/>
                    <br/>
                </fieldset>
                <br/>
                <input type="button" value="Next" onclick="showForm('formOne', 'formTwo')" style="float: right;" />
                <input type="button" value="Cancel" onclick="history.back()" />
            </fieldset>
            <fieldset class="formTwo" style="display: none;">
                <a href="routineVisitPdf.php" target="_blank">Print Form</a>
                <h2>Pump - Basal Rates</h2>
                <div id="example" class="handsontable"></div>
                <br/>
                <input type="button" value="Next" onclick="showForm('formOne', 'formTwo')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formTwo', 'formOne')" />
                <input type="submit" value="Save"/>
            </fieldset>
        </form>
    </section>
</article>

<script type="text/javascript">
    $(document).ready(function(){
        getChart();
        var data = [
            [0, 0, 0],
        ];

        $('#example').handsontable({
            data: data,
            minSpareRows: 1,
            maxRows: 10,
            colHeaders: ["Time", "Old", "New"],
            contextMenu: false,
            colWidths: 100,
            columns: [
                {type: 'text'},
                {type: 'numeric'},
                {type: 'numeric'}
            ]
        });
    });
    function showForm(formToClose, formToShow){
        $("." + formToClose).hide();
        $("." + formToShow).show();
    }

</script>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/routineVisit.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>