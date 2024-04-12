<h1>Saia kalkulaator</h1>
<form name="kalk">
    <table>
        <tr>
            <td>
                <label for="saiatyyp">Millist saia? (juustu---1&euro;, pontsik---1.5&euro;, kaaneli---1.2&euro;)</label>
                <br>
                <input type="text" id="saiatyyp" oninput="inputTextValue()">
            </td>
            <td>
                <label for="saiatyyp2">Vali saia tüüp</label>
                <br>
                <select id="saiatyyp2" onchange="selectOptionChange(event)">
                    <option value="">Vali...</option>
                    <option value="juustu">Juustu</option>
                    <option value="pontsik">Pontsik</option>
                    <option value="kaaneli">Kaaneli</option>
                </select>
            </td>
            <td>
                <strong>Tee oma valik:</strong>
                <br>
                <input type="radio" id="juustu" name="saiatyyp3" value="juustu" onclick="radioChange(event)">
                <label for="juustu">Juustu</label>
                <br>
                <input type="radio" id="pontsik" name="saiatyyp3" value="pontsik" onclick="radioChange(event)">
                <label for="pontsik">Pontsik</label>
                <br>
                <input type="radio" id="kaaneli" name="saiatyyp3" value="kaaneli" onclick="radioChange(event)">
                <label for="kaaneli">Kaaneli</label>
            </td>
            <td>
                <strong>Tee oma valik:</strong>
                <br>
                <input type="checkbox" name="saiatyyp4" id="juustu1" value="juustu1" onchange="checkboxChange(event)">
                <label for="juustu1">Juustu</label>
                <br>
                <input type="checkbox" name="saiatyyp4" id="pontsik1" value="pontsik1" onchange="checkboxChange(event)">
                <label for="pontsik1">Pontsik</label>
                <br>
                <input type="checkbox" name="saiatyyp4" id="kaaneli1" value="kaaneli1" onchange="checkboxChange(event)">
                <label for="kaaneli1">Kaaneli</label>
                <br>

            </td>
        </tr>
        <tr>
            <td>
                <label for="kogus">Mitu saia sina soovid?</label>
                <input type="number" min="1" max="10" step="1" id="kogus" name="kogus">
                <input type="button" value="Arvuta" onclick="inputTextValue()">
                <div id="vastus">Hind on</div>
            </td>
        </tr>
    </table>
</form>