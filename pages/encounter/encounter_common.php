<script type="text/javascript">
    $(document).ready(function(){
        getChart();
    });

    function showForm(event, formToShow){
        $("#reviewMenu a").removeClass("currentForm");
        $(event.target).addClass("currentForm");
        $(".reviewSubForm").hide();
        $("#" + formToShow).show();
    }
</script>