<div id="dialog-review" title="Create a new review encounter" style="display: none">
    <h2>Patient uses a pump</h2>
    <img src="../../Images/pump_logo.png" alt="Injection Logo"  style="display: inline-block;"/>
    <div style="display: inline-block; vertical-align: top; " >
        <form action="../encounter/routineVisit.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">New Routine Visit</button>
        </form>
        <form action="../encounter/annualReview.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">Annual Review</button>
        </form>
    </div>
    <br/>
    <br/>
    <h2>Patient uses injections</h2>
    <img src="../../Images/injection_logo.png" alt="Injection Logo" style="display: inline-block;"/>
    <div style="display: inline-block; vertical-align: top; " >
        <form action="../encounter/routineVisitInjections.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">New Routine Visit</button>
        </form>
        <form action="../encounter/annualReviewInjections.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">Annual Review</button>
        </form>
    </div>
</div>
<script type="text/javascript">

    $(function () {
        $("#dialog-review").dialog({
            modal: true,
            width: 320,
            show: 1000,
            hide: 1000,
            autoOpen: false,
            open: function(){
                $('.ui-widget-overlay').addClass('custom-overlay');
            },
            close: function() {
                $('.ui-widget-overlay').removeClass('custom-overlay');
            },
            buttons: {
                Cancel: function () {
                    $(this).dialog("close");
                }
            }
        });
    });
</script>