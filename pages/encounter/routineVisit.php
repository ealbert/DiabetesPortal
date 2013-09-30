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
        <h2>New Routine Visit [PUMP]</h2>
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
                    <div style="display: inline-table; width: 25%;">
                        <h2>Active Insulin</h2>
                        <div id="activeIns" class="handsontable"></div>
                    </div>
                </div>
                <input type="button" value="Next" onclick="showForm('formTwo', 'formThree')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formTwo', 'formOne')" />
            </fieldset>
            <fieldset class="formThree" style="display: none;">
                <div>
                    <div style="display: inline-table; width: 40%;">
                        <h2>Insulin - Carb Ratio</h2>
                        <div id="carbRatio" class="handsontable"></div>
                        <br/>
                    </div>
                    <div style="display: inline-table; width: 40%;">
                        <h2>Insulin Sensitivity Factor</h2>
                        <div id="isf" class="handsontable"></div>
                    </div>
                </div>
                <input type="button" value="Next" onclick="showForm('formThree', 'formFour')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formThree', 'formTwo')" />
            </fieldset>
            <fieldset class="formFour" style="display: none;">
                <h2>Nursing Notes</h2>
                <div style="display: inline-table; width: 50%">
                    <label class="field widerColumn">Sick Day Rules:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">Ketone Testing:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">Record Keeping:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">Alcohol:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">Contraception:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                </div>
                <div style="display: inline-table;">
                    <label class="field widerColumn">Hypoglycaemia rules:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">Dietary Issues:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">School:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                    <label class="field widerColumn">Smoking:</label>
                    <select>
                        <option value="true">Yes</option>
                        <option value="false" selected>No</option>
                    </select>
                    <br/>
                </div>
                <br/><br/>
                <h3>Comments</h3>
                <textarea rows="6" cols="50"></textarea>
                <input type="button" value="Next" onclick="showForm('formFour', 'formFive')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formFour', 'formThree')" />
            </fieldset>
            <fieldset class="formFive" style="display: none;">
                <div>
                    <div style="display: inline-table; width: 50%;">
                        <h2>Insulin - Carb Ratio</h2>
                        <div id="dietHistory" class="handsontable"></div>
                        <br/>
                    </div>
                    <div id="foodGroups" style="display: inline-table; width: 25%;">
                        <h2>Food Groups Checklist</h2>
                        <input type="checkbox">
                        <label class="field widerColumn">Energy</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Iron</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Protein</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Oily Fish</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Fruit & Veg</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Legumes</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Calcium</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Multivit/Mins</label><br/>
                    </div>
                    <div id="carbCounting" style="display: inline-table; width: 20%;">
                        <h2>Carb Counting</h2>
                        <input type="checkbox">
                        <label class="field widerColumn">Basic (Discussed at Dx)</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Reading Labels</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Weighing Portions</label><br/>
                        <input type="checkbox">
                        <label class="field widerColumn">Competent</label><br/>
                    </div>
                </div>
                <input type="button" value="Next" onclick="showForm('formFive', 'formSix')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formFive', 'formFour')" />
            </fieldset>
            <fieldset class="formSix" style="display: none;">
                <a href="routineVisitPdf.php" target="_blank" style="float: right;" >Print Form</a>
                <h2>Medical Notes</h2>
                <textarea rows="6" cols="50"></textarea>
                <h2>Extra Notes</h2>
                <textarea rows="6" cols="50"></textarea>
                <input type="submit" value="Save" style="float: right;"/>
                <input type="button" value="Previous" onclick="showForm('formSix', 'formFive')" />
            </fieldset>
        </form>
    </section>
</article>

<script type="text/javascript">
    $(document).ready(function(){
        getChart();
        var basalRates = [
            [0, 0, 0]
        ];

        var bgTargets = [
            [0, 0],
            [0, 0]
        ];

        var activeIns = [
            [0, 0]
        ];

        var carbRatios = [
            [0, 0],
            [0, 0],
            [0, 0],
            [0, 0]
        ];

        var isfRecords = [
            [0, 0, 0]
        ];

        var dietHistories = [
            [""], [""], [""], [""], [""], [""], [""]
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
            colWidths: 90,
            columns: [
                {type: 'numeric', format: '0,0'},
                {type: 'numeric', format: '0,0'}
            ]
        });

        $('#carbRatio').handsontable({
            data: carbRatios,
            minSpareRows: 0,
            colHeaders: ["Old", "New"],
            contextMenu: false,
            colWidths: 100,
            columns: [
                {type: 'numeric', format: '0,0'},
                {type: 'numeric', format: '0,0'}
            ],
            rowHeaders: ["Breakfast", "Lunch", "Dinner", "Bedtime"]
        });


        $('#isf').handsontable({
            data: isfRecords,
            minSpareRows: 1,
            maxRows: 4,
            colHeaders: ["Time", "Old", "New"],
            contextMenu: false,
            colWidths: 100,
            columns: [
                {type: 'text'},
                {type: 'numeric', format: '0,0'},
                {type: 'numeric', format: '0,0'}
            ]
        });

        $('#dietHistory').handsontable({
            data: dietHistories,
            minSpareRows: 0,
            rowHeaders: false,
            contextMenu: false,
            colWidths: 400,
            columns: [
                {type: 'text'}
            ],
            rowHeaders: ["Breakfast", "Snack", "Lunch", "Snack", "Diner", "Bedtime", "Sports"]
        });



    });
    function showForm(formToClose, formToShow){
        $("." + formToClose).hide();
        $("." + formToShow).show();
    };

</script>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/routineVisit.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>