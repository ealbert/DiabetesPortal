<?php
session_start();
$page_title = "PatientSearch";
$header_stylesheet = '<link href="../../css/main.css" rel="stylesheet" type="text/css"/>';
$header_stylesheet .= '<link href="../../css/patientSearch.css" rel="stylesheet" />';
$header_scripts = '';
require_once('/../common/header.php');
?>
<article class="body" xmlns="http://www.w3.org/1999/html">
    <h2>Patient Search</h2>
    <section>
        <form id="searchForm" action="main.php">
            <fieldset>
                <label class="field">First Name:</label><input type="text"/><br/>
                <label class="field">Last Name:</label><input type="text"/><br/>
                <label class="field">Date of Birth:</label><input type="date"/><br/>
                <label class="field">MRN:</label><input type="text"/><br/>
                <input type="submit" value="Find">
            </fieldset>
        </form>
    </section>
</article>
<br/>
<article id="searchResults" style="display: none;" class="body">
    <h2>Search Results</h2>
    <section>
        <fieldset>
            <table>
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>MRN</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Joe</td>
                    <td>Bloggs</td>
                    <td>21-Feb-2003</td>
                    <td><a href="../patientDetails/patientDetails.php">56452354</a></td>
                    <td>
                        <form action="../encounter/routineVisit.php" method="get">
                            <button type="submit" value="12345" name="patientId">New Review</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </section>
</article>
<script type="text/javascript">
    $("#searchForm").submit(function(){
       $("#searchResults").fadeIn('slow');
        return false;
    });
</script>
<?php
$footer_scripts = '';
require_once('/../../templates/pageComments/patientSearch.html');
require_once('/../common/pageComments.php');
require_once('/../common/footer.php');
?>