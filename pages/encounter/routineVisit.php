<?php
session_start();
$page_title = "Review";
$header_stylesheet = '<link href="../../css/main.css" rel="stylesheet" type="text/css"/>';
$header_stylesheet .= '<link href="../../css/review.css" rel="stylesheet" />';
$header_stylesheet .= '<link href="../../css/jquery.handsontable.full.css" rel="stylesheet" />';
$header_scripts = '<script src="../../scripts/jquery.handsontable.full.js"></script>';
$header_scripts .= '<script src="../../jquery.maskedinput.js" type="text/javascript"></script>';
$today = date("Y-m-d");
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body" xmlns="http://www.w3.org/1999/html">
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
                <label class="field">Review Date:</label><input type="date" value="<?php echo $today; ?>"/>
                <br/><br/>
                <fieldset class="withBorder">
                    <div style="display: inline-table; width: 50%">
                        <label class="field">Height:</label><input type="text"/><br/>
                        <label class="field">Weight:</label><input type="text"/><br/>
                        <label class="field">HbA1c:</label><input type="text"/><br/>
                        <label class="field">BP:</label><input type="text"/><br/>

                        <label class="field">Daily Dose:</label>
                        <input type="text"/>
                        <label class="post-info"> = xxx units/kg/day</label>
                        <br/>
                        <label class="field">Glucagon:</label><input type="text" value="0"/>
                    </div>
                    <div style="display: inline-table;">
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
                    </div>
                </fieldset>
                <br/>
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
                <div>
                    <div style="display: inline-table; width: 40%;">
                        <h2>Pump - Basal Rates</h2>
                        <div id="basalRates" class="handsontable"></div>
                        <br/>
                    </div>
                    <div style="display: inline-table; width: 30%;">
                        <h2>Blood Glucose Targets</h2>
                        <div id="bgTargets" class="handsontable"></div>
                    </div>
                    <div style="display: inline-table">
                        <h2>Active Insulin</h2>
                        <div id="activeIns" class="handsontable"></div>
                    </div>
                </div>
                <input type="button" value="Next" onclick="showForm('formTwo', 'formThree')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formTwo', 'formOne')" />
            </fieldset>
            <fieldset class="formThree" style="display: none;">
                <a href="routineVisitPdf.php" target="_blank" style="float: right;" >Print Form</a>
                <h2>Comments</h2>
                <textarea rows="10" cols="100"></textarea>
                <input type="submit" value="Save" style="float: right;"/>
                <input type="button" value="Previous" onclick="showForm('formThree', 'formTwo')" />

            </fieldset>
        </form>
    </section>
</article>

<script type="text/javascript">
    $(document).ready(function(){
        getChart();
        var basalRates = [
            [0, 0, 0],
        ];

        var bgTargets = [
            [0, 0],
            [0, 0]
        ];

        var activeIns = [
            [0, 0]
        ];

        $('#basalRates').handsontable({
            data: basalRates,
            minSpareRows: 1,
            maxRows: 10,
            colHeaders: ["Time", "Old", "New"],
            contextMenu: false,
            colWidths: 100,
            columns: [
                {type: 'text'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'}
            ]
        }, function(){
            $("#basalRates#current").mask("99:99");
        });

        $('#bgTargets').handsontable({
            data: bgTargets,
            minSpareRows: 0,
            colHeaders: ["Old", "New"],
            contextMenu: false,
            colWidths: 100,
            columns: [
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'}
            ],
            rowHeaders: ["Day", "Night"]
        });

        $('#activeIns').handsontable({
            data: activeIns,
            minSpareRows: 0,
            colHeaders: ["Old", "New"],
            contextMenu: false,
            colWidths: 100,
            columns: [
                {type: 'numeric', format: '0,0'},
                {type: 'numeric', format: '0,0'}
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