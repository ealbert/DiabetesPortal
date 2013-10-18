<div>
    <div style="display: inline-table; width: 90%;">
        <h2>Injection - Doses</h2>
        <div id="injectionDoses" class="handsontable"></div>
        <br/>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        var injectionDoses = [
            ["", "", "", "", "", "", "", "", ""]
        ];

        $('#injectionDoses').handsontable({
            data: injectionDoses,
            minSpareRows: 0,
            contextMenu: false,
            minRows: 10,
            colWidths: 80,
            colHeaders: ["Weekday", "Breakfast", "Snack", "Lunch", "Snack", "Dinner", "Snack", "Bed", "Night"]
        });

    });

</script>
