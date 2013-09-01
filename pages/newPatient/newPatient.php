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
                <label class="field">First Name:</label><input type="text"/><br/>
                <label class="field">Last Name:</label><input type="text"/><br/>
                <label class="field">Date of Birth:</label><input type="date"/><br/>
                <label class="field">Gender:</label><select form="newPatient">
                    <option value="blank">-- select one gender --</option>
                    <option value="Crumlin">Female</option>
                    <option value="TempleStreet">Male</option>
                </select><br/>
                <label class="field">Ethnicity:</label><input type="text"/><br/>
                <label class="field">Centre:</label>
                <select form="newPatient">
                    <option value="blank">-- select one centre --</option>
                    <option value="Crumlin">OLCHC</option>
                    <option value="TempleStreet">TSUH</option>
                    <option value="Cork">CUH</option>
                    <option value="Tallaght">NCH</option>
                    <option value="Limerick">LRH</option>
                </select><br/>
                <label class="field">MRN:</label><input type="text"/><br/>
                <label class="field">Date of Diagnosis:</label><input type="date"/><br/>
                <input type="submit" value="Create">
            </fieldset>
        </form>
    </section>
</article>
<br/>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/newPatient.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>