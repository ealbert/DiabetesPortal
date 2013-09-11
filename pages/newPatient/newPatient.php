<?php
session_start();
$page_title = "NewPatient";
$header_stylesheet = '<link href="../../css/newPatient.css" rel="stylesheet" type="text/css"/>';
$header_scripts = '';
require_once('/../common/header.php');
?>
<article class="body">
    <h2>New Patient</h2>
    <section>
        <form id="newPatient" action="../patientDetails/patientDetails.php">
            <fieldset>
                <div>
                    <div style="display: inline-table; width: 50%">
                        <label class="field">First Name:</label><input type="text"/><br/>
                        <label class="field">Last Name:</label><input type="text"/><br/>
                        <label class="field">Date of Birth:</label><input type="date"/><br/>
                        <label class="field">Gender:</label><select form="newPatient">
                            <option value="blank">-- select one gender --</option>
                            <option value="Crumlin">Female</option>
                            <option value="TempleStreet">Male</option>
                        </select><br/>
                        <label class="field">Ethnic Group:</label>
                        <select form="newPatient">
                            <option value="blank">-- select one ethnic group --</option>
                            <option value="White-Irish">White Irish</option>
                            <option value="White-Irish-Traveller">White Irish Traveller</option>
                            <option value="White-Other">White Other</option>
                            <option value="Black-African">Black African</option>
                            <option value="Black-Other">Black Other</option>
                            <option value="Asian-Chinese">Chinese</option>
                            <option value="Asian-Other">Asian Other</option>
                            <option value="Other">Other</option>
                        </select>
                        <br/>

                        <label class="field">Centre:</label>
                        <select form="newPatient">
                            <option value="blank">-- select one centre --</option>
                            <option value="Crumlin">OLCHC</option>
                            <option value="TempleStreet">TSUH</option>
                            <option value="Cork">CUH</option>
                            <option value="Tallaght">NCH</option>
                            <option value="Limerick">LRH</option>
                        </select>
                        <br/>
                        <label class="field">MRN:</label><input type="text"/><br/>
                        <label class="field">Date of Diagnosis:</label><input type="date"/><br/>
                    </div>
                    <div style="display: inline-table;">

                        <label class="field">Diabetes Type:</label>
                        <select form="newPatient">
                            <option value="blank">-- select one diabetes type --</option>
                            <option value="type1">T1DM</option>
                            <option value="type2">T2DM</option>
                        </select>
                        <br/>
                        <label class="field">Uses Pump:</label>
                        <select id="pumpSelect" form="newPatient">
                            <option value="type1">Yes</option>
                            <option value="type2" selected="selected">No</option>
                        </select>
                        <br/>
                        <label class="field">Since:</label>
                        <input id="pumpDate" type="date" disabled="disabled"/><br/>

                    </div>
                </div>
                <br/>
                <input type="submit" value="Create">
            </fieldset>
        </form>
    </section>
</article>
<br/>
<script type="text/javascript">
    $("#pumpSelect").change(function(){
       var value =  $("#pumpSelect option:selected").text();
        if(value == null) return;
       if(value == 'Yes'){
           $("#pumpDate").prop("disabled", false);
       }
       else{
           $("#pumpDate").prop("disabled", "disabled");
       }
    });
</script>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/newPatient.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>