<?php
require ('conf.php');
//andmete kustutamine tabelist
global $yhendus;
if(isset($_REQUEST["kustuta"])) {
    $paring = $yhendus->prepare("delete from prussakad where id=?");
    $paring->bind_param("i",$_REQUEST["kustuta"]);
    $paring->execute();


}
//Lisamine andmebaasile
if (isset($_REQUEST["toug"]) && !empty($_REQUEST["toug"])){
    $paring=$yhendus->prepare("
insert into prussakad(toug,murgine,varv,pilt) values(?,?,?,?)");
    $paring->bind_param("ssss",$_REQUEST["toug"],$_REQUEST["murgine"],$_REQUEST["varv"],$_REQUEST["pilt"]);
    //s-string, i-int
    $paring->execute();
    header("Location: $_SERVER[PHP_SELF]");
    //aadreddiribas kustutakse päring faili nimeni
}

?>
<section>
<h1>Tabel prussakad</h1>

<?php
//kuuab andmed SQL andmetabelist
global $yhendus;
$paring=$yhendus->prepare("SELECT id, toug,murgine,varv,pilt FROM prussakad");
$paring->bind_result($id, $toug, $murgine,$varv,$pilt);
$paring->execute();
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Tõug</th>";
echo "<th>Murgine?</th>";
echo "<th>Värv</th>";
echo "<th>Pilt</th>";
echo "<th>Kustutamine</th>";
echo "</tr>";
while($paring->fetch()){


    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$toug</td>";
    echo "<td>$murgine</td>";
    echo "<td style='background-color: $varv'>$varv</td>";

    echo "<td><img src='$pilt' alt='pilt' width='20%' height='20%'></td>";

    echo "<td><a href='?kustuta=$id'>Kustuta</a></td>";
    echo "</tr>";

}
echo "</table>";
echo "</section>";
echo "<br><br><br><br><br>";
$yhendus->close();
?>
<section>
<form action="" method="post">
    <label for="synd">Tõug</label>
    <input type="text" name="toug" id="toug">
    <br>
    <label for="murgine">Murgine?</label>
    <input type="radio" name="murgine" id="murgine" value="Jah">Jah
    <input type="radio" name="murgine" id="murgine" value="EI">Ei
    <br>
    <label for="varv">Värv</label>
    <input type="text" name="varv" id="varv">
    <br>

    <label for="pilt">Pildilink</label>
    <textarea name="pilt" id="pilt"></textarea>
    <br>
    <input type="submit" value="Lisa">
</section>
