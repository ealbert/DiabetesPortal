<div id="dialog-telephone" title="Create a new telephone encounter" style="display: none">
    <h2>Patient uses a pump</h2>
    <img src="../../Images/pump_logo.png" alt="Injection Logo"  style="display: inline-block;"/>
    <div style="display: inline-block; vertical-align: top; " >
        <form action="../encounter/telephonePump.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">Call Received</button>
            <input type="hidden" name="callType" value="Received" />
        </form>
        <form action="../encounter/telephonePump.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">Call Initiated</button>
            <input type="hidden" name="callType" value="Initiated" />
        </form>
    </div>
    <br/>
    <br/>
    <h2>Patient uses injections</h2>
    <img src="../../Images/injection_logo.png" alt="Injection Logo" style="display: inline-block;"/>
    <div style="display: inline-block; vertical-align: top; " >
        <form action="../encounter/telephoneInjections.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">Call Received</button>
            <input type="hidden" name="callType" value="Received" />
        </form>
        <form action="../encounter/telephoneInjections.php" method="get">
            <button class="dialog-button" type="submit" value="12345" name="patientId">Call Initiated</button>
            <input type="hidden" name="callType" value="Initiated" />
        </form>
    </div>
</div>
<script type="text/javascript">

    $(function () {
        $("#dialog-telephone").dialog({
            modal: true,
            width: 380,
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