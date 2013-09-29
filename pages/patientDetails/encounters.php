<article id="Outgoing">
    <div id="sectionOutgoing" class="toggler" >
        <span id="sectionOutgoing-icon" class="closed"></span>
        <span>Encounters</span>
    </div>
    <div id="sectionOutgoing-details" class="section sectionLog">
        <div id="encounterMenu"class="dynamicMenu jqueryslidemenu">
            <ul>
                <li><a href="../encounter/register.php">Register</a></li>
                <li><a href="../patientSearch/patientSearch.php">Diagnosis</a></li>
                <li><a href="#">Routine Visit</a>
                    <ul>
                        <li><a href="../encounter/routineVisit.php">Pump</a></li>
                        <li><a href="../encounter/routineVisitInjections.php">Injections</a></li>
                    </ul>
                </li>
                <li><a href="#">Annual Review</a>
                    <ul>
                        <li><a href="../encounter/annualReview.php">Pump</a></li>
                        <li><a href="../encounter/annualReviewInjections.php">Injections</a></li>
                    </ul>
                </li>
                <li><a href="#">Delete</a></li>

            </ul>
            <br style="clear: left" />
        </div>
        <fieldset>
            <table>
                <thead>
                <tr>
                    <td>&nbsp;</td>
                    <td>Incident Type</td>
                    <td>Date</td>
                    <td>Details</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Phone Call</td>
                    <td>25-May-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Emergency admission</td>
                    <td>30-May-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Extra Appointment</td>
                    <td>1-June-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Intensive Education</td>
                    <td>8-June-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>New Diagnosis</td>
                    <td>12-June-2013</td>
                    <td><a href="#">enter details</a> </td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
</article>
<?php
