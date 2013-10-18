<div>
    <div style="display: inline-table; width: 90%;">
        <h2>Pump - Doses</h2>
        <div id="pumpDoses" class="handsontable"></div>
        <br/>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        var pumpDoses = [
            ["", "", "", "", ""]
        ];

        $('#pumpDoses').handsontable({
            data: pumpDoses,
            minSpareRows: 0,
            contextMenu: false,
            minRows: 26,
            colWidths: 100,
            rowHeaders: ["Date", "Day", "00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10"
                , "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23"]
        });

    });

</script>
