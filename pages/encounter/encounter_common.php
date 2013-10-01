<script type="text/javascript">
    $(document).ready(function(){
        getChart();
    });

    function showForm(formToClose, formToShow){
        $("." + formToClose).hide();
        $("." + formToShow).show();
    };
</script>