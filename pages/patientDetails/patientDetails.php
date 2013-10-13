<?php
session_start();
$page_title = "PatientDetails";
$header_stylesheet = '';
$header_scripts = '';
require_once('/../common/header.php');
?>
<article id="PatientSummary" class="body">
    <header>
        <h2>Patient Demographics</h2>
    </header>
    <?php require('/../common/patientBoard.php');?>
    <div id="sectionsMenu" class="jqueryslidemenu">
        <ul>
            <li><a href="#" onclick="showSection(event, 'details')">Patient Details</a></li>
            <li><a href="#" onclick="showSection(event, 'encounters')" class="currentSection">Encounters</a></li>
        </ul>
        <br style="clear: left" />
    </div>
    <?php require('detailsSection.php');?>
    <?php require('encounters.php');?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#section-details").hide();
        /*
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
        */
        <!--  Set table even rows to grey      -->
        $(".sectionLog tbody tr:even").addClass("grey-row");
        getChart();
    });

    function showSection(event, sectionToOpen){
        $("#sectionsMenu a").removeClass("currentSection");
        event = event || window.event;
        var targetElement = event.target || event.srcElement;
        $(targetElement).addClass("currentSection");
        $(".section").slideUp();
        $("#section-" + sectionToOpen).slideDown();
    }
</script>

<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/patientDetails.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>
