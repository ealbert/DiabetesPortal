<article id="Details">
    <div id="sectionDetails" class="toggler" title="Toggle shortcut [CTRL]+1">
        <span id="sectionDetails-icon" class="closed"></span>
        <span>Patient Details</span>
    </div>
    <form id="sectionDetails-details" class="section">
        <fieldset class="withBorder">
            <div>
                <div style="float: left">
                    <span><strong>Address Details</strong></span>
                    <p>
                        12 Greenway<br/>
                        Model Farm Road<br/>
                        Cork<br/>
                    </p>
                </div>

                <fieldset id="transfer_details">
                    <legend>Transfer Details</legend>
                    <label>From:</label>
                    <select form="sectionDetails-details">
                        <option value="blank">-- select one centre --</option>
                        <option value="Crumlin">OLCHC</option>
                        <option value="TempleStreet">TSUH</option>
                        <option value="Cork">CUH</option>
                        <option value="Tallaght">NCH</option>
                        <option value="Limerick">LRH</option>
                    </select><br/>
                    <label>Referring Clinician:</label>
                    <input type="text"/>
                    <label>Mobile:</label>
                    <input type="text"/>
                </fieldset>
                <div style="float: right; margin-right: 20px;">
                    <br/>
                    <input type="radio" value="diagnosis" name="type"/><label>Diagnosis</label>
                    <br/>
                    <input type="radio" value="transfer" name="type"/><label>Transfer</label>
                </div>
            </div>
            <div style="clear: both;">&nbsp</div>
            <strong >Illness at diagnosis</strong>
            <textarea></textarea>
            <strong>Medical History</strong>
            <textarea></textarea>
            <strong>Family History</strong>
            <textarea></textarea>
            <input class="rightCol" type="submit" name="education" value="Save"/>
        </fieldset>
    </form>
</article>
<?php
