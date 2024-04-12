<h1>Muusika ankeet</h1>
<form name="Ankeet">
    <table>
        <tbody>

        <tr>
            <td>
                <!--radionupp-->
                <strong>Millist muusika sa kuulad enam?</strong>
            </td>
            <td>
                <input type="checkbox" name="zanr" id="rap" value="Rap" onchange="kus_1()">
                <label for="rap">Rap</label>
                <br>
                <input type="checkbox" name="zanr" id="rock_n_roll" checked="" value="Rock'n'roll" onchange="kus_1()">
                <label for="rock_n_roll">Rock'n'roll</label>
                <br>
                <input type="checkbox" name="zanr" id="popmuusika" value="Popmuusika" onchange="kus_1()">
                <label for="popmuusika">Popmuusika</label>
                <br>
                <input type="checkbox" name="zanr" id="jazz" value="Jazz" onchange="kus_1()">
                <label for="jazz">Jazz</label>
                <br>
                <input type="checkbox" name="zanr" id="klassikaline" value="Klassikaline" onchange="kus_1()">
                <label for="klassikaline">Klassikaline</label>
                <br>
                <input type="checkbox" name="zanr" id="fonk" value="Phonk" onchange="kus_1()">
                <label for="fonk">Phonk</label>
                <br>
            </td>
            <td>
                <div id="nvastus_1"></div>
            </td>
        </tr>

        <tr>
            <td>
                <!--ripploend-->
                <strong>Mis sa arvad muusika kullmisest koolis?</strong>
            </td>
            <td>
                <select name="arvamus" id="arvamus" onchange="kus_2()">
                    <option>Vali...</option>
                    <option value="Saab kuulada kus tahad">Saab kuulada kus tahad</option>
                    <option value="Saab kuulada, aga pole klassis">Saab kuulada, aga pole klassis</option>
                    <option value="Saab kuulada ainult kõrvaklappiga">Saab kuulada ainult kõrvaklappiga</option>
                    <option value="Ei saab üldse">Ei saab üldse</option>
                </select>
            </td>
            <td><div id="nvastus_2"></div></td>
        </tr>
        <tr>
            <td>
                <!--tekstikast-->
                <label for="mittu_tundi">Mittu tundi päevas sa kuulad kuusikat</label>
            </td>
            <td>
                <input type="number" name="nimi" id="mittu_tundi" placeholder="tundi..." onchange="kus_3()">
            </td>
            <td><div id="nvastus_3"></div></td>
        </tr>
        <tr>
            <td>
                <!--markerroot-->
                <strong>Kas saate ka muusikat kuulata telefonist?</strong>
            </td>
            <td>
                <input type="radio" name="tel_muus" id="Jah" value="saad" onchange="kus_4()">
                <label for="Jah">Jah</label>
                <br>
                <input type="radio" name="tel_muus" id="Ei" value="ei saa" onchange="kus_4()">
                <label for="Ei">Ei</label>

            </td>
            <td><div id="nvastus_4"></div></td>
        </tr>
        <tr>
            <td>
                <!--markerroot-->
                <strong>Kas sa luulad raadiot?</strong>
            </td>
            <td>
                <input type="radio" name="raadiot" id="Jah2" value="kuulad" onchange="kus_5()">
                <label for="Jah2">Jah</label>
                <br>
                <input type="radio" name="raadiot" id="Ei2" value="ei kuula" onchange="kus_5()">
                <label for="Ei2">Ei</label>

            </td>
            <td>
                <div id="nvastus_5"></div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nimeta">Millised raadiojaame oskate nimetada?</label>
            </td>
            <td>
                <input type="text" name="nimeta" id="nimeta" placeholder="Millised..." oninput="kus_6()">
            </td>
            <td>
                <div id="nvastus_6"></div>
            </td>
        </tr>
        <tr>
            <td>
                <!--radionupp-->
                <strong>Millist muusikud/ ansambleid sa tead?</strong>
            </td>
            <td>
                <input type="checkbox" name="muusikud" id="Morgen" value="Morgenstern" onchange="kus_7()">
                <label for="Morgen">Morgenstern</label>
                <br>
                <input type="checkbox" name="muusikud" id="Kizaru" value="Kizaru" onchange="kus_7()">
                <label for="Kizaru">Kizaru</label>
                <br>
                <input type="checkbox" name="muusikud" id="Big_baby_tape" value="Big Baby Tape" onchange="kus_7()">
                <label for="Big_baby_tape">Big Baby Tape</label>

            </td>
            <td><div id="nvastus_7"></div></td>
        </tr>
        <tr>
            <td>
                <!--url-->
                <label for="lemmiklaul">Sisesta sinu lemmiklaulu url</label>
            </td>
            <td>
                <input type="text" name="url" id="lemmiklaul" placeholder="https://example.com" oninput="kus_8()">
            </td>
            <td><div id="nvastus_8"></div></td>


        </tr>
        <tr>
            <td>
                <!--file-->
                <label for="email">Sisesta oma email:</label>
            </td>
            <td>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" oninput="kus_9()">
            </td>
            <td><div id="nvastus_9"></div></td>
        </tr>
        <tr>
            <td>
                <!--range-->
                <strong>Hinda oma kõrva muusika vastu(1-10)</strong>
            </td>
            <td>
                <input type="range" name="kord" id="kord" min="0" max="10" onchange="kus_10()">
            </td>
            <td><div id="nvastus_10"></div></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="OK" onclick="koikkokku2()">
            </td>
            <td>
                <input type="reset" value="RESET">
            </td>
            <td><div id="nvastus_11"></div></td>

        </tr>

        </tbody>
    </table>
</form>