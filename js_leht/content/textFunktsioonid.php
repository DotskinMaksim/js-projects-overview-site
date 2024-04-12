<?php


function clearVarsExcept($url, $varname) {
    return "?$varname=" . $_REQUEST[$varname];
}

function replaceWordWithHashes($word) {
    $length = mb_strlen($word, 'UTF-8');

    if ($length < 3) {
        return $word;
    }

    $numberOfHashes = max($length - 2, 0);
    return $word[0] . str_repeat('#', $numberOfHashes) . mb_substr($word, -1, 1, 'UTF-8');
}

echo "<h2>Textfunktsioonid</h2>";

echo "<div>";
$tekst = "November on viiimane sygisekuu";
echo $tekst;
echo "</div>";
echo "<br>";

echo "<div>";
echo strtolower($tekst);
echo "</div>";
echo "<br>";

echo "<div>";
echo strtoupper($tekst);
echo "</div>";
echo "<br>";

echo "<div>";
echo ucwords(strtolower($tekst));
echo "</div>";
echo "<br>";

echo "<div>";
echo "Teksti pikkus on: " . strlen($tekst);
echo "</div>";
echo "<br>";

echo "<div>";
echo "Lausel on " . str_word_count($tekst) . " sõnu";
echo "</div>";
echo "<br>";

echo "<div>";
echo substr($tekst, 2, 5);
echo "</div>";
echo "<br>";

echo "<div>";
echo "Esimese tyhiku asukont on " . strpos($tekst, " ");
echo "</div>";
echo "<br>";

echo "<div>";
echo "Esimene sõna on: " . substr($tekst, 0, strpos($tekst, " "));
echo "</div>";
echo "<br>";

echo "<div>";
echo "Sõnad pärast esimest: " . substr($tekst, strpos($tekst, " "), strlen($tekst) - strpos($tekst, " "));
echo "</div>";
echo "<br>";

echo "<div>";
echo "<h2>Arva ära riigimõistatus</h2>";



$riigid = array("Saksamaa","Eesti", "Inglismaa", "Venemaa", "Valgevene", "Soome");

if (isset($_REQUEST["uusRiig"])) {
    $uusRiig = $riigid[array_rand($riigid)];
    $fileName = "riig.txt";

    file_put_contents($fileName, "");

    file_put_contents($fileName, $uusRiig, FILE_APPEND);

    echo "<body style='background-color: #f0f0f0'>";
}
function countVowels($word) {
    $word = mb_strtolower($word);
    $vowels = ['a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü'];


    $vowelCount = 0;
    foreach ($vowels as $vowel) {
        $vowelCount += mb_substr_count($word, $vowel);
    }

    return $vowelCount;
}

$riig=file_get_contents("riig.txt");
echo "<ol>";
echo "<li>Esimene riigi täht on: " . substr($riig, 0, 1) . "</li>";
echo "<li>Viimane riigi täht on: " . substr($riig, -1, 1) . "</li>";
echo "<li>Riigi tagurpidi esimesed 3 tähted: " . substr(strrev($riig), 0, 3) . "</li>";
echo "<li>Riigi nimi pikkus on: " . strlen($riig) . "</li>";
echo "<li>Täishäälikute arv sõnas on: " . countVowels($riig). "</li>";

echo "</ol>";

?>
<form id="form_kontroll" name="kontroll" action="<?= clearVarsExcept(basename($_SERVER['REQUEST_URI']), "veebileht") ?>" method='post'>
    <strong>Kontroll</strong>
    <input type="text" name="kontroll">
    <input type="submit" value="ok" name="ok">
    <input type="submit" value="Uus riig" name="uusRiig">
</form>

<?php
if (isset($_REQUEST["ok"]) && isset($_REQUEST["kontroll"]) && isset($riig)) {
    if (strtolower($_REQUEST["kontroll"]) == strtolower($riig)) {
        echo "<div class='center-text'>";
        echo "<body style='background-color: green;'>";
        echo "Õige vastus!";
        echo "</div>  ";
    } else {
        echo "<div class='center-text'>";
        echo "<body style='background-color: red;'>";
        echo "Vale vastus...";
        $hidenRiig = replaceWordWithHashes($riig);
        echo "Viimane vihje: " . $hidenRiig;
        echo "</div>  ";
    }
}
?>
