<article id="Encounters">
    <div id="section-encounters" class="section sectionLog" style="margin-top: -10px;">
        <div id="menu-encounters"class="jqueryslidemenu">
            <ul>
                <li><a href="../encounter/register.php">Register</a></li>
                <li><a id="anchor-review" href="#">New Review</a></li>
                <li><a id="anchor-admission" href="#">New Admission</a></li>
                <li><a id="anchor-telephone" href="#">New Call</a></li>
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
                    <td>Telephone Call</td>
                    <td>25-May-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>DKA Admission</td>
                    <td>30-May-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Routine Visit</td>
                    <td>1-June-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Other Admission</td>
                    <td>8-June-2013</td>
                    <td><a href="#">view details</a> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Annual Review</td>
                    <td>12-June-2013</td>
                    <td><a href="#">enter details</a> </td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
</article>
<?php require('../common/dialog_admission.php'); ?>
<?php require('../common/dialog_review.php'); ?>
<?php require('../common/dialog_telephone.php'); ?>
<script type="text/javascript">

    $(function () {
        $("#anchor-review").click(function(){
            $("#dialog-review button").attr('value', 'hello');
            $("#dialog-review").dialog('open');
        });

        $("#anchor-admission").click(function(){
            $("#dialog-admission button").attr('value', 'hello');
            $("#dialog-admission").dialog('open');
        });

        $("#anchor-telephone").click(function(){
            $("#dialog-telephone button").attr('value', 'hello');
            $("#dialog-telephone").dialog('open');
        });
    });
</script>
