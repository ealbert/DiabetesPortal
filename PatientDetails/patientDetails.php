<article id="PatientSummary" class="body">
    <header>
        <h2>Patient Demographics</h2>
    </header>

    <section>
        <fieldset>
            <table id="patientDetails">
                <tr>
                    <div class="patientDetailsCol-Left">
                        <label class="field">Name:</label><input disabled value="Joe Bloggs"/><br/>
                        <label class="field">Gender:</label><input disabled value="male"/><br/>
                        <label class="field">MRN:</label><input disabled value="56452354"/><br/>
                        <label class="field">Last Visit:</label><input disabled value="25-Jul-2013"/><br/>
                        <label class="field">Mobile:</label><input disabled value="085 341 2398"/><br/>
                    </div>
                    <div class="patientDetailsCol-Left">
                        <label class="field">DoB:</label><input disabled value="21-Feb-2003"/><br/>
                        <label class="field">Age:</label><input disabled value="10"/><br/>
                        <label class="field">Ethnicity:</label><input disabled value="Indo-European"/><br/>
                        <label class="field">Weight:</label><input disabled value="35 Kg"/><br/>
                        <label class="field">Height:</label><input disabled value="134 cm"/><br/>
                    </div>
                    <div id="hbac1_chart" class="patientDetailsCol-Left">
                        <div class="loaderWrapper" style="min-width: 400px; min-height: 120px;">
                            <img src="Images/spinner3-bluey.gif" style="max-width: 100%; max-height: 100%; display: block; margin: 0 auto;" />
                            <p style="text-align: center; font-size: .8em;">Loading chart</p>
                        </div>
                    </div>
                    </td>
                </tr>
            </table>
            <section id="metrics">
                <ul>
                    <li>
                        <span>Date<br/>Diag</span>
                        <p>Nov11</p>
                    </li>
                    <li><span><br/>Type</span>
                        <p>T1DM</p>
                    </li>
                    <li><span><br/>Centre</span>
                        <p>OLCHC</p>
                    </li>
                    <li><span><br/>HbA1c</span>
                        <p>7.8</p>
                    </li>
                    <li>
                        <span>Prev HbA1c</span>
                        <p>7.5</p>
                    </li>
                    <li><span>Diff<br/>HbA1c</span>
                        <p>+0.3</p>
                    </li>
                    <li>
                        <span>AntiBodies</span>
                        <p>GAD -<br/>IA2 -</p>
                    </li>
                    <li>
                        <span><br/>SH</span>
                        <p>2</p>
                    </li>
                    <li class="metric_disable">
                        <span><br/>DKA</span>
                        <p>0</p>
                    </li>
                    <li>
                        <span><br/>Pump</span>
                        <p>Dec12</p>
                    </li>
                    <li title="Kg/m2">
                        <span><br/>BMI</span>
                        <p>20.87</p>
                    </li>
                </ul>
            </section>
        </fieldset>
    </section>
    <?php require('detailsSection.php');?>
    <?php require('educationSection.php');?>
    <?php require('ongoing.php');?>
    <?php require('outpatientAppointments.php');?>
    <?php require('annualReview.php');?>
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

    /**
    function deleteCheckBoxToggle(checkbox) {
        var value = checkbox.prop('checked');
        $(checkbox).parentsUntil("fieldset").filter("table").find("tbody input[type*='checkbox']").prop("checked", value);
    }
    **/

    function getChart() {
        var parameters = "txt="+$('myText').val();
        var response = $.ajax({
            type: "POST",
            url:  "PatientDetails/hbac1_chart.php",
            data: parameters,
            dataType: "text",
            success: function(imageData) {
                $('#hbac1_chart').fadeOut('slow', function(){
                    $('#hbac1_chart').empty().html("<img src='data:image/png;base64," + imageData + "' />").fadeIn('slow');
                    });
            }
        });
    }

</script>

<?php
