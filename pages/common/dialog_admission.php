<div id="dialog-admission" title="Create a new admission" style="display: none;">
    <form action="../admission/admit_ketoacidosis.php" method="get" style="text-align: center;">
        <button class="dialog-button" type="submit" value="12345" name="patientId">DKA Admission</button>
    </form>
    <form action="../admission/admit_sh.php" method="get" style="text-align: center;">
        <button class="dialog-button" type="submit" value="12345" name="patientId">Severe Hypo Admission</button>
    </form>
    <form action="../admission/admit_other.php" method="get" style="text-align: center;">
        <button class="dialog-button" type="submit" value="12345" name="patientId">Other Admission</button>
    </form>
</div>
<script type="text/javascript">


    $(function () {
        $("#dialog-admission").dialog({
            modal: true,
            width: 260,
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