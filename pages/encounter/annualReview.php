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
        <h2>Annual Review [PUMP]</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
</article>
<br/>
<article id="ReviewDetails" class="body">
    <section>
        <form id="reviewForm" action="../patientDetails/patientDetails.php" method="post">
            <fieldset class="formOne">
                <?php require('doc_main_form.php');?>
                <input type="button" value="Next" onclick="showForm('formOne', 'formTwo')" style="float: right;" />
                <input type="button" value="Cancel" onclick="history.back()" />
            </fieldset>
            <fieldset class="formTwo" style="display: none;">
                <?php require('doc_pump_metrics.php');?>
                <input type="button" value="Next" onclick="showForm('formTwo', 'formThree')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formTwo', 'formOne')" />
            </fieldset>
            <fieldset class="formThree" style="display: none;">
                <?php require('doc_carb_ratios.php');?>
                <input type="button" value="Next" onclick="showForm('formThree', 'formFour')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formThree', 'formTwo')" />
            </fieldset>
            <fieldset class="formFour" style="display: none;">
                <?php require('nurse_notes.php');?>
                <input type="button" value="Next" onclick="showForm('formFour', 'formFive')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formFour', 'formThree')" />
            </fieldset>
            <fieldset class="formFive" style="display: none;">
                <?php require('nurse_notes.php');?>
                <input type="button" value="Next" onclick="showForm('formFive', 'formSix')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formFive', 'formFour')" />
            </fieldset>
            <fieldset class="formSix" style="display: none;">
                <?php require('doc_annual_notes.php');?>
                <input type="button" value="Next" onclick="showForm('formSix', 'formSeven')" style="float: right;" />
                <input type="button" value="Previous" onclick="showForm('formSix', 'formFive')" />
            </fieldset>
            <fieldset class="formSeven" style="display: none;">
                <a href="routineVisitPdf.php" target="_blank" style="float: right;" >Print Form</a>
                <h2>Medical Notes</h2>
                <textarea rows="6" cols="50"></textarea>
                <h2>Extra Notes</h2>
                <textarea rows="6" cols="50"></textarea>
                <input type="submit" value="Save" style="float: right;"/>
                <input type="button" value="Previous" onclick="showForm('formSeven', 'formSix')" />
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