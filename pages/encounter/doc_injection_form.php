<div>
    <h2>Injection Therapy</h2>
    <div id="mdi" class="handsontable"></div>
    <br/>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        var mdiRecords = [
            ["", 0, 0, 0, 0, 0, 0, 0, 0]
        ];

        $('#mdi').handsontable({
            data: mdiRecords,
            minSpareRows: 1,
            maxRows: 4,
            colHeaders: ["Insulin Type", "Old", "New", "Old", "New", "Old", "New", "Old", "New"],
            contextMenu: false,
            colWidths: [200, 45, 45, 45, 45, 45, 45, 45, 45],
            columns: [
                {type: 'text'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'},
                {type: 'numeric', format: '0,0.0'}
            ],
            afterRender: function(){
                setMdiHeaders();
            }
        });
    });

    function setMdiHeaders() {
        var hasMdiTopHeader = $("#mdiTopHeader").length > 0;
        var template =
            "<th><div class='relative'><span class='colHeader'></span></div></th>" +
                "<th colspan='2'><div class='relative'><span class='colHeader'>Breakfast</span></div></th>" +
                "<th colspan='2'><div class='relative'><span class='colHeader'>Lunch</span></div></th>" +
                "<th colspan='2'><div class='relative'><span class='colHeader'>Dinner</span></div></th>" +
                "<th colspan='2'><div class='relative'><span class='colHeader'>Bedtime</span></div></th>";

        if(hasMdiTopHeader){
            $("#mdiTopHeader").html(template);
            return;
        }
        $("<tr id='mdiTopHeader'>" + template + "</tr>").prependTo("#mdi table thead");
    };

</script>