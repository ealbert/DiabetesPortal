<?php
session_start();
$page_title = "PatientDetails";
$header_stylesheet = '<link href="../../css/main.css" rel="stylesheet" type="text/css"/>';
$header_scripts = '';
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body">
    <header>
        <h2>Patient Demographics</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
    <?php require('detailsSection.php');?>
    <?php require('encounters.php');?>
<script type="text/javascript">
    $(document).ready(function(){
        $("article .section").hide();
        $(".toggler").click(function(){
            var section = this.attributes['id'].value;
            if(!section) return;
            var sectionDetails = "#" + section + "-details";
            var sectionIcon = "#" + section + "-icon";
            var toOpen = $(sectionIcon).hasClass("closed");
            if(toOpen){
                $(sectionDetails).slideDown( function(){
                    $(sectionIcon).removeClass().addClass("open");
                        var menu = $(this).find(".dynamicMenu")[0];
                        if(!menu) return;
                        $(menu).removeClass("dynamicMenu");
                        var currentId = $(menu).attr('id');
                        jqueryslidemenu.buildmenu(currentId, arrowimages);
                });
            }
            else{
                $(sectionDetails).slideUp( function(){
                    $(sectionIcon).removeClass().addClass("closed");
                });
            }
        });
        <!--  Set table even rows to grey      -->
        $(".sectionLog tbody tr:even").addClass("grey-row");

        <!--  Toggles the check box in the records of the log section      -->
        // $(".sectionLog thead input[type*='checkbox']").click(function(){deleteCheckBoxToggle($(this)); });

        <!--  Short cuts -->
        Mousetrap.bind(['command+1', 'ctrl+1'], function(e) {
            $("#sectionDetails").click();
            if($("#sectionDetails-icon").hasClass("closed")){
                $("#sectionDetails").parent().find("input:first").focus();
            }
        });

        getChart();
    });
</script>

<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/patientDetails.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>
