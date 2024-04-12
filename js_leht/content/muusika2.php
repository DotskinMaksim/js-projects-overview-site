<h1>Muusika ankeet</h1>
<form name="Ankeet">
    <table>
        <tbody>
        <tr>
            <td>
                <label for="nimeta">Mis sinu nimi on?</label>
            </td>
            <td>
                <input type="text" name="nimi" id="nimi" placeholder="Nimi..." oninput="tervist()">
                <div id="vastus"></div>
            </td>
        </tr>

        <tr>
            <td>
                <!--radionupp-->
                <strong>Millist muusika sa kuulad enam?</strong>
            </td>
            <td>
                <input type="checkbox" name="zanr" id="rap">
                <label for="rap">Rap</label>

                <br>
                <input type="checkbox" name="zanr" id="rock_n_roll" checked="">
                <label for="rock_n_roll">Rock'n'roll</label>
                <br>
                <input type="checkbox" name="zanr" id="popmuusika">
                <label for="popmuusika">Popmuusika</label>
                <br>
                <input type="checkbox" name="zanr" id="jazz">
                <label for="jazz">Jazz</label>
                <br>
                <input type="checkbox" name="zanr" id="klassikaline">
                <label for="klassikaline">Klassikaline</label>
                <br>
                <input type="checkbox" name="zanr" id="fonk">
                <label for="fonk">Fonk</label>

            </td>
        </tr>
        <tr>
            <td>
                <!--ripploend-->
                <label for="elu">Kus sa elad?</label>
            </td>
            <td>
                <select name="elukoht" id="elu" onchange="selectOptionValik2()">
                    <option>Vali...</option>
                    <option value="Lasnamäe">Lasnamäe</option>
                    <option value="Mustamäe">Mustamäe</option>
                    <option value="Õismäe">Õismäe</option>
                    <option value="Haabersti">Haabersti</option>
                </select>
                <br>
                <label for="distanss">Marafooni distanss on</label>

                <input type="range"  id="distanss" min="0" max="100"
                       onchange="selectOptionValik2()">km
                <br>
                <input type="color" id="varv" onchange="selectOptionValik2()">
                <br>

                <div id="vastus_5"></div>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <!--tekstikast-->
                <label for="mittu_tundi">Mittu tundi päevas sa kuulad kuusikat</label>
            </td>
            <td>
                <input type="number" name="nimi" id="mittu_tundi" placeholder="tundi...">
            </td>
        </tr>
        <tr>
            <td>
                <!--markerroot-->
                <strong>Kas saate ka muusikat kuulata telefonist?</strong>
            </td>
            <td>
                <input type="radio" name="tel_muus" id="Jah" value="saad" onclick="radioValik()">
                <label for="Jah">Jah</label>
                <br>
                <input type="radio" name="tel_muus" id="Ei" value="ei saa" onclick="radioValik()">
                <label for="Ei">Ei</label>
                <br>
                <div id="vastus_2">

                </div>
                <img src="" id="pilt" >
                <br>

            </td>
        </tr>
        <tr>
            <td>
                <!--markerroot-->
                <strong>Kas sa luulad raadiot?</strong>
            </td>
            <td>
                <input type="radio" name="raadiot" id="Jah2">
                <label for="Jah2">Jah</label>
                <br>
                <input type="radio" name="raadiot" id="Ei2">
                <label for="Ei2">Ei</label>

            </td>
        </tr>
        <tr>
            <td>
                <label for="nimeta">Millised raadiojaame oskate nimetada?</label>
            </td>
            <td>
                <input type="text" name="nimeta" id="nimeta" placeholder="Millised...">

            </td>
        </tr>
        <tr>
            <td>
                <!--radionupp-->
                <strong>Millist muusikud/ ansambleid sa tead?</strong>
            </td>
            <td>
                <input type="checkbox" name="muusikud" id="Morgen" value="Morgenstern" onchange="checkBoxValik()">
                <label for="Morgen">Morgenstern</label>
                <br>
                <input type="checkbox" name="muusikud" id="Kizaru" value="Kizaru" onchange="checkBoxValik()">
                <label for="Kizaru">Kizaru</label>
                <br>
                <input type="checkbox" name="muusikud" id="Big_baby_tape" value="Big baby tape" onchange="checkBoxValik()">
                <label for="Big_baby_tape">Big Baby Tape</label>
                <div id="vastus_3"></div>

            </td>
        </tr>
        <tr>
            <td>
                <!--url-->
                <label for="lemmiklaul">Sisesta sinu lemmiklaulu url</label>
            </td>
            <td>
                <input type="url" name="url" id="lemmiklaul" placeholder="https://example.com">
            </td>
        </tr>
        <tr>
            <td>
                <!--file-->
                <label for="lemmik_file">Sinu lemmiklalulu fail:</label>
            </td>
            <td>
                <input type="file" name="lemmik_file" id="lemmik_file">
            </td>
        </tr>

        <tr>
            <td>
                <input type="button" value="OK" onclick="koikkokku()">
                <div id="vastus_4"></div>
            </td>
            <td>
                <input type="reset" value="RESET">
            </td>
        </tr>

        </tbody>
    </table>
</form>