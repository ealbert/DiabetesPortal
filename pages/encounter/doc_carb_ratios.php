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
<script type="text/javascript">
    $(document).ready(function(){

        var carbRatios = [
            [0, 0],
            [0, 0],
            [0, 0],
            [0, 0]
        ];

        var isfRecords = [
            [0, 0, 0]
        ];

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
    });
</script>