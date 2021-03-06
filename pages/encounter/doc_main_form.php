    <label class="field">Review Date:</label><input type="date" value="<?php echo $today; ?>"/>
    <br/><br/>
    <fieldset class="withBorder">
        <div style="display: inline-table; width: 50%">
            <label class="field">Height:</label><input type="text"/><br/>
            <label class="field">Weight:</label><input type="text"/><br/>
            <label class="field">HbA1c:</label><input type="text"/><br/>
            <label class="field">BP:</label><input type="text"/><br/>

            <label class="field">Daily Dose:</label>
            <input type="text"/>
            <label class="post-info"> = xxx units/kg/day</label>
            <br/>
            <label class="field">Glucagon:</label><input type="text" value="0"/>
        </div>
        <div style="display: inline-table;">
            <label class="field widerColumn">CHO Aware:</label>
            <select>
                <option value="true">Yes</option>
                <option value="false" selected>No</option>
            </select>
            <br/>
            <label class="field widerColumn">CHO Counting:</label>
            <select>
                <option value="true">Yes</option>
                <option value="false" selected>No</option>
            </select>
            <br/>
            <label class="field widerColumn">Hypo. Aware:</label>
            <select>
                <option value="true">Yes</option>
                <option value="false" selected>No</option>
            </select>
            <br/>
            <label class="field widerColumn">ISF:</label>
            <input type="text"/>
            <label class="post-info"> mmol/L</label>
        </div>
    </fieldset>
    <br/>
    <fieldset class="withBorder">
        <legend>Severe Hypoglycaemia Events In The Past Year</legend>
        <label class="firstColumn">Seizure</label>
        <input type="text" style="float: left;" value="0"/>
        <label class="firstColumn">&nbsp;&nbsp;Coma</label>
        <input type="text" value="0"/>
        <br/>
    </fieldset>
    <br/>
