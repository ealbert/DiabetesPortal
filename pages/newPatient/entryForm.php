<article class="body">
    <h2>New Patient</h2>
    <section>
        <form id="searchForm" action="main.php">
            <fieldset>
                <label class="field">First Name:</label><input type="text"/><br/>
                <label class="field">Last Name:</label><input type="text"/><br/>
                <label class="field">Date of Birth:</label><input type="date"/><br/>
                <label class="field">Gender:</label><input type="text"/><br/>
                <label class="field">Ethnicity:</label><input type="text"/><br/>
                <label class="field">Centre:</label>
                <select form="sectionDetails-details">
                    <option value="blank">-- select one centre --</option>
                    <option value="Crumlin">OLCHC</option>
                    <option value="TempleStreet">TSUH</option>
                    <option value="Cork">CUH</option>
                    <option value="Tallaght">NCH</option>
                    <option value="Limerick">LRH</option>
                </select><br/>
                <label class="field">MRN:</label><input type="text"/><br/>
                <input type="submit" value="Create">
            </fieldset>
        </form>
    </section>
</article>
<br/>