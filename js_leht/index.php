<?php session_start();?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Js tööde Maksim leht</title>
    <link rel="stylesheet" type="text/css" href="styleheets/style.css">
    <script src="js/joonisScript.js"></script>
    <script src="js/muusikaScript.js"></script>
    <script src="js/muusikaScript2.js"></script>
    <script src="js/calculatorScript.js"></script>
</head>
<body>
<!--sisu header.php failist-->
<?php
    include('header.php');
?>
<!--sisu nav.php failist-->
<?php
    include('nav.php');
?>
<!--sisu content kaustast-->
<?php
if(isset($_GET["veebileht"])){
    include('content/'.$_GET["veebileht"]);
} else {
     echo "Tere, siin sa leiad minu Javascript tööd, kui sa clickid menüü peale";
}

?>
<!--sisu footer.php failist-->
<?php
    include('footer.php');
?>

</body>
</html